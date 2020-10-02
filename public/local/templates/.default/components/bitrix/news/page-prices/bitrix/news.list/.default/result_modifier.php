<?php
$aBaseFilter = ['USER_FIELD_NAME' => 'UF_STATUS', 'ENTITY_CODE' => 'Plots'];


$aFilter = [];
$aFilter = array_merge($aBaseFilter, $aFilter);

$arList = [];
$obEnum = (new CUserFieldEnum)->GetList(['ID' => 'ASC'], $aFilter);
while ($arElement = $obEnum->GetNext()) {
    $arList[$arElement['XML_ID']] = $arElement['ID'];
}

$iStatusAvailable = $arList['1'];

$iStatusReservation = $arList['2'];

$iStatusSold = $arList['3'];

$arID = array_column($arResult['ITEMS'], 'ID');

$oPlots   = new \IQDEV\Base\HighLoadBlock('Plots');
$aRunTime = $oPlots->getList([
    'select' => ['UF_PROJECT', 'MIN_PRICE', 'MAX_PRICE', 'MIN_SQUARE', 'MAX_SQUARE', 'MIN_PRICE_TODAY'],
    'runtime' => [
        new \Bitrix\Main\Entity\ExpressionField('MIN_PRICE', 'MIN(UF_SQUARE * UF_PRICE)'),
        new \Bitrix\Main\Entity\ExpressionField('MAX_PRICE', 'MAX(UF_SQUARE * UF_PRICE)'),
        new \Bitrix\Main\Entity\ExpressionField('MIN_SQUARE', 'MIN(UF_SQUARE)'),
        new \Bitrix\Main\Entity\ExpressionField('MAX_SQUARE', 'MAX(UF_SQUARE)'),
        new \Bitrix\Main\Entity\ExpressionField('MIN_PRICE_TODAY', 'MIN(UF_PRICE)'),
    ],
    'filter' => [
        'UF_PROJECT' => $arID
    ],
    'group' => [
        'UF_PROJECT'
    ]
]);

$arCount = $oPlots->getList([
    'select' => ['UF_PROJECT', 'UF_STATUS', new \Bitrix\Main\Entity\ExpressionField('COUNT', 'COUNT(*)')],
    'filter' => [
        'UF_PROJECT' => $arID
    ],
    'group' => [
        'UF_PROJECT',
        'UF_STATUS'
    ]
]);


$aTest = [];
foreach ($arCount as $aItem) {
    $aTest[$aItem['UF_PROJECT']][$aItem['UF_STATUS']] = $aItem;
}
unset($arCount);

foreach ($arResult['ITEMS'] as $iId => &$aItem) {
    $aItem['PROP'] = [];

    $aItem['PROP']['MIN_PRICE']  = (int) $aRunTime[$iId]['MIN_PRICE'];
    $aItem['PROP']['MAX_PRICE']  = (int) $aRunTime[$iId]['MAX_PRICE'];
    $aItem['PROP']['MIN_SQUARE'] = $aRunTime[$iId]['MIN_SQUARE'];
    $aItem['PROP']['MAX_SQUARE'] = $aRunTime[$iId]['MAX_SQUARE'];

    $aItem['PROP']['MIN_PRICE_TODAY'] = $aRunTime[$iId]['MIN_PRICE_TODAY'];


    $aItem['PROP']['AVAILABLE']   = (int) $aTest[$aItem['ID']][$iStatusAvailable]['COUNT'];
    $aItem['PROP']['RESERVATION'] = (int) $aTest[$aItem['ID']][$iStatusReservation]['COUNT'];
    $aItem['PROP']['SOLD']        = (int) $aTest[$aItem['ID']][$iStatusSold]['COUNT'];
}
unset($aItem);
