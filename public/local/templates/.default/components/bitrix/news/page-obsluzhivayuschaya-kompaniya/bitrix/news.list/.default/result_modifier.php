<?php
$index = 0;

$arFilter1 = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('works-service'),   // id инфоблока
];

$arSelect = [
    "ID",
    "IBLOCK_ID",
    "IBLOCK_NAME",
    "NAME",
    "PREVIEW_PICTURE",
    "PREVIEW_TEXT",
    "PROPERTY_*",
];

$oIblock_News = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter1, false, ["nPageSize" => 50], $arSelect);
while ($ar_result = $oIblock_News ->GetNextElement()) {
    $arItem[$index] = $ar_result->GetFields();

    $arItem[$index]["PROPERTIES"] = $ar_result->GetProperties();
    $index++;
}
$arResult['works'] = $arItem;

$arItem = [];

$arFilter2 = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('questions'),   // id инфоблока
];

$oIblock_Quest = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter2, false, ["nPageSize" => 50], $arSelect);
while ($ar_result = $oIblock_Quest ->GetNextElement()) {
    $arItem [] = $ar_result->GetFields();
    $index++;
}
$arResult['quest'] = $arItem;

$arItem = [];

$arFilter3 = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('sotrudniki'),   // id инфоблока
];

$oIblock_Sotrudniki = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter3, false, ["nPageSize" => 50], $arSelect);
while ($ar_result = $oIblock_Sotrudniki ->GetNextElement()) {
    $arItem[$index] = $ar_result->GetFields();

    $arItem[$index]["PROPERTIES"] = $ar_result->GetProperties();
    $index++;
}
$arResult['sotrudniki'] = $arItem;
