<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetPageProperty("description",
    "Земельные участки в Тюмени от девелоперской компании «Навигатор»,
    у нас — ✔гарантия чистоты сделки; ✔удобное расположение; ✔собственная обслуживающая компания ☎ +7 3452 564-275");
$APPLICATION->SetPageProperty("title",
    "О компании");
global $APPLICATION;
$APPLICATION->SetTitle("Новости компании");
?>

        <?global $arrFilter;
            $arrFilter = [
                'SECTION_ID' => \IQDEV\Base\Helper::getIblockSectionId('news-page','news-page'),
            ]

        ?>

         <?$APPLICATION->IncludeComponent(
        "bitrix:news",
        "page-news",
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
            "SEF_FOLDER" => "/about/our-news/",
            "SEF_MODE" => "Y",
            "SEF_URL_TEMPLATES" =>
                ["detail"=>"#ELEMENT_ID#/"],
            "USE_FILTER"=>"Y",
            "FILTER_NAME"=> '$arrFilter'

        )
    );?>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");