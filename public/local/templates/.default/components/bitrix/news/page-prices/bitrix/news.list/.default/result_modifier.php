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

$arItems = $arResult['ITEMS'];

$iCountItems = count($arResult['ITEMS']);
for ($iIndex = 0; $iIndex<$iCountItems; $iIndex++) {
    $arFilter = [
        'select' => ['MIN_PRICE','MAX_PRICE','MIN_SQUARE','MAX_SQUARE','MIN_PRICE_TODAY'],
        'filter'=>[
            '=UF_PROJECT'=>$arResult['ITEMS'][$iIndex]['ID'],
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
            '=UF_PROJECT'=>$arResult['ITEMS'][$iIndex]['ID'],
            '=UF_STATUS' =>$iStatusAvailable
        ],
    ];

    $arFilterReservation = [
        'select' => ['*'],
        'filter'=>[
            '=UF_PROJECT'=>$arResult['ITEMS'][$iIndex]['ID'],
            '=UF_STATUS' =>$iStatusReservation
        ],
    ];

    $arFilterSold = [
        'select' => ['*'],
        'filter'=>[
            '=UF_PROJECT'=>$arResult['ITEMS'][$iIndex]['ID'],
            '=UF_STATUS' =>$iStatusSold
        ],
    ];

    $iCountAvailavle = count($oPlots->getList($arFilterAvailable, false));

    $iCountReservation = count($oPlots->getList($arFilterReservation, false));

    $iCountSold = count($oPlots->getList($arFilterReservation, false));

    $aRunTime = $oPlots->getList($arFilter, false);

    $aRunTime = array_shift($aRunTime);

    $arResult['ITEMS'][$iIndex]['PROP'] = [];

    $arResult['ITEMS'][$iIndex]['PROP']['MIN_PRICE'] = (int) $aRunTime['MIN_PRICE'];
    $arResult['ITEMS'][$iIndex]['PROP']['MAX_PRICE'] = (int) $aRunTime['MAX_PRICE'];

    $arResult['ITEMS'][$iIndex]['PROP']['MIN_SQUARE'] = $aRunTime['MIN_SQUARE'];
    $arResult['ITEMS'][$iIndex]['PROP']['MAX_SQUARE'] = $aRunTime['MAX_SQUARE'];

    $arResult['ITEMS'][$iIndex]['PROP']['MIN_PRICE_TODAY'] = $aRunTime['MIN_PRICE_TODAY'];

    $arResult['ITEMS'][$iIndex]['PROP']['AVAILABLE'] = $iCountAvailavle;

    $arResult['ITEMS'][$iIndex]['PROP']['RESERVATION'] = $iCountReservation;

    $arResult['ITEMS'][$iIndex]['PROP']['SOLD'] = $iCountSold;
}
