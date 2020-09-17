<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetPageProperty("description",
    "Земельные участки в Тюмени от девелоперской компании «Навигатор», 
    у нас — ✔гарантия чистоты сделки; ✔удобное расположение; ✔собственная обслуживающая компания ☎ +7 3452 564-275");
$APPLICATION->SetPageProperty("title",
    "Купить участок в Тюмени | ДК «Навигатор»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
global $APPLICATION;

$APPLICATION->SetTitle("Земельные участки в Тюмени");


$iblockId = \IQDEV\Base\Helper::getIblockId('ras');
$No_Empty = false;
$aFields = [
    'IBLOCK_ID'=>$iblockId,
];


$Element = \CIBlockElement::GetList([["SORT" => "ASC"]],$aFields,false, ["nPageSize" => 50]);
$Element = $Element->GetNextElement()->GetProperties(false,["CODE" => "EMAIL"]);
?>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
