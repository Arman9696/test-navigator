<?php

namespace IQDEV\Forms;

use CModule;
use CSubscription;
use IQDEV\Base\Helper;
use PHP_CodeSniffer\Files\FileList;

class FormsHandler
{
    /**
     * Автоматический вызов метода после проверки капчи
     *
     * @param $method
     * @param $arguments
     *
     * @return array
     */
    public static function __callStatic($method, $arguments)
    {
        $method = $method . 'Captcha';

        $remoteIp = \Bitrix\Main\Service\GeoIp\Manager::getRealIp();

        $isIqDev = $remoteIp == '109.248.46.148'
            || $remoteIp == '188.186.184.43'
            || $remoteIp == '185.11.4.159'
            || $remoteIp == '178.72.90.215';
        if ($isIqDev || \IQDEV\Base\Recaptcha::recaptchaCheck($arguments[0]["grecaptcha"])) {
            return self::$method(...$arguments);
        }
        return [
            'status' => false,
            'message' => 'Вы уже воспользовались формой отправки'
        ];
    }


    /**
     * Добавляет элемент в инфоблок
     *
     * @param $sIblockCode
     * @param $aIblockFields
     * @param $aIblockProperties
     *
     * @return mixed
     */
    private static function addIblockElement($sIblockCode, array $aIblockFields, array $aIblockProperties)
    {
        $iblockId = \IQDEV\Base\Helper::getIblockId($sIblockCode);

        $oEl = new \CIBlockElement;

        $aFields = [
            'IBLOCK_ID' => $iblockId,
            'NAME' => $aIblockFields['name'],
            'PROPERTY_VALUES' => $aIblockProperties,
            'PREVIEW_TEXT'    =>$aIblockFields['PREVIEW_TEXT'],
            'PREVIEW_PICTURE' =>$aIblockFields['PREVIEW_PICTURE'],
        ];

        $iItemId = $oEl->Add($aFields);

        return $iItemId;
    }

    /**
     * Проверяет на наличие уникальности свойства в инфоблоке
     *
     * @param $sIblockCode
     * @param $aProperties
     * @param $aProperties_Value
     * @param $iValue
     *
     * @return mixed
     */
    private static function issetIblockElement($sIblockCode, $aProperties, $aProperties_Value, $iValue)
    {
        $iblockId = \IQDEV\Base\Helper::getIblockId($sIblockCode);
        $bIsset   = true;
        $aFields  = [
            'IBLOCK_ID' => $iblockId
        ];
        $Elements = \CIBlockElement::GetList([["SORT" => "ASC"]], $aFields, false, ["nPageSize" => 50]);

        while (($arElement = $Elements->GetNextElement()) && $bIsset != false) {
            $Element = $arElement->GetProperties(false, [$aProperties => $aProperties_Value]);
            $Element = $Element[$aProperties_Value]['VALUE'];
            if ($Element == $iValue) {
                $bIsset = false;
            } elseif ($Element != $iValue) {
                $bIsset = true;
            }
        }


        return $bIsset;
    }

