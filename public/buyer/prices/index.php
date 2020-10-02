<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetPageProperty("title",
    "О компании");
global $APPLICATION;
$APPLICATION->SetTitle("О компании");
?>
<?$oOptions =  IQDEV\Options\Options::getPageOptions('buyer_prices');?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news",
    "page-prices",
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
        "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('projects'),
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
        "PAGER_TITLE" => "Поселки",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" =>
            ["detail"=>"#ELEMENT_ID#/"],
        'LIST_PROPERTY_CODE'=> [
            'AVAILABLE',
            'SOLD',
            'RESERVATION'
        ]
    )
);?>
    <section class="section mt-medium mb-medium">
        <div class="container">
            <div class="separate-paragraph">
                <div class="separate-paragraph__title"><span><?=$oOptions['separateTitle']?></span></div>
                <div class="separate-paragraph__divider"></div>
                <div class="separate-paragraph__text-wrapper">
                    <div class="separate-paragraph__text"><?=$oOptions['separateText']?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--overflow-hidden mb-medium">
        <div class="container">
            <div class="grid-layout grid-layout--gap-15 grid-layout--col-4">
                <div class="grid-layout__item grid-layout__item--lg-span-column-1">
                    <div class="grid-card grid-card--background-sand">
                        <div class="grid-card__content">
                            <div class="grid-card__title grid-card__title--small"><?=$oOptions['card'][1]?></div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout__item grid-layout__item--lg-span-column-1">
                    <div class="grid-card grid-card--border">
                        <div class="grid-card__grow">
                            <div class="grid-card__content grid-card__content--flex">
                                <div class="grid-card__grow">
                                    <div class="grid-card__title grid-card__title--small">
                                        <?=$oOptions['card'][2]?>
                                    </div>
                                </div>
                                <div class="grid-card__image-footer">
                                    <img class="img" src="../../assets/image/grid-unit-card/prices/1.svg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout__item grid-layout__item--lg-span-column-2">
                    <div class="grid-card grid-card--background-primary grid-card--color-white">
                        <div class="grid-card__grow">
                            <div class="grid-card__content grid-card__content--flex">
                                <div class="grid-card__grow">
                                    <div class="grid-card__title grid-card__title--small"><?=$oOptions['card'][3]?></div>
                                    <div class="grid-card__subtext"><?=$oOptions['card3Text']?></div>
                                </div>
                                <div class="grid-card__image-footer">
                                    <img class="img" src="../../assets/image/grid-unit-card/prices/2.svg"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout__item grid-layout__item--lg-span-column-2">
                    <div class="grid-card grid-card--border">
                        <div class="grid-card__content">
                            <div class="grid-card__title grid-card__title--small"><?=$oOptions['card'][4]?>
                            </div>
                            <div class="mt-medium"><a class="button button--primary button--auto-width"
                                                      href="/ceni-na-zemelnie-uchastki/">
                                    <span>Подобрать участок</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout__item grid-layout__item--lg-span-column-1">
                    <div class="grid-card grid-card--background-sand">
                        <div class="grid-card__content">
                            <div class="grid-card__title grid-card__title--small"><?=$oOptions['card'][5]?></div>
                        </div>
                    </div>
                </div>
                <div class="grid-layout__item grid-layout__item--lg-span-column-1">
                    <div class="grid-card grid-card--background-blue grid-card--color-white">
                        <div class="grid-card__content">
                            <div class="grid-card__title grid-card__title--small"><?=$oOptions['card'][6]?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? require_once $_SERVER['DOCUMENT_ROOT'] .'/_inc/line-unit.php'; ?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
