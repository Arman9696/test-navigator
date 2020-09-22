<?php
/** @var $APPLICATION */

require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
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