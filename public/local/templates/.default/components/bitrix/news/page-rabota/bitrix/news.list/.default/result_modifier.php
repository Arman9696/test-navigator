<?php
CModule::IncludeModule('iqdev.options');
$arSelect = [
    "ID",
    "IBLOCK_ID",
    "IBLOCK_NAME",
    "NAME",
    "PREVIEW_PICTURE",
    "PREVIEW_TEXT",
    "PROPERTY_*",
    "PHOTO",
    'LIST_PROPERTY_CODE'
];
$arFilter = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('WHY'),
];
$oList    = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, ["nPageSize" => 50], $arSelect);
$Item     = [];
$index    = 0;

while ($arItems = $oList->GetNextElement()) {
    $Item[$index] = $arItems->GetFields();

    $Item[$index]["PROPERTIES"] = $arItems->GetProperties();
    $index++;
}
$arResult['WHY'] = $Item;