    /**
     * Отправляет портфолио на почту
     *
     * @param $aData
     *
     * @return mixed
     */
    public static function sendTenderPortfolioCaptcha($aData)
    {
        $arResult['status'] = false;

        $arFile = [
            "name" => $_FILES['file']['name'],
            "size" => $_FILES['file']['size'],
            "tmp_name" => $_FILES['file']['tmp_name'],
            "type" => $_FILES['file']['type'],
            "old_file" => "",
            "del" => "Y",
            "MODULE_ID" => ""
        ];

        $sExtensions = \CFile::GetImageExtensions();

        $sExtensions .= ',pdf,doc,docx,ppt,pptx,svg,xml';

        $sErrorMsg = \CFile::CheckFile($arFile, 8388608, false, $sExtensions);

        if (!$sErrorMsg) {
            $fid = \CFile::SaveFile($arFile, 'portfolio');

            $sFileSrc = SITE_SERVER_NAME . \CFile::GetPath($fid);
        } else {
            $arResult['message'] = $sErrorMsg;
            return $arResult;
        }

        if (\Bitrix\Main\Loader::includeModule('iblock')) {
            $elementIterator = \Bitrix\Iblock\ElementTable::getList([
                'select' => [
                    'NAME',
                ],
                'filter' => [
                    '=IBLOCK_ID' => \IQDEV\Base\Helper::getIblockId('tenderi'),
                    '=ID' => $aData['id'],
                ]
            ]);

            $sElementName = $elementIterator->fetch()['NAME'];
        }

        $aFields = [
            'NAME' => $aData['name'],
            'PHONE' => $aData['phone'],
            'PORTFOLIO' => $sFileSrc,
            'TENDER' => $sElementName,
            'FILE' => $fid
        ];

        self::addIblockElement('TenderPortfolio', $aData, $aFields);

        $iMessage = \Bitrix\Main\Mail\Event::send(
            [
                "EVENT_NAME" => "SEND_PORTFOLIO",
                "LID" => "s1",
                "C_FIELDS" => $aFields
            ]
        );

        if ($iMessage) {
            $arResult['status'] = true;

            $arResult['id'] = $iMessage;
        }

        return $arResult;
    }

