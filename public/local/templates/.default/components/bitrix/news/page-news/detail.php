<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "",
    [
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
        "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
        "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
        "FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
        'PROPERTY_CODE'=> [
            'PROPERTY_PHOTO',
        ],

    ],
    $component
);
?>

