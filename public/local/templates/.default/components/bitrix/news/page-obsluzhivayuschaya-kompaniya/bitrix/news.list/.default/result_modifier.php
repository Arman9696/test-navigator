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

$oIblockNews = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter1, false, ["nPageSize" => 50], $arSelect);
while ($arItems = $oIblockNews ->GetNextElement()) {
    $arItem[$index] = $arItems->GetFields();

    $arItem[$index]["PROPERTIES"] = $arItems->GetProperties();
    $index++;
}
$arResult['works'] = $arItem;

$arItem = [];

$arFilter2 = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('questions'),   // id инфоблока
];

$oIblockQuest = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter2, false, ["nPageSize" => 50], $arSelect);
while ($arItems = $oIblockQuest ->GetNextElement()) {
    $arItem [] = $arItems->GetFields();
    $index++;
}
$arResult['quest'] = $arItem;

$arItem = [];

$arFilter3 = [
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('sotrudniki'),   // id инфоблока
];

$oIblockSotrudniki = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter3, false, ["nPageSize" => 50], $arSelect);
while ($arItems = $oIblockSotrudniki ->GetNextElement()) {
    $arItem[$index] = $arItems->GetFields();

    $arItem[$index]["PROPERTIES"] = $arItems->GetProperties();
    $index++;
}
$arResult['sotrudniki'] = $arItem;
