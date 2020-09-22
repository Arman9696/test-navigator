<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetPageProperty("title",
    "Оставьте отзыв");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
global $APPLICATION;

$APPLICATION->SetTitle("Glob");

?>
    <div class="modal js-modal" data-modal-open="review">
        <div class="modal__content">
            <div class="modal__title">Добавить отзыв</div>
            <div class="modal__description">Оставьте контактные данные. Они не будут опубликованы на сайте.
                Мы свяжемся с вами
                для подтверждения.
            </div>
            <form class="modal__form js-form" action="/?ajaxAction=formReview" data-name="review">
                <div class="modal__input">
                    <div class="input js-input"><input class="input__field" type="text" name="name" placeholder="Имя"
                                                       data-validate="required,name"/>
                        <div class="input__error"></div>
                    </div>
                </div>
                <div class="modal__input">
                    <div class="input js-input">
                        <input class="input__field" type="text" name="phone" placeholder="Телефон"
                                                       data-validate="required,phone" data-masking="phone"/>
                        <div class="input__error"></div>
                    </div>
                </div>
                <div class="modal__input"><textarea class="modal__textarea" placeholder="Отзыв" name="review"></textarea></div>
                <div class="modal__input"><label class="modal__file js-file">
                        <input class="modal__file-input" type="file" name="file" data-validate="required,type=image"/>
                        <div class="modal__file-label">Прикрепить файл</div>
                        <div class="modal__file-error"></div>
                    </label></div>
                <div class="modal__checkbox">
                    <div class="checkbox js-checkbox"><label class="checkbox__label">
                            <input class="checkbox__field" type="checkbox" data-validate="required"/>
                            <div class="checkbox__custom checkbox__custom--border"></div>
                            <div class="checkbox__text">Подтверждаю согласие с<a class="checkbox__link"
                                                                                 href="#" target="_blank">
                                    политикой обработки персональных данных</a></div>
                        </label>
                        <div class="checkbox__error"></div>
                    </div>
                </div>
                <div class="modal__response"></div>
                <div class="modal__button">
                    <button class="button button--primary" type="submit"><span>Отправить</span></button>
                </div>
            </form>
        </div>
    </div>
<?$APPLICATION->IncludeComponent(
    "bitrix:news",
    "page-reviews",
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
        "IBLOCK_ID" => \IQDEV\Base\Helper::getIblockId('reviews'),
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

    )
);?>
<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");