<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetPageProperty("description",
    "Земельные участки в Тюмени от девелоперской компании «Навигатор»,
    у нас — ✔гарантия чистоты сделки; ✔удобное расположение; ✔собственная обслуживающая компания ☎ +7 3452 564-275");
$APPLICATION->SetPageProperty("title",
    "Вакансии");
global $APPLICATION;
$APPLICATION->SetTitle("Global");
?>
<?
require_once $_SERVER['DOCUMENT_ROOT'].'/_inc/buyer_menu.php';
?>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
