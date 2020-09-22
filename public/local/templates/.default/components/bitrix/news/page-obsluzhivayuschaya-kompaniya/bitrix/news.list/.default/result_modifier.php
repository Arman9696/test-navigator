<?php
$index = 0;

$iBlockWorksId = \IQDEV\Base\Helper::getIblockId('works-service');

$iBlockQuestId = \IQDEV\Base\Helper::getIblockId('questions');

$iBlockSotrId = \IQDEV\Base\Helper::getIblockId('sotrudniki');

$arSelect = [
    "ID",
    "IBLOCK_ID",
    "IBLOCK_NAME",
    "NAME",
    "PREVIEW_PICTURE",
    "PREVIEW_TEXT",
    "PROPERTY_*",
];

if ($iBlockWorksId) {
    $oIblockWorks = CIBlockElement::GetList(["SORT" => "ASC"],
        ["IBLOCK_ID"=>$iBlockWorksId],
        false,
        ["nPageSize" => 50],
        $arSelect);

    while ($arItems = $oIblockWorks ->GetNextElement()) {
        $arItem[$index] = $arItems->GetFields();

        $arItem[$index]["PROPERTIES"] = $arItems->GetProperties();
        $index++;
    }
    $arResult['works'] = $arItem;
}

if ($iBlockQuestId) {
    $oIblockQuest = CIBlockElement::GetList(["SORT" => "ASC"],
        ["IBLOCK_ID"=>$iBlockQuestId],
        false,
        ["nPageSize" => 50],
        $arSelect);
    while ($arItems = $oIblockQuest ->GetNextElement()) {
        $arItem [] = $arItems->GetFields();
        $index++;
    }
    $arResult['quest'] = $arItem;
}

if ($iBlockSotrId) {
    $oIblockSotr = CIBlockElement::GetList(["SORT" => "ASC"],
        ["IBLOCK_ID"=>$iBlockSotrId],
        false,
        ["nPageSize" => 50],
        $arSelect);
    while ($arItems = $oIblockSotr ->GetNextElement()) {
        $arItem[$index] = $arItems->GetFields();

        $arItem[$index]["PROPERTIES"] = $arItems->GetProperties();
        $index++;
    }
    $arResult['sotrudniki'] = $arItem;
}
