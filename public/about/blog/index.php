<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Строим дом в коттеджном поселке под Тюменью. Блог с полезными советами и интересной информацией о постройке загородного дома. Форма подписки на статьи.");
$APPLICATION->SetPageProperty("title", "Блог о благоустройстве вашей земли");

global $APPLICATION;

$APPLICATION->SetTitle("Полезные статьи");
IQDEV\Base\Load::SetProperty('h1', $APPLICATION->GetTitle(false));
?>
<?global $arrFilter;
$arrFilter = [
    'SECTION_ID' => \IQDEV\Base\Helper::getIblockSectionId('news-page','blog'),
]
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news",
    "page-blog",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "Страница",
        "DETAIL_PROPERTY_CODE" => array("",""),
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('news-page'),
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "NEWS_COUNT" => "3",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_FOLDER" => "/about/blog/",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" =>
            ["detail"=>"#ELEMENT_ID#/"],
        "USE_FILTER"=>"Y",
        "FILTER_NAME"=> '$arrFilter'


    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
