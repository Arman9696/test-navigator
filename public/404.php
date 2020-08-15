<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

//IQDEV\Base\Load::setTemplate('/local/markup/src/markup/page/errors/index.pug');

if (CModule::IncludeModule('iqdev.options')){
IQDEV\Base\Load::setProperty('errors', \iqdev\options\Options::getPageOptions('404_page'));
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
