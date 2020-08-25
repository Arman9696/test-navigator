<?php
CModule::IncludeModule('iqdev.options');
$arItem   = [];
$index    = 0;
$arSelect = [
    "ID",
    "IBLOCK_ID",
    "IBLOCK_NAME",
    "NAME",
    "PREVIEW_PICTURE",
    "PREVIEW_TEXT",
    "PROPERTY_*",
];
$arFilter = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('about'),   // id инфоблока
    "SECTION_ID" => \IQDEV\Base\Helper::getIblockSectionId('about', 'Our-values'),     // нужная секция
];

$Section_Our_values = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, ["nPageSize" => 50], $arSelect);

while ($ar_result = $Section_Our_values->GetNextElement()) {
    $arItem[] = $ar_result->GetFields();
}

$arResult['Our-values'] = $arItem;

$arItem = [];

$arFilter2 = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('about'),   // id инфоблока
    "SECTION_ID" => \IQDEV\Base\Helper::getIblockSectionId('about', 'Facts'),     // нужная секция
];

$Section_Facts = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter2, false, ["nPageSize" => 50], $arSelect);

while ($ar_result = $Section_Facts->GetNextElement()) {
    $arItem[] = $ar_result->GetFields();
}

$arResult['Facts'] = $arItem;

$arItem = [];

$arFilter3 = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('about'),   // id инфоблока
    "SECTION_ID" => \IQDEV\Base\Helper::getIblockSectionId('about', 'WHY'),     // нужная секция
];

$Section_Why = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter3, false, ["nPageSize" => 50], $arSelect);

while ($ar_result = $Section_Why->GetNextElement()) {
    $arItem[$index] = $ar_result->GetFields();

    $arItem[$index]["PROPERTIES"] = $ar_result->GetProperties();
    $index++;
}
$arResult['WHY'] = $arItem;

$arItem = [];

$arFilter4 = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('about'),   // id инфоблока
    "SECTION_ID" => \IQDEV\Base\Helper::getIblockSectionId('about', 'Trust'),     // нужная секция
];

$Section_Trust = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter4, false, ["nPageSize" => 50], $arSelect);

while ($ar_result = $Section_Trust->GetNextElement()) {
    $arItem[] = $ar_result->GetFields();
}

$arResult['Trust'] = $arItem;
