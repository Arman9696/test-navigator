<?php

$arSelect = array("ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE", "DETAIL_TEXT", "PROPERTY_*");
$arFilter = array(
    "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('news-page'),   // id инфоблока
    "SECTION_ID" => \IQDEV\Base\Helper::getIblockSectionId('news-page', 'baner'),     // нужная секция
);
$Baners = CIBlockElement::GetList(array("SORT" => "ASC"), $arFilter, false, array("nPageSize" => 50), $arSelect);
$Item = [];
while ($ar_result = $Baners->GetNextElement()) {
    $Item[] = $ar_result->GetFields();
}

$arResult['BANNERS'] = $Item;