    /**
     * Записывает заявки на подписку
     *
     * @param $aData
     *
     * @return mixed
     */
    public static function subscribeNewsAjaxAction(array $aData)
    {
        try {
            //  TODO Logics
            if (!CModule::IncludeModule('subscribe')) {
                throw new \RuntimeException('Не удалось подключить модуль подписки');
            }


            $sEmail = filter_var($aData['email'], FILTER_SANITIZE_EMAIL);

            global $USER;

            $arFields = [
                "USER_ID" => $USER->IsAuthorized() ? $USER->GetID() : false,
                "FORMAT" => "html",
                "EMAIL" => $sEmail,
                "ACTIVE" => "Y",
                "RUB_ID" => Helper::getCrubricId('subsription')
            ];

            $subscr = new CSubscription;

            //can add without authorization
            $ID = $subscr->Add($arFields);
            if ($ID <= 0) {
                throw new \RuntimeException($subscr->LAST_ERROR);
            }

            CSubscription::Authorize($ID);


            $aResult = [
                'status' => true,
                'email'   =>$sEmail
            ];
        } catch (\Throwable $e) {
            $aResult = [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }

        return $aResult;
    }

    /**
     * Записывает заявки на ипотеку
     *
     * @param $aData
     *
     * @return mixed
     */
    public static function calculatebuyerAjaxAction(array $aData)
    {
        try {
            //  TODO Logics

            global $USER;
            $sEmail = filter_var($aData['email'], FILTER_SANITIZE_EMAIL);
            $iCost  = filter_var($aData['cost'], FILTER_SANITIZE_NUMBER_INT);
            $iTerm  = filter_var($aData['term'], FILTER_SANITIZE_NUMBER_INT);
            $sBank  = filter_var($aData['selectedBank'], FILTER_SANITIZE_STRING);


            $Selected_Bank = "";

            $iFirst_pay = filter_var($aData['first-pay'], FILTER_SANITIZE_NUMBER_INT);

            $aData['name']   = filter_var($aData['name'], FILTER_SANITIZE_STRING);
            $fCalculatedRate = filter_var($aData['calculatedRate'], FILTER_SANITIZE_STRING);

            $oIblock_id = \IQDEV\Base\Helper::getIblockId('bank');

            if (!empty($sBank)) {
                $arFilter = [
                    "IBLOCK_ID" => $oIblock_id,
                    "CODE" => $sBank
                ];
                $arSelect = ["ID"];

                $oId_Element = \CIBlockElement::GetList(["SORT" => "ASC"],
                    $arFilter,
                    false,
                    ["nPageSize" => 50],
                    $arSelect)->GetNextElement()->GetFields();

                $Selected_Bank = $oId_Element;
            }

            if ($aData['is_member'] == false) {
                $sIs_member = "Не участник";
            } else {
                $sIs_member = "Является участником";
            }


            $aProperties = [
                'EMAIL' => $sEmail,
                'COST' => $iCost,
                'FIRST_PAY' => $iFirst_pay,
                'TERM' => $iTerm,
                'CALCULATED_RATE' => $fCalculatedRate,
                'SELECTED_BANK' => $Selected_Bank,
                'IS_MEMBER' => $sIs_member

            ];


            $aResult = [
                'status' => true,
                'name' => $aData['name'],
                'email' => $sEmail,
                'cost' => $iCost,
                'first_pay' => $iFirst_pay,
                'term' => $iTerm,
                'calculatedRate' => $fCalculatedRate,
                'selected_Bank' => $sBank
            ];

            if (!self::issetIblockElement('ras', 'CODE', 'EMAIL', $sEmail)) {
                throw new \RuntimeException('Такая почта уже есть');
            }

            $ID = self::addIblockElement('ras', $aData, $aProperties);

            if ($ID <= 0) {
                throw new \RuntimeException($USER->LAST_ERROR);
            }
        } catch (\Throwable $e) {
            $aResult = [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }
        return $aResult;
    }
    /**
     * Записывает отзывы
     *
     * @param $aData
     *
     * @return mixed
     */
    public static function reviewAjaxAction(array $aData)
    {
        try {
            //Todo logics

            global $USER;
            $aProperties = [
                'PHONE' =>$aData['phone']
            ];

            $aFields = [
                'name' => $aData['name'],
                'PREVIEW_TEXT' =>$aData['review'],
                'PREVIEW_PICTURE' =>$_FILES['file']
            ];

            $aResult = [
                'status' => true,
                'name'   =>$aData['name'],
                'phone'  =>$aData['phone'],
                'review' =>$aData['review'],
            ];

            $ID = self::addIblockElement('reviews', $aFields, $aProperties);
            if ($ID <= 0) {
                throw new \RuntimeException($USER->LAST_ERROR);
            }
        } catch (\Throwable $e) {
            $aResult = [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }
        return $aResult;
    }

    /**
     * Записывает вопросы в базу
     *
     * @param $aData
     *
     * @return mixed
     */
    public static function questionAjaxAction(array $aData)
    {

        try {
            //TODO logics

            global $USER;
            $sEmail = filter_var($aData['email'], FILTER_SANITIZE_EMAIL);
            $sPhone = filter_var($aData['phone'], FILTER_SANITIZE_STRING);

            $sQuestion = filter_var($aData['question'], FILTER_SANITIZE_STRING);

            $sVillageName = filter_var($aData['villageName'], FILTER_SANITIZE_STRING);
            $iAreaNumber  = filter_var($aData['areaNumber'], FILTER_SANITIZE_STRING);

            $aProperties = [
                'EMAIL'         =>$sEmail,
                'PHONE'         =>$sPhone,
                'VILLAGE_NAME'  =>$sVillageName,
                'QUESTION'      =>$sQuestion,
                'AREA_NUMBER'   =>$iAreaNumber
            ];

            $aResult = [
                'status'      =>true,
                'email'       =>$sEmail,
                'info'        =>$aData,
                'phone'       =>$sPhone,
                'villageName' =>$sVillageName,
                'question'    =>$sQuestion,
                'areaNumber'  =>$iAreaNumber
            ];


            $ID = self::addIblockElement('service-ask', $aData, $aProperties);
            if ($ID <= 0) {
                throw new \RuntimeException($USER->LAST_ERROR);
            }
        } catch (\Throwable $e) {
            $aResult = [
                'status'  =>false,
                'message' =>$e->getMessage(),
            ];
        }
        return $aResult;
    }
}
