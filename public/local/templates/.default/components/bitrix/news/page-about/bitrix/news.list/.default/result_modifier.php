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
    "IBLOCK_SECTION_ID",
    "PROPERTY_*",
];
$oValues  = \IQDEV\Base\Helper::getIblockSectionId('about', 'Our-values');

$oWhy = \IQDEV\Base\Helper::getIblockSectionId('about', 'WHY');

$oFacts = \IQDEV\Base\Helper::getIblockSectionId('about', 'Facts');
$oTrust = \IQDEV\Base\Helper::getIblockSectionId('about', 'Trust');

$arFilter = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('about'),   // id инфоблока
    "SECTION_ID" => [$oValues,$oFacts,$oWhy,$oTrust]
];

$SectionOurvalues = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, ["nPageSize" => 50], $arSelect);

while ($ar_result = $SectionOurvalues->GetNextElement()) {
    $iSection = $ar_result->GetFields()['IBLOCK_SECTION_ID'];

    $arItem[$iSection][$index] = $ar_result->GetFields();

    $arItem[$iSection][$index]['PROPERTIES'] = $ar_result->GetProperties();
    $index++;
}
$arResult['ITEMS_SECTION'] = $arItem;
