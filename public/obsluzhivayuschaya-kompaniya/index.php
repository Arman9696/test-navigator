<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetPageProperty("description",
    "Земельные участки в Тюмени от девелоперской компании «Навигатор»,
    у нас — ✔гарантия чистоты сделки; ✔удобное расположение; ✔собственная обслуживающая компания ☎ +7 3452 564-275");
$APPLICATION->SetPageProperty("title",
    "О компании");
global $APPLICATION;
$APPLICATION->SetTitle("Global");
$options = IQDEV\Options\Options::getPageOptions('ok_page');
?>

    <section class="section mb-medium">
        <div class="container">
            <div class="separate-paragraph">
                <div class="separate-paragraph__title separate-paragraph__title--image">
                    <img class="img" src="<?=$options['titleImage']?>"/>
                </div>
                <div class="separate-paragraph__divider"></div>
                <div class="separate-paragraph__text-wrapper">
                    <div class="separate-paragraph__text">
                        <?=$options['paragraphHeader']['text']?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section mb-large">
        <div class="container"><img class="img" src="<?=$options['paragraphHeader']['title_image']?>"/></div>
    </section>
    <section class="section mb-medium">
        <div class="container">
            <div class="separate-paragraph">
                <div class="separate-paragraph__title">
                    <span><?=$options['paragraphPermanentServices']['title']?></span>
                </div>
                <div class="separate-paragraph__divider"></div>
                <div class="separate-paragraph__text-wrapper">
                    <div class="separate-paragraph__text">
                        <?=$options['paragraphPermanentServices']['text']?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?$APPLICATION->IncludeComponent(
    "bitrix:news",
    "page-obsluzhivayuschaya-kompaniya",
    Array(
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('services'),
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "NEWS_COUNT" => "4",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_FOLDER" => "/about/our-news/",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" =>
            ["detail"=>"#ELEMENT_ID#/"],
        "SORT_BY1"=> "ID",
        "SORT_ORDER1"=> "ASC",
        'LIST_PROPERTY_CODE'=> [
            'COLOR',
            'PHOTO',
        ],
    )
);?>

<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");