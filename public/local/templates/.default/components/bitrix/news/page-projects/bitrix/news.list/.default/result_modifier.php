<?php

use Bitrix\Main\Entity\ExpressionField;

$arFilter = [
    "IBLOCK_ID" =>  \IQDEV\Base\Helper::getIblockId('vnimanie')
];
$arSelect = [
    "ID",
    "IBLOCK_ID",
    "NAME",
    "PREVIEW_TEXT",
];

$arItem = [];
$arList = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, ["nPageSize" => 50], $arSelect);

while ($ar_result = $arList->GetNextElement()) {
    $arItem[] = $ar_result->GetFields();
}
$arResult['vnimanie'] = $arItem;

/*
 * Данные о участках
 */

$oPlots = new \IQDEV\Base\HighLoadBlock('Plots');
$aTypes = [];

$aBaseFilter = ['USER_FIELD_NAME' => 'UF_STATUS','ENTITY_CODE'=>'Plots'];

$aFilter = ['VALUE' => 'Свободен'];
$aFilter = array_merge($aBaseFilter, $aFilter);

$obEnum = (new CUserFieldEnum)->GetList([], $aFilter);

$iStatusAvailable = $obEnum->GetNext()['ID'];

$aFilter = ['VALUE' => 'Забронирован'];
$aFilter = array_merge($aBaseFilter, $aFilter);

$obEnum = (new CUserFieldEnum)->GetList([], $aFilter);

$iStatusReserv = $obEnum->GetNext()['ID'];

$aFilter = ['VALUE' => 'Продан'];
$aFilter = array_merge($aBaseFilter, $aFilter);

$obEnum = (new CUserFieldEnum)->GetList([], $aFilter);

$iStatusSold = $obEnum->GetNext()['ID'];

foreach ($arResult['ITEMS'] as $arKey => $arElement) {
    $arSelect = [
        'select' => [
            'UF_STATUS',
            'UF_PROJECT',
        ],
        'filter' => [
            '=UF_PROJECT' =>$arElement['ID'],
            '=UF_STATUS'=>$iStatusAvailable
        ],
    ];

    $arSelect2 = [
        'select' => [
            'MIN',
            'MAX'
        ],
        'filter' => [
            '=UF_PROJECT' =>$arElement['ID'],
        ],
        'runtime' => [
            new \Bitrix\Main\Entity\ExpressionField('MIN', 'MIN(UF_SQUARE)'),
            new \Bitrix\Main\Entity\ExpressionField('MAX', 'MAX(UF_SQUARE)')
        ]

    ];
    $arSquare   = $oPlots->getList($arSelect2);
    $iAvailable = count($oPlots->getList($arSelect));

    $arResult['ITEMS'][$arKey]['AVAILABLE']  = $iAvailable;
    $arResult['ITEMS'][$arKey]['MIN_SQUARE'] = array_shift($arSquare['MIN']);
    $arResult['ITEMS'][$arKey]['MAX_SQUARE'] = array_shift($arSquare['MAX']);


    $arSelect = [
        'select' => [
            'UF_STATUS',
            'UF_PROJECT',
        ],
        'filter' => [
            '=UF_PROJECT' =>$arElement['ID'],
            '=UF_STATUS'=>$iStatusReserv
        ],

    ];
    $iReserv = count($oPlots->getList($arSelect));

    $arResult['ITEMS'][$arKey]['RESERV'] = $iReserv;


    $arSelect = [
        'select' => [
            'UF_STATUS',
            'UF_PROJECT',
        ],
        'filter' => [
            '=UF_PROJECT' =>$arElement['ID'],
            '=UF_STATUS'=>$iStatusSold
        ]
    ];

    $iSold = count($oPlots->getList($arSelect));

    $arResult['ITEMS'][$arKey]['SOLD'] = $iSold;
}

$arSelectRuntime = [
    'select' => ['MIN_AREA','MAX_AREA','MIN_COST','MAX_COST'],
    'filter'=>['=UF_PROM'=>1,'UF_STATUS'=>$iStatusAvailable],
    'runtime'=>[
        new ExpressionField('MIN_AREA', 'MIN(UF_SQUARE)'),
        new ExpressionField('MAX_AREA', 'MAX(UF_SQUARE)'),
        new ExpressionField('MIN_COST', 'MIN(UF_SALE_PRICE * UF_SQUARE)'),
        new ExpressionField('MAX_COST', 'MAX(UF_SALE_PRICE * UF_SQUARE)'),
    ]
];

$oHighLoadBlock = $oPlots->getList($arSelectRuntime);

$arResult ['Filter'] = $oHighLoadBlock;
