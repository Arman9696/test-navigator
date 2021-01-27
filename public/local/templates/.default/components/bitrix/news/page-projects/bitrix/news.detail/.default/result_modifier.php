<?php

const STATUS_AVAILABLE = '1';

const STATUS_RESERV = '2';

const STATUS_SOLD = '3';

$oPlots = new \IQDEV\Base\HighLoadBlock('Plots');

$aBaseFilter = ['USER_FIELD_NAME' => 'UF_STATUS','ENTITY_CODE'=>'Plots'];

$obEnum = (new CUserFieldEnum)->GetList(['XML_ID'=>'ASC'], $aBaseFilter);

while ($arElement = $obEnum->GetNext()) {
    $arList[$arElement['XML_ID']] = $arElement['ID'];
}

    $arSelect = [
        'select' => [new \Bitrix\Main\ORM\Fields\ExpressionField('COUNT', 'COUNT(*)')],
        'filter' => [
            '=UF_PROJECT' =>$arResult['ID'],
            '=UF_STATUS'=> [$arList[STATUS_AVAILABLE],$arList[STATUS_RESERV],$arList[STATUS_SOLD]]
        ],
        'group'=>['UF_STATUS']
    ];

    $arSelect2 = [
        'select' => [
            'MIN',
            'MAX',
            'MIN_PRICE',
            'MAX_PRICE'
        ],
        'filter' => [
            '=UF_PROJECT' =>$arResult['ID'],

        ],
        'runtime' => [
            new \Bitrix\Main\Entity\ExpressionField('MIN', 'MIN(UF_SQUARE)'),
            new \Bitrix\Main\Entity\ExpressionField('MAX', 'MAX(UF_SQUARE)'),
            new \Bitrix\Main\Entity\ExpressionField('MIN_PRICE', 'MIN(UF_PRICE * UF_SQUARE)'),
            new \Bitrix\Main\Entity\ExpressionField('MAX_PRICE', 'MAX(UF_PRICE * UF_SQUARE)'),
        ]

    ];
    $arSquare = $oPlots->getList($arSelect2);

    $aStatusCount = $oPlots->getList($arSelect);

    $iAvailable = array_shift($aStatusCount);

    $iReserv = array_shift($aStatusCount);

    $iSold = array_shift($aStatusCount);

    $arResult['AVAILABLE'] =  $iAvailable['COUNT'];

    $arResult['RESERV'] = $iReserv['COUNT'];

    $arResult['SOLD'] = $iSold['COUNT'];

    $arRuntime = array_shift($arSquare);

    $arResult['MIN_SQUARE'] = floatval($arRuntime['MIN']);
    $arResult['MAX_SQUARE'] = floatval($arRuntime['MAX']);
    $arResult['MIN_PRICE']  = (int) $arRuntime['MIN_PRICE'];
    $arResult['MAX_PRICE']  = (int) $arRuntime['MAX_PRICE'];

    $arSelect = ["ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE", "DETAIL_TEXT", "PROPERTY_*"];

    $arFilter2 = [
        "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('news-page'),   // id инфоблока
        "SECTION_ID" => \IQDEV\Base\Helper::getIblockSectionId('news-page', 'baner'),
    ];

    $Baners = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter2, false, ["nPageSize" => 50], $arSelect);

    $Item = [];

    while ($arItems = $Baners->GetNext()) {
        $Item[] = $arItems;
    }
    $arResult['BANNERS'] = $Item;

    $Item = [];

    $arFilter3 = [
        "IBLOCK_ID" =>  $arResult['PROPERTIES']['CONSTRUCTION']['LINK_IBLOCK_ID'],   // id инфоблока
        "SECTION_ID" => $arResult['PROPERTIES']['CONSTRUCTION']['VALUE'],
    ];

    $oConstruction = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter3, false, ["nPageSize" => 50]);

    while ($arItems = $oConstruction->GetNext()) {
        $Item[] = $arItems;
    }
    $arResult['construction'] = $Item;
