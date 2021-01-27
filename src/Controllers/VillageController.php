<?php

namespace IQDEV\Controllers;

use Bitrix\Main\Entity\ExpressionField;

use CIBlockElement;

use CUserFieldEnum;

class VillageController
{
    /**
     * Получает Коттеджные поселки с их координатами
     *
     * @return mixed
     */
    public static function getVillageCoords()
    {
        $index = 0;

        $arVillage = [];

        $arPins = [];

        $arFilter = [
            "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('projects'),   // id инфоблока
        ];
        $oVillage = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, ["nPageSize" => 50]);

        while ($ar_result = $oVillage->GetNextElement()) {
            $arVillage[$index] = $ar_result->GetFields();

            $arVillage[$index]["PROPERTIES"] = $ar_result->GetProperties();
            $index++;
        }

        foreach ($arVillage as $arKey => $arElement) {
            $arPins['map'] = [
                'center' =>
                    [
                        57.170161,
                        65.150135000000006,
                    ],
                'zoom' => 10,
            ];

            $arCoords = explode(",", $arElement['PROPERTIES']['COORDS']['VALUE']);

            $sLink = (string) $arElement['DETAIL_PAGE_URL'];

            $arPins['pins'][$arKey] = [
                'icon' => \CFile::GetPath($arElement['PROPERTIES']['MAP_LOGO']['VALUE']),
                'link' => $sLink,
                'coords' => $arCoords,
            ];
        }
        return $arPins;
    }

    /**
     * Получает все участки в поселках для карты
     *
     * @param $arRespons
     *
     * @return mixed
     */
    public static function getVillagesMapData($arRespons)
    {
        $oHighLoadBlock = new \IQDEV\Base\HighLoadBlock('Plots');
        $strCodeElement = $arRespons ['villageId'];

        $arFilter = [
            "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('projects'),
            "CODE" => $strCodeElement,
        ];
        $oElement = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, ["nPageSize" => 50]);

        $aBaseFilter = ['USER_FIELD_NAME' => 'UF_STATUS','ENTITY_CODE'=>'Plots'];

        $obEnum = (new CUserFieldEnum)->GetList(['XML_ID'=>'ASC'], $aBaseFilter);

        while ($arElement = $obEnum->GetNext()) {
            $arList[$arElement['XML_ID']] = $arElement['ID'];
        }

        $iStatusAvailable = $arList['1'];

        $iStatusReserv = $arList['2'];

        $iStatusSold = $arList['3'];

        $oElement = $oElement->GetNextElement();
        $aElement = $oElement->GetFields();

        $aElement['PROPERTIES'] = $oElement->GetProperties();


        $arSelect = [
            'select' => ['*', 'PRICE_SUM', 'COST_FOR_100', 'FULL_COST_FOR_100', 'FULL_PRICE'],
            'filter' => [
                '=UF_PROJECT' => $aElement['ID']
            ],
            'runtime' => [
                new ExpressionField('FULL_PRICE', 'UF_SQUARE * UF_PRICE'),
                new ExpressionField(
                    'PRICE_SUM',
                    '(UF_SQUARE * (CASE WHEN UF_PROM=1 THEN UF_SALE_PRICE ELSE 0 END))'),
                new ExpressionField('COST_FOR_100', 'UF_PRICE'),
                new ExpressionField(
                    'FULL_COST_FOR_100',
                    'CASE WHEN UF_PROM=1 THEN UF_SALE_PRICE ELSE 0 END'),

            ]
        ];

        $aVillages = $oHighLoadBlock->getList($arSelect);

        foreach ($aElement['PROPERTIES']['MARKERS']['~VALUE'] as $arKey => $strJson) {
            $aMarkers [$arKey] = json_decode($strJson);
        }

        $arComReq = [
            'lights',
            'security',
            'roads'
        ];

        foreach ($aVillages as $arKey => $arElement) {
            $arCom = [];

            $iStatus  = $arElement['UF_STATUS'];
            $strColor = "";

            $strStatus = "";

            if ($arElement['UF_GAS'] == 1) {
                $arCom[] = "gas";
            }

            if ($arElement['UF_ELECTRICITY'] == 1) {
                $arCom[] = "elec";
            }

            $arCom = array_merge($arCom, $arComReq);

            switch ($iStatus) {
                case $iStatusAvailable:
                    $strColor  = "#82c15c";
                    $strStatus = "Свободен";

                    $iXML_ID = 1;
                    break;
                case $iStatusReserv:
                    $strColor  = "blue";
                    $strStatus = "Забронирован";

                    $iXML_ID = 2;
                    break;
                case $iStatusSold:
                    $strColor  = "red";
                    $strStatus = "Продан";

                    $iXML_ID = 3;
                    break;
            }

            $aCoords [$arKey] = [
                'color' => $strColor,
                'coords' => json_decode($arElement['UF_COORDS']),
                'data' => [
                    'area' => (float) $arElement['UF_SQUARE'],
                    'com' => $arCom,
                    'cost' => (int) $arElement['FULL_PRICE'],
                    'full_cost' => (int) $arElement['PRICE_SUM'],
                    'full_cost_for_100' => (int) $arElement['FULL_COST_FOR_100'],
                    'cost_for_100' => (int) $arElement['COST_FOR_100'],
                    'kadastr' => $arElement['UF_KADASTR'],
                    'num' => $arElement['UF_NUMBER'],
                    'poselok' => $aElement['NAME'],
                    'stus' => $strStatus,
                    'stus_id' => $iXML_ID,
                ],
                'itemID' => $arElement['ID'],

            ];
        }

        $arCenter = explode(";", $aElement['PROPERTIES']['CENTER']['VALUE']);

        $arMaxBounds = [
            explode(";", $aElement['PROPERTIES']['MAX_BOUND1']['~VALUE']),
            explode(";", $aElement['PROPERTIES']['MAX_BOUND2']['~VALUE'])
        ];

        $arZoom = [
            'defaultWindow' => 3,
            'defaultfullscreen' => 4,
            'max' => 5,
            'min' => 3
        ];


        $arResult = [
            'areas' => $aCoords,
            'center' => $arCenter,
            'markers' => $aMarkers,
            'maxBounds' => $arMaxBounds,
            'tileUrl' => "/upload/villages/{$strCodeElement}_vill/{z}/{x}_{y}.jpg",
            'zoom' => $arZoom
        ];
        return $arResult;
    }

    /**
     * Получает участки по [симв коду]
     *
     * @param $IblockCode
     * @param $arCode
     *
     * @return mixed
     */
    public static function getByVillages($IblockCode, $arCode)
    {
        $arResult = [];
        $arFilter = [
            "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId($IblockCode),
            "CODE" => $arCode,
        ];
        if ($arCode) {
            $oElement = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, ["nPageSize" => 50]);
            while ($aElement = $oElement->GetNextElement()) {
                $arResult [] = $aElement->GetFields();
            }
        }
        return $arResult;
    }

    /**
     * Выборка параметров для фильтра
     *
     * @param $arRespons
     * @param $arFilter
     *
     * @return mixed
     */
    public static function selectPropertyVillage($arRespons, array $arFilter)
    {
        $arCommunicate = [];

        $arLocation = [];

        $arInfra = [];

        if ($arRespons['communicationsQuery']) {
            $arParams = $arRespons['communicationsQuery'];
            foreach ($arParams as $arElement) {
                $arCommunicate ["=" . $arElement] = "1";
            }
        }
        if ($arRespons['infrastructureQuery']) {
            $arParams = $arRespons['infrastructureQuery'];
            foreach ($arParams as $arElement) {
                $arInfra ["=" . $arElement] = "1";
            }
        }
        if ($arRespons['locationQuery']) {
            $arParams = $arRespons['locationQuery'];
            foreach ($arParams as $arElement) {
                $arLocation ["=" . $arElement] = "1";
            }
        }

        $arFilter = array_merge($arCommunicate, $arFilter);
        $arFilter = array_merge($arInfra, $arFilter);
        $arFilter = array_merge($arLocation, $arFilter);

        return $arFilter;
    }

    /**
     * Возвращает массив с параметрами для сортировки
     *
     * @param $sortType
     *
     * @return mixed
     */
    public static function sortVillage($sortType)
    {

        $arSort = [
            'price-' => ['PRICE' => 'DESC'],
            'price+' => ['PRICE' => 'ASC'],
            'area-' => ['UF_SQUARE' => 'DESC'],
            'area+' => ['UF_SQUARE' => 'ASC'],
            'priceIn100-' => ['UF_PRICE' => 'DESC'],
            'priceIn100+' => ['UF_PRICE' => 'ASC'],
            'sale-' => ['UF_SALE_PRICE' => 'DESC'],
            'sale+' => ['UF_SALE_PRICE' => 'ASC']

        ];

        if (array_key_exists($sortType, $arSort)) {
            $arSort = [
                'order' => $arSort[$sortType]
            ];
        } else {
            $arSort = [
                'order' => ['PRICE' => 'DESC']
            ];
        }
        return $arSort;
    }

    /**
     * Возвращает участок по симв коду
     *
     * @param $IblockCode
     * @param  $sElementCode
     *
     * @return mixed
     */
    public static function getByVillage($IblockCode, $sElementCode)
    {

        $arFilter = [
            "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId($IblockCode),
            "CODE" => $sElementCode,
        ];
        if ($sElementCode) {
            $oElement = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, ["nPageSize" => 50]);
            $eElement = $oElement->GetNextElement()->GetFields();
        }
        return $eElement;
    }

    /**
     * Возвращает участки по ID
     *
     * @param $IblockCode
     * @param $iIdElement
     *
     * @return mixed
     */
    public static function getByIdVillages($IblockCode, array $iIdElement)
    {
        $arFilter = [
            "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId($IblockCode),
            "ID" => $iIdElement,
        ];
        if ($iIdElement) {
            $oElement = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, ["nPageSize" => 50]);
            while ($aElement = $oElement->GetNextElement()) {
                $arResult [] = $aElement->GetFields();
            }
            return $arResult;
        } else {
            return [];
        }
    }


    /**
     * Проверяет являются ли все значения в массиве числами
     *
     * @param $sCode
     *
     * @return mixed
     */
    public static function inArrayInt(array $sCode)
    {

        $iCount = count($sCode);

        $bIsNumeric = false;

        if ($iCount > 1) {
            foreach ($sCode as $arElement) {
                if (is_numeric($arElement)) {
                    $bIsNumeric = true;
                } else {
                    $bIsNumeric = false;
                }
            }
        } else {
            $bIsNumeric = is_numeric(array_shift($sCode));
        }
        return $bIsNumeric;
    }

    /**
     * Устанавлиает дефолтную Выборку поселков
     *
     * @return mixed
     */
    public static function setDefVillage()
    {
        $arList = [] ;

        $arSelectVillages = [
            "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('projects'),
        ];

        $arVillages = CIBlockElement::GetList(['SORT' => 'ASC'], $arSelectVillages, false, ["nPageSize" => 50]);
        while ($arNextElement = $arVillages->GetNextElement()) {
            $arList [] = [
                'id' => $arNextElement->GetFields()['CODE'],
                'name' => $arNextElement->GetFields()['NAME']
            ];
        }

        return $arList;
    }

    /**
     * Возвращает параметры для выборки участков
     *
     * @param $sCode
     *
     * @return mixed
     */
    public static function collectionProperty($sCode)
    {
        $arVillageName = self::setVillageName($sCode);

        $oHighLoadBlock = new \IQDEV\Base\HighLoadBlock('Plots');

        $arStatus = $oHighLoadBlock->getListTypeEntity(['UF_PROM']);
        $arStatus = array_shift($arStatus);

        $arPropertyCommunicate = [
            'UF_GAS',
            'UF_ELECTRICITY',
            'UF_ASPHALT',
            'UF_ROAD'
        ];

        $arCommunication = $oHighLoadBlock->getListTypeEntity($arPropertyCommunicate);

        foreach ($arCommunication as $arElement) {
            $arResultComm [] = [
                'id' => $arElement['FIELD_NAME'],
                'name' => $arElement['EDIT_FORM_LABEL']
            ];
        }

        $arPropertyEnvi = [
            'UF_FOREST',
            'UF_RIVER',
            'UF_HILL',
            'UF_APPERANCE'
        ];

        $arEnvironment = $oHighLoadBlock->getListTypeEntity($arPropertyEnvi);

        foreach ($arEnvironment as $arElement) {
            $arResultEnvi [] = [
                'id' => $arElement['FIELD_NAME'],
                'name' => $arElement['EDIT_FORM_LABEL']
            ];
        }

        $arPropertyInfra = [
            'UF_WITHOUT_BUILDINGS',
            'UF_BATH_HOUSE',
            'UF_HOUSE',
        ];

        $arInfrastructure = $oHighLoadBlock->getListTypeEntity($arPropertyInfra);

        foreach ($arInfrastructure as $arElement) {
            $arResultInf [] = [
                'id' => $arElement['FIELD_NAME'],
                'name' => $arElement['EDIT_FORM_LABEL']
            ];
        }

        $arPropertyLocation = [
            'UF_CORNER',
            'UF_DEADLOCK',
            'UF_PARK',
            'UF_CENTRAL_STREET'
        ];

        $arLocation = $oHighLoadBlock->getListTypeEntity($arPropertyLocation);

        foreach ($arLocation as $arElement) {
            $arResultLoc [] = [
                'id' => $arElement['FIELD_NAME'],
                'name' => $arElement['EDIT_FORM_LABEL']
            ];
        }

        $arResult = [
            'villageName' => $arVillageName,
            'communications' => $arResultComm,
            'infrastructure' => $arResultInf,
            'location' => $arResultLoc,
            'environment' => $arResultEnvi,
            'status' => [[
                'id' => $arStatus['FIELD_NAME'],
                'name' => $arStatus['EDIT_FORM_LABEL']
            ]
            ]
        ];
        return $arResult;
    }

    /**
     * Возвращает Поселки для выборки
     *
     * @param $sCode
     *
     * @return mixed
     */
    public static function setVillageName($sCode)
    {
        if ($sCode) {
            if (is_array($sCode)) {
                $bInArrayInt = self::inArrayInt($sCode);
                if ($bInArrayInt) {
                    $arVillages = self::getByIdVillages('projects', $sCode);
                    foreach ($arVillages as $arElement) {
                        $arList [] = [
                            'id' => $arElement['CODE'],
                            'name' => $arElement['NAME']
                        ];
                    }
                } else {
                    $arVillages = self::getByVillages('projects', $sCode);
                    foreach ($arVillages as $arElement) {
                        $arList [] = [
                            'code' => $arElement['CODE'],
                            'name' => $arElement['NAME']
                        ];
                    }
                }
            } else {
                $arVillage = self::getByVillage('projects', $sCode);
                $arList [] = [
                    'code' => $arVillage['CODE'],
                    'name' => $arVillage['NAME']
                ];
            }
        } else {
            $arList = self::setDefVillage();
        }
        return $arList;
    }

    /**
     * Возвращает ID Участков которые необходимо получить
     *
     * @param $sCode
     *
     * @return mixed
     */
    public static function getByIdProject($sCode)
    {
        $arSort = ['SORT' => 'ASC'];

        $arSelectVillages = [
            "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('projects'),
        ];

        if ($sCode) {
            if (is_array($sCode)) {
                $bInArrayInt = self::inArrayInt($sCode);
                if ($bInArrayInt) {
                    $arListVillage = $sCode;
                } else {
                    $arVillages = self::getByVillages('projects', $sCode);
                    foreach ($arVillages as $arElement) {
                        $arVillage [] = $arElement['ID'];
                    }
                    $arListVillage = $arVillage;
                }
            } else {
                $arVillage = self::getByVillage('projects', $sCode);

                $arListVillage = $arVillage['ID'];
            }
        } else {
            $arPlots = CIBlockElement::GetList($arSort, $arSelectVillages, false, ["nPageSize" => 50]);
            while ($arElement = $arPlots->GetNextElement()) {
                $arVillages = $arElement->GetFields();

                $arVillage [] = $arVillages['ID'];
            }
            $arListVillage = $arVillage;
        }
        return $arListVillage;
    }

    /**
     * Возвращает конечный массив для выборки
     *
     * @param $arRespons
     *
     * @return mixed
     */
    public static function setFilter($arRespons)
    {

        $aBaseFilter = ['USER_FIELD_NAME' => 'UF_STATUS','ENTITY_CODE'=>'Plots'];

        $obEnum = (new CUserFieldEnum)->GetList(['XML_ID'=>'ASC'], $aBaseFilter);

        while ($arElement = $obEnum->GetNext()) {
            $arList[$arElement['XML_ID']] = $arElement['ID'];
        }

        $iStatus = $arList['1'];

        $sCode = $arRespons['villageNameQuery'];

        $arFilter = [
            '=UF_PROJECT' => self::getByIdProject($sCode),
            '=UF_PROM' => 1,
            '=UF_STATUS' => $iStatus

        ];

        if ($arRespons['minArea'] && $arRespons['minCost']) {
            $arRes = [
                '><UF_SQUARE' => [$arRespons['minArea'], $arRespons['maxArea']],
                '><PRICE' => [ (int) $arRespons['minCost'], (int) $arRespons['maxCost']],
            ];

            $arFilter = array_merge($arRes, $arFilter);
        }
        return $arFilter;
    }

    /**
     * Возврашает Runtime поля
     *
     * @param $arRespons
     *
     * @return mixed
     */
    public static function getRuntimeFields($arRespons)
    {
        $oHighLoadBlock = new \IQDEV\Base\HighLoadBlock('Plots');

        $arFilter = self::setFilter($arRespons);

        $arSelectRuntime = [
            'select' => ['COUNT', 'MIN_AREA', 'MAX_AREA', 'MIN_COST', 'MAX_COST', 'MIN_PRICE', 'PRICE'],
            'filter' => self::selectPropertyVillage($arRespons, $arFilter),
            'runtime' => [
                new ExpressionField('COUNT', 'COUNT(*)'),
                new ExpressionField('MIN_AREA', 'MIN(UF_SQUARE)'),
                new ExpressionField('MAX_AREA', 'MAX(UF_SQUARE)'),
                new ExpressionField('MIN_UF_PRICE', 'MIN(UF_SALE_PRICE)'),
                new ExpressionField('MAX_UF_PRICE', 'MAX(UF_SALE_PRICE)'),
                new ExpressionField('MIN_COST', 'MIN(UF_SALE_PRICE * UF_SQUARE)'),
                new ExpressionField('MAX_COST', 'MAX(UF_SALE_PRICE * UF_SQUARE)'),
                new ExpressionField('MIN_PRICE', 'MIN(UF_PRICE * UF_SQUARE)'),
                new ExpressionField('PRICE', 'UF_SALE_PRICE * UF_SQUARE'),
            ]
        ];

        $arHighLoadBlock = $oHighLoadBlock->getList($arSelectRuntime);

        return call_user_func_array('array_merge', $arHighLoadBlock);
    }

    /**
     * Возврашает выборку
     *
     * @param $arRespons
     *
     * @return mixed
     */
    public static function getResult($arRespons)
    {
        $oHighLoadBlock = new \IQDEV\Base\HighLoadBlock('Plots');

        $sortType = $arRespons['sortType'];

        $iPage = (int) $arRespons['page'];
        $iPage = ($iPage <= 0) ? 1 : $iPage;

        $iItemsPerPage = 10;

        $iOffset = $iItemsPerPage * ($iPage - 1);

        $arFilter = self::setFilter($arRespons);
        $arSelect = [
            'select' => ['*', 'AREA', 'PRICE'],
            'limit' => $iItemsPerPage,
            'offset' => $iOffset,
            'filter' => self::selectPropertyVillage($arRespons, $arFilter),
            'runtime' => [
                new ExpressionField('AREA', 'UF_SQUARE * 100'),
                new ExpressionField('PRICE', 'UF_SALE_PRICE * UF_SQUARE'),
            ]
        ];

        $arSelect = array_merge(self::sortVillage($sortType), $arSelect);

        $arPlots = $oHighLoadBlock->getList($arSelect, true);

        $aResult = [];

        foreach ($arPlots as $arElement) {
            $iId = (int) $arElement['UF_PROJECT'];

            $iIdPlace = $arElement['ID'];

            $arVil = CIBlockElement::GetList(['SORT' => 'ASC'],
                ["IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('projects'),
                    'ID' => $iId
                ],
                false,
                ["nPageSize" => 50])->GetNextElement()->GetFields();

            $sCode = $arVil['CODE'];

            $aResult  [] = [
                'id' => (int) $arElement['ID'],
                'districtName' => $arVil['NAME'],
                'area' => (int) $arElement['AREA'],
                'areaIn100' => (float) $arElement['UF_SQUARE'],
                'price' => (int) $arElement['PRICE'],
                'priceIn100' => (int) $arElement['UF_PRICE'],
                'priceIn100WithSale' => (int) $arElement['UF_SALE_PRICE'],
                'description' => "Стоимость при 100% оплате",
                'houseNum' => $arElement['UF_NUMBER'],
                'link' => "/projects/$sCode/?place=$iIdPlace#mapchooser",

            ];
        }
        return $aResult;
    }

    /**
     * Возвращает участки с акцией для покупки
     *
     * @param $arRespons
     *
     * @return mixed
     */
    public static function getFilters($arRespons)
    {
        $sCode = $arRespons['villageNameQuery'];

        $arProject = self::getByIdProject($sCode);

        $aBaseFilter = ['USER_FIELD_NAME' => 'UF_STATUS','ENTITY_CODE'=>'Plots'];

        $obEnum = (new CUserFieldEnum)->GetList(['XML_ID'=>'ASC'], $aBaseFilter);

        while ($arElement = $obEnum->GetNext()) {
            $arList[$arElement['XML_ID']] = $arElement['ID'];
        }

        $iStatus = $arList['1'];

        $oHighLoadBlock = new \IQDEV\Base\HighLoadBlock('Plots');

        $arParams = self::getRuntimeFields($arRespons);
        $iMinArea = floatval($arParams['MIN_AREA']);
        $iMaxArea = floatval($arParams['MAX_AREA']);
        $iMinCost = (int) $arParams['MIN_COST'];
        $iMaxCost = (int) $arParams['MAX_COST'];

        $iMinPrice = (int) $arParams['MIN_PRICE'];

        $iCountSelect = (int) $arParams['COUNT'];

        $arSelect = [
            'select' => ['COUNT'],
            'filter' => [
                '=UF_PROJECT' => $arProject,
                '=UF_PROM' => 1,
                '=UF_STATUS' => $iStatus
            ],
            'runtime'=>[
                new ExpressionField('COUNT', 'COUNT(*)')
            ]
        ];

        $ArRuntime = $oHighLoadBlock->getList($arSelect);

        $iCount = array_shift($ArRuntime);

        $aResult = self::getResult($arRespons);

        return [
            'minArea' => $iMinArea,
            'maxArea' => $iMaxArea,
            'minCost' => $iMinCost,
            'maxCost' => $iMaxCost,
            'count' => $iCountSelect,
            'minPrice' => $iMinPrice,
            'fullCount' => (int) $iCount['COUNT'],
            'results' => $aResult,
            'filters' => self::collectionProperty($sCode)
        ];
    }
}
