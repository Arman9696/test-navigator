<?php
/** @var $APPLICATION */

require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Строим дом в коттеджном поселке под Тюменью. Блог с полезными советами и интересной информацией о постройке загородного дома. Форма подписки на статьи.");
$APPLICATION->SetPageProperty("title", "Global");
require_once $_SERVER['DOCUMENT_ROOT'] .'/_inc/menu.php';

$APPLICATION->IncludeComponent(
    'bitrix:highload',
    '.default',
    []
);

?>
<?
require_once $_SERVER['DOCUMENT_ROOT'] .'/_inc/line-unit.php';
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");