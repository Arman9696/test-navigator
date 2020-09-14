<?php
CModule::IncludeModule('iqdev.options');



$aBaseFilter = ['USER_FIELD_NAME' => 'UF_STATUS', 'ENTITY_CODE' => 'Plots'];

$aFilter = ['VALUE' => 'Свободен'];
$aFilter = array_merge($aBaseFilter, $aFilter);

$obEnum = (new CUserFieldEnum)->GetList([], $aFilter);

$iStatusAvailable = $obEnum->GetNext()['ID'];

$aFilter = ['VALUE' => 'Забронирован'];
$aFilter = array_merge($aBaseFilter, $aFilter);

$obEnum = (new CUserFieldEnum)->GetList([], $aFilter);

$iStatusReservation = $obEnum->GetNext()['ID'];

$aFilter = ['VALUE' => 'Продан'];
$aFilter = array_merge($aBaseFilter, $aFilter);

$obEnum = (new CUserFieldEnum)->GetList([], $aFilter);

$iStatusSold = $obEnum->GetNext()['ID'];

$oPlots = new \IQDEV\Base\HighLoadBlock('Plots');

foreach ($arResult['ITEMS'] as $arKey => $arElement) {
    $arFilter = [
        'select' => ['MIN_PRICE','MAX_PRICE','MIN_SQUARE','MAX_SQUARE','MIN_PRICE_TODAY'],
        'filter'=>[
            '=UF_PROJECT'=>$arElement['ID'],
            '=UF_STATUS' =>$iStatusAvailable
        ],
        'runtime'=>[
            new \Bitrix\Main\Entity\ExpressionField('MIN_PRICE', 'MIN(UF_SQUARE * UF_PRICE)'),
            new \Bitrix\Main\Entity\ExpressionField('MAX_PRICE', 'MAX(UF_SQUARE * UF_PRICE)'),
            new \Bitrix\Main\Entity\ExpressionField('MIN_SQUARE', 'MIN(UF_SQUARE)'),
            new \Bitrix\Main\Entity\ExpressionField('MAX_SQUARE', 'MAX(UF_SQUARE)'),
            new \Bitrix\Main\Entity\ExpressionField('MIN_PRICE_TODAY', 'MIN(UF_PRICE)'),
        ]
    ];

    $arFilterAvailable = [
        'select' => ['*'],
        'filter'=>[
            '=UF_PROJECT'=>$arElement['ID'],
            '=UF_STATUS' =>$iStatusAvailable
        ],
    ];

    $arFilterReservation = [
        'select' => ['*'],
        'filter'=>[
            '=UF_PROJECT'=>$arElement['ID'],
            '=UF_STATUS' =>$iStatusReservation
        ],
    ];

    $arFilterSold = [
        'select' => ['*'],
        'filter'=>[
            '=UF_PROJECT'=>$arElement['ID'],
            '=UF_STATUS' =>$iStatusSold
        ],
    ];

    $iCountAvailavle = count($oPlots->getList($arFilterAvailable, false));

    $iCountReservation = count($oPlots->getList($arFilterReservation, false));

    $iCountSold = count($oPlots->getList($arFilterReservation, false));

    $aRunTime = $oPlots->getList($arFilter, false);

    $aRunTime = array_shift($aRunTime);

    $arResult['ITEMS'][$arKey]['MIN_PRICE'] = (int) $aRunTime['MIN_PRICE'];
    $arResult['ITEMS'][$arKey]['MAX_PRICE'] = (int) $aRunTime['MAX_PRICE'];

    $arResult['ITEMS'][$arKey]['MIN_SQUARE'] = $aRunTime['MIN_SQUARE'];
    $arResult['ITEMS'][$arKey]['MAX_SQUARE'] = $aRunTime['MAX_SQUARE'];

    $arResult['ITEMS'][$arKey]['MIN_PRICE_TODAY'] = $aRunTime['MIN_PRICE_TODAY'];

    $arResult['ITEMS'][$arKey]['AVAILABLE'] = $iCountAvailavle;

    $arResult['ITEMS'][$arKey]['RESERVATION'] = $iCountReservation;

    $arResult['ITEMS'][$arKey]['SOLD'] = $iCountSold;
}
