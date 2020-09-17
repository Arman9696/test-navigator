<?php
CModule::IncludeModule('iqdev.options');
$arSelect = ["ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE", "PREVIEW_TEXT", "PROPERTY_*"];

$arFilter    = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('rassrochka'),   // id инфоблока
    "SECTION_ID" => \IQDEV\Base\Helper::getIblockSectionId('rassrochka', 'why_profitable'),     // нужная секция
];
$oRassrochka = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, ["nPageSize" => 50], $arSelect);

$Item  = [];
$index = 0;
while ($arItems = $oRassrochka->GetNextElement()) {
    $Item[$index] = $arItems->GetFields();

    $Item[$index]["PROPERTIES"] = $arItems->GetProperties();
    $index++;
}
$arResult['rassrochka'] = $Item;
