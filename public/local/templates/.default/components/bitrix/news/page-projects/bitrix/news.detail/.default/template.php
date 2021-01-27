<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<?
$options = IQDEV\Options\Options::getPageOptions('projects');

$iMin_Square = $arResult['MIN_SQUARE'] ;
$iMax_Square = $arResult['MAX_SQUARE'] ;

$MinPrice = $arResult['MIN_PRICE'];
$MaxPrice = $arResult['MAX_PRICE'];

$arProperties = $arResult['PROPERTIES'];
?>
<div class="container">
    <section class="mb-large">
        <div class="village-header__container js-village-header__container">
            <div class="village-header__image-container js-village-header__image-container">
                <div class="village-header__track" data-glide-el="track">
                    <div class="glide__slides">
                        <? foreach ($arProperties['HEADER_PHOTOS']['VALUE'] as $arKey => $iPhoto) { ?>
                            <? $arKey_Image [$arKey] = $arKey ?>
                            <div class="glide__slide">
                                <div class="village-header__img">
                                    <img src="<?= CFile::GetPath($iPhoto) ?>"/>
                                </div>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
            <div class="village-header__content">
                <div>
                    <div class="village-header__content-top-wrapper">
                        <div class="village-header__content-logo">
                            <img src="<?= CFile::GetPath($arProperties['LOGO']['VALUE']) ?>"/>
                        </div>
                        <div class="village-header__content-navigation" data-glide-el="controls[nav]">
                            <? foreach ($arKey_Image as $iKey) { ?>
                                <button class="village-header__dot" data-glide-dir="=<?= $iKey ?>"></button>
                            <? } ?>
                        </div>
                    </div>
                    <h1 class="village-header__title"><?= $arResult['NAME'] ?></h1>
                    <h2 class="village-header__subtitle"><?= $arResult['DETAIL_TEXT'] ?></h2>
                    <button class="button button--primary village-header__button js-modal-trigger"
                            data-modal-id="visit">
                        <span>Записаться на просмотр</span>
                    </button>
                </div>
            </div>
            <div class="village-header__slider-wrapper">
                <div class="slider-advantages glide js-slider-advantages">
                    <div class="slider-advantages__body">
                        <div class="glide__track" data-glide-el="track">
                            <div class="glide__slides">
                                <? foreach ($arProperties['HEADER_ADVANTAGES']['VALUE'] as $arKey => $iPhoto) { ?>
                                    <div class="glide__slide">
                                        <div class="slide-advantage">
                                            <div class="slide-advantage__icon"><img
                                                        src="<?= CFile::GetPath($iPhoto) ?>"/></div>
                                            <div class="slide-advantage__text">
                                                <?= $arProperties['HEADER_ADVANTAGES']['DESCRIPTION'][$arKey] ?>
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal js-modal" data-modal-open="visit">
            <div class="modal__content">
                <div class="modal__title">Записаться на просмотр</div>
                <div class="modal__description">Оставьте контактные данные, и мы вам перезвоним!</div>
                <form class="modal__form js-form" action="/?ajaxAction=formAppointment" data-name="visit">
                    <div class="modal__input">
                        <div class="input js-input">
                            <input class="input__field" type="text" name="name" placeholder="Имя"
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
                    <div class="modal__checkbox">
                        <div class="checkbox js-checkbox">
                            <label class="checkbox__label">
                                <input class="checkbox__field" type="checkbox" data-validate="required"/>
                                <div class="checkbox__custom checkbox__custom--border"></div>
                                <div class="checkbox__text">Подтверждаю согласие с<a class="checkbox__link" href="#"
                                                                                     target="_blank">
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
    </section>
    <section class="section mb-large"><h2 class="village-about__title">О поселке</h2>
        <div class="village-about__container">
            <div class="village-about__right-wrapper">
                <div class="village-about__video">
                    <iframe src="https://youtube.com/embed/Ry7c7JFFyzY?rel=0"></iframe>
                </div>
                <div class="slide-village slide-village--sand slide-village--hidy">
                    <span class="slide-village__text">
                        <?= $arProperties['TEXT1']['~VALUE']['TEXT'] ?></span>
                </div>
            </div>
            <div class="village-about__grid">
                <div class="village-about__wrapper">
                    <div class="slide-village slide-village--green">
                        <span class="slide-village__title">
                            <?="Цены от $MinPrice ₽" ?><br/><?="до $MaxPrice ₽"?>
                        </span>
                        <span class="slide-village__subtitle">
                            <?="Участки от $iMin_Square до $iMax_Square соток"?>
                        </span>
                    </div>
                    <div class="slide-village__wrapped-item">
                        <div class="slide-village slide-village--blue">
                        <span class="slide-village__text">
                            Минимальная стоимость сотки земельного участка на 15.03.2019 — 70000 ₽
                        </span>
                        </div>
                        <div class="slide-village slide-village--outline">
                            <ul class="slide-village__list">
                                <li class="slide-village__list-item slide-village__list-item--lock">
                                    <?= $arResult['SOLD'] . " " . $options['Sold'] ?>
                                </li>
                                <li class="slide-village__list-item slide-village__list-item--sand-watches">
                                    <?= $arResult['RESERV'] . " " . $options['Reserv'] ?>
                                </li>
                                <li class="slide-village__list-item slide-village__list-item--download">
                                    <?= $arResult['AVAILABLE'] . " " . $options['Available'] ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slide-village slide-village--sand">
                    <span class="slide-village__text">
                        <?= $arProperties['TEXT2']['VALUE']['TEXT'] ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="village-about__track-container">
            <div class="village-about__track js-village-about__track">
                <div data-glide-el="track">
                    <div class="glide__slides">
                        <div class="glide__slide">
                            <div class="slide-village slide-village--green">
                                <span class="slide-village__title">
                                    <?="Цены от $MinPrice ₽" ?><br/><?="до $MaxPrice ₽"?>
                                </span>
                                <span class="slide-village__subtitle">
                                    <?="Участки от $iMin_Square до $iMax_Square соток"?>
                                </span>
                            </div>
                        </div>
                        <div class="glide__slide">
                            <div class="slide-village slide-village--sand">
                            <span class="slide-village__text">
                                <?= $arProperties['TEXT1']['~VALUE']['TEXT']?>
                            </span>
                            </div>
                        </div>
                        <div class="glide__slide">
                            <div class="slide-village slide-village--outline">
                                <ul class="slide-village__list">
                                    <li class="slide-village__list-item slide-village__list-item--lock">
                                        <?= $arResult['SOLD'] . " " . $options['Sold']?>
                                    </li>
                                    <li class="slide-village__list-item slide-village__list-item--sand-watches">
                                        <?= $arResult['RESERV'] . " " . $options['Reserv']?>
                                    </li>
                                    <li class="slide-village__list-item slide-village__list-item--download">
                                        <?= $arResult['AVAILABLE'] . " " . $options['Available']?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="glide__slide">
                            <div class="slide-village slide-village--blue">
                            <span class="slide-village__text">Минимальная стоимость сотки земельного участка на
                                15.03.2019 — 70000 ₽
                            </span>
                            </div>
                        </div>
                        <div class="glide__slide">
                            <div class="slide-village slide-village--sand">
                            <span class="slide-village__text">
                                <?= $arProperties['TEXT2']['~VALUE']['TEXT']?>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="village-infrastructure__container" id="infrastructure">
            <div class="village-infrastructure__title-wrapper">
                <h2 class="village-infrastructure__title">
                    <?=$arProperties['INFRASTRUCTURE_TEXT']['NAME']?>
                </h2>
                <span class="village-infrastructure__title-separator"></span>
                <h3 class="village-infrastructure__subtitle">
                <?=$arProperties['INFRASTRUCTURE_DESCR']['VALUE']?>
                </h3>
            </div>
            <div class="village-infrastructure__grid">
                <div class="village-infrastructure__row village-infrastructure__row--1">
                    <div class="village-infrastructure__block village-infrastructure__block--outlined">
                        <h4 class="village-infrastructure__block-title">
                            <?=$arProperties['COMMUNICATIONS_TITLE']['VALUE']?>
                        </h4>
                        <ul class="village-infrastructure__list">
                            <?foreach ($arProperties['COMMUNICATIONS']['VALUE'] as $strItem) {?>
                            <li class="village-infrastructure__list-item">
                                <?=$strItem?>
                            </li>
                            <?}?>
                        </ul>
                    </div>
                    <div class="village-infrastructure__block village-infrastructure__block--sand">
                        <h4 class="village-infrastructure__block-title">
                            <?=$arProperties['INFRASTRUCTURE_TEXT']['DESCRIPTION']?>
                        </h4>
                        <p class="village-infrastructure__block-text">
                            <?=$arProperties['INFRASTRUCTURE_TEXT']['VALUE']?>
                        </p>
                    </div>
                </div>
                <div class="village-infrastructure__row village-infrastructure__row--2">
                    <div class="village-infrastructure__image-container village-infrastructure__block--pic">
                        <img class="village-infrastructure__image"
                             src="<?=CFile::GetPath($arProperties['INFRASTRUCTURE_IMAGE']['VALUE'])?>"/></div>
                    <div class="village-infrastructure__block village-infrastructure__block--blue"><h4
                                class="village-infrastructure__block-title">
                            <?=$arProperties['INFRASTRUCTURE_LIST']['NAME']?>
                        </h4>
                        <p class="village-infrastructure__block-text">
                            <?=$arProperties['INFRASTRUCTURE_LIST']['~VALUE']['TEXT']?>
                        </p>
                    </div>
                </div>
                <div class="village-infrastructure__row village-infrastructure__row--3">
                    <div class="village-infrastructure__block village-infrastructure__block--presentation">
                        <img class="village-infrastructure__image"
                                src="<?=CFile::GetPath($arProperties['PRESENTATION_IMAGE']['VALUE'])?>"/>
                        <a class="button button--primary village-infrastructure__button js-modal-trigger"
                                data-modal-id="presentation"
                                data-village-id="<?=$arResult['CODE']?>"><span>Скачать презентацию</span></a></div>
                    <div class="village-infrastructure__block village-infrastructure__block--sand"><a
                                class="village-infrastructure__block-big-link" href="/obsluzhivayuschaya-kompaniya/">
                            <div class="arrow-link arrow-link--right">
                                <div class="arrow-link__border">
                                    <svg viewBox="0 0 26 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 2C13.9264 2 24 12.0736 24 24.5C24 30.524 21.6326 35.9951 17.7775
                                        40.0337C16.8686 40.9858 15.8771 41.8582 14.8145 42.6395C11.0863 45.3806
                                        6.48226 47 1.5 47" stroke="#6BBD45" stroke-width="3" stroke-linecap="round"
                                                stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </div>
                                <svg class="arrow-link__arrow" width="19" height="15" viewBox="0 0 19 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.2071 8.20711C18.5976 7.81658 18.5976 7.18342 18.2071 6.79289L11.8431
                                    0.428932C11.4526 0.0384078 10.8195 0.0384078 10.4289 0.428932C10.0384 0.819457
                                    10.0384 1.45262 10.4289 1.84315L16.0858 7.5L10.4289 13.1569C10.0384 13.5474 10.0384
                                    14.1805 10.4289 14.5711C10.8195 14.9616 11.4526 14.9616 11.8431 14.5711L18.2071
                                    8.20711ZM0.5 8.5L17.5 8.5V6.5L0.5 6.5L0.5 8.5Z"
                                            fill="#6BBD45 ">
                                    </path>
                                </svg>
                            </div>
                        </a>
                        <div class="village-infrastructure__block-content-wrapper">
                            <h4 class="village-infrastructure__block-title">
                                Обслуживающая компания
                            </h4>
                            <p class="village-infrastructure__block-text">У нас создана собственная обслуживающая
                                компания, которая
                                следит за порядком в поселках: покос травы летом, чистка дорог в зимнее время, вывоз
                                мусора,
                                благоустройство поселка.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal js-modal" data-modal-open="presentation">
            <div class="modal__content">
                <div class="modal__title">Скачать презентацию</div>
                <div class="modal__description">Чтобы скачать презентацию, заполните, пожалуйста, форму</div>
                <form class="modal__form js-form" action="/?ajaxAction=downloadPresentation" data-name="presentation"
                      data-download-link="/upload/docs/Альпийская%20долина.pdf" data-download-name="Альпийская долина">
                    <div class="modal__input">
                        <div class="input js-input">
                            <input class="input__field" type="text" name="name" placeholder="Имя"
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
                    <div class="modal__input"><input type="hidden" name="villageId" data-modal-import="id"/></div>
                    <div class="modal__checkbox">
                        <div class="checkbox js-checkbox"><label class="checkbox__label">
                                <input class="checkbox__field" type="checkbox" data-validate="required"/>
                                <div class="checkbox__custom checkbox__custom--border"></div>
                                <div class="checkbox__text">Подтверждаю согласие с<a class="checkbox__link" href="#"
                                                                                     target="_blank">
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
    </section>
</div>
<div class="village-map__container">
    <div class="village-map"><h2 class="village-map__title">Карта посёлка</h2>
        <div class="village-map__map-box__container">
            <div class="village-map__map-box" id="mapchooser" data-village="<?=$arResult['CODE']?>"
                 data-logo="/assets/image/logo/alpine.svg"></div>
        </div>
        <a href="#" target="_blank">
            <div class="village-map__banner">
                <div class="village-map__banner-logo">
                    <img src="/assets/image/projects/alpiyskaya-dolina-tyumen/rosrestr.jpg"/>
                </div>
                <div class="village-map__banner-link">
                    <div class="village-map__banner__filter">
                        <div class="village-map__banner-content">Смотреть кадастровую карту посёлка</div>
                    </div>
                </div>
            </div>
        </a></div>
    <script async="async" src="/assets/js/map.js"></script>
    <link rel="stylesheet" href="/assets/css/map.css"/>
    <div class="modal js-modal" data-modal-open="visitWithId">
        <div class="modal__content">
            <div class="modal__title">Записаться на просмотр</div>
            <div class="modal__description">Оставьте контактные данные, и мы вам перезвоним!</div>
            <form class="modal__form js-form" action="/?ajaxAction=formAppointment" data-name="visitWithId">
                <div class="modal__input">
                    <div class="input js-input"><input class="input__field" type="text" name="name" placeholder="Имя"
                                                       data-validate="required,name"/>
                        <div class="input__error"></div>
                    </div>
                </div>
                <div class="modal__input"><input type="hidden" name="id" data-modal-import="id"/></div>
                <div class="modal__input">
                    <div class="input js-input">
                        <input class="input__field" type="text" name="phone" placeholder="Телефон"
                                                       data-validate="required,phone" data-masking="phone"/>
                        <div class="input__error"></div>
                    </div>
                </div>
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
</div>
<section class="section mt-medium mb-medium">
    <div class="container">
        <div class="modal js-modal" data-modal-open="book">
            <div class="modal__content">
                <div class="modal__title">Забронировать участок</div>
                <div class="modal__description"></div>
                <div class="modal__info">
                    <div class="modal__info-wrapper">
                        <div class="modal__info-title" data-modal-import="districtName"></div>
                        <div class="modal__info-subtitle" data-modal-import="houseNum"></div>
                    </div>
                </div>
                <form class="modal__form js-form" action="/?ajaxAction=bookArea" data-name="book">
                    <div class="modal__input">
                        <div class="input js-input"
                        ><input class="input__field" type="text" name="name" placeholder="Имя"
                                data-validate="required,name"/>
                            <div class="input__error"></div>
                        </div>
                    </div>
                    <div class="modal__input">
                        <div class="input js-input">
                            <input class="input__field" type="phone" name="number" placeholder="Телефон"
                                   data-validate="required,phone" data-masking="phone"/>
                            <div class="input__error"></div>
                        </div>
                    </div>
                    <input type="hidden" name="id" data-modal-import="id"/>
                    <div class="modal__checkbox">
                        <div class="checkbox js-checkbox"><label class="checkbox__label">
                                <input class="checkbox__field" type="checkbox" data-validate="required"/>
                                <div class="checkbox__custom checkbox__custom--border"></div>
                                <div class="checkbox__text">Подтверждаю согласие с<a class="checkbox__link" href="#"
                                                                                     target="_blank">
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
        <div class="js-village-map-table" id="areachooser" data-villageId="<?=$arResult['CODE']?>"></div>
    </div>
</section>
<section class="section mt-medium mb-medium" id="booking">
    <div>
        <div class="form-wide-wrapper form-wide-wrapper--wood">
            <div class="container">
                <div class="form-wide">
                    <div class="form-wide__left-line"></div>
                    <div class="form-wide__text form-wide__text--horizontal-md">
                        <div class="form-wide__title">Запишитесь на&nbsp;просмотр</div>
                        <div class="form-wide__description">Эксперт по недвижимости быстро подберет вам подходящий
                            вариант
                            земельного участка. А еще проведёт вам экскурсию по счастливой загородной жизни.
                        </div>
                    </div>
                    <form class="form-wide__form js-form" action="/?ajaxAction=formAppointment"
                          data-name="wide-appointment">
                        <div class="form-wide__form-item form-wide__form-item--field">
                            <div class="input js-input">
                                <input class="input__field" type="text" name="name" placeholder="Имя"
                                                               data-validate="required,name"/>
                                <div class="input__error"></div>
                            </div>
                        </div>
                        <div class="form-wide__form-item form-wide__form-item--field">
                            <div class="input js-input">
                                <input class="input__field" type="text" name="phone" placeholder="Телефон"
                                                               data-validate="required,phone" data-masking="phone"/>
                                <div class="input__error"></div>
                            </div>
                        </div>
                        <div class="form-wide__form-item form-wide__form-item--policy">
                            <div class="checkbox js-checkbox"><label class="checkbox__label">
                                    <input class="checkbox__field" type="checkbox" data-validate="required"/>
                                    <div class="checkbox__custom checkbox__custom--border"></div>
                                    <div class="checkbox__text">Подтверждаю согласие с<a class="checkbox__link" href="#"
                                                                                         target="_blank">
                                            политикой обработки персональных данных</a></div>
                                </label>
                                <div class="checkbox__error"></div>
                            </div>
                        </div>
                        <div class="form-wide__form-item form-wide__form-item--submit">
                            <button class="button button--primary" type="submit"><span>Записаться</span></button>
                        </div>
                        <div class="form-wide__form-item form-wide__form-item--response">
                            <div class="form-wide__response"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--overflow-hidden mt-medium">
    <div class="container">
        <div class="tabs js-tabs">
            <? require_once $_SERVER['DOCUMENT_ROOT'].'/_inc/projects-menu.php';?>
            <div class="tabs__contents">
                <div class="tabs__content js-tabs__content active" data-tab-content="photo">
                    <div class="gallery js-gallery">
                        <div class="gallery__container">
                            <?foreach ($arProperties['PHOTOS']['VALUE'] as $iPhoto) {?>
                            <div class="gallery__item">
                                <a class="gallery-item" href="https://source.unsplash.com/juHayWuaaoQ/1500x1000"
                                  data-fancybox="photo_large" data-options="{&quot;backFocus&quot; : false}">
                                    <img class="gallery-item__image"
                                         src="<?=CFile::GetPath($iPhoto)?>" width="100%"/>
                                </a>
                            </div>
                            <?} ?>
                        </div>
                        <div class="gallery__open">
                            <div class="arrow-link arrow-link--bottom">
                                <div class="arrow-link__border">
                                    <svg viewBox="0 0 49 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M47 1.5C47 13.9264 36.9264 24 24.5 24C18.476 24 13.0049 21.6326 8.96629
                                         17.7775C8.01424 16.8686 7.1418 15.8771 6.36049 14.8145C3.61938 11.0863 2
                                         6.48226 2 1.5" stroke="#6BBD45" stroke-width="3" stroke-linecap="round"
                                              stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </div>
                                <svg class="arrow-link__arrow" width="15" height="19" viewBox="0 0 15 19" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.79289 18.2071C7.18342 18.5976 7.81658 18.5976 8.20711 18.2071L14.5711
                                    11.8431C14.9616 11.4526 14.9616 10.8195 14.5711 10.4289C14.1805 10.0384 13.5474
                                    10.0384 13.1569 10.4289L7.5 16.0858L1.84315 10.4289C1.45262 10.0384 0.819456
                                    10.0384 0.428932 10.4289C0.0384074 10.8195 0.0384073 11.4526 0.428932
                                    11.8431L6.79289 18.2071ZM6.5 0.5L6.5 17.5L8.5 17.5L8.5 0.5L6.5 0.5Z"
                                            fill="#6BBD45">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="gallery__slider__wrapper">
                            <div class="gallery__slider__container js-gallery__slider__container">
                                <div class="gallery__slider__container__track" data-glide-el="track">
                                    <div class="glide__slides">
                                    <?foreach ($arProperties['PHOTOS']['VALUE'] as $iPhoto) {?>
                                        <div class="glide__slide">
                                            <a class="gallery-item"
                                               href="https://source.unsplash.com/juHayWuaaoQ/1500x1000"
                                               data-fancybox="photo_mobile"
                                               data-options="{&quot;backFocus&quot; : false}">
                                                <img class="gallery-item__image"
                                                     src="<?=CFile::GetPath($iPhoto)?>"
                                                     width="100%"/>
                                            </a>
                                        </div>
                                    <?} ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="tabs__content js-tabs__content" data-tab-content="video">
                    <div class="gallery js-gallery">
                        <div class="gallery__container">
                            <? foreach ($arProperties['VIDEOS']['VALUE'] as $arKey => $iVideo) {?>
                                <div class="gallery__video">
                                    <iframe src="<?=$iVideo?>" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope;
                                            picture-in-picture"
                                            allowfullscreen="allowfullscreen">
                                    </iframe>
                                    <span class="gallery__video-title">
                                        <?=$arProperties['VIDEOS']['~DESCRIPTION'][$arKey]?>
                                    </span>
                                </div>
                            <?} ?>
                        </div>
                        <div class="gallery__open">
                            <div class="arrow-link arrow-link--bottom">
                                <div class="arrow-link__border">
                                    <svg viewBox="0 0 49 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M47 1.5C47 13.9264 36.9264 24 24.5 24C18.476 24 13.0049 21.6326
                                        8.96629 17.7775C8.01424 16.8686 7.1418 15.8771 6.36049 14.8145C3.61938
                                        11.0863 2 6.48226 2 1.5" stroke="#6BBD45" stroke-width="3"
                                              stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </div>
                                <svg class="arrow-link__arrow" width="15" height="19" viewBox="0 0 15 19" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.79289 18.2071C7.18342 18.5976 7.81658 18.5976 8.20711 18.2071L14.5711
                                    11.8431C14.9616 11.4526 14.9616 10.8195 14.5711 10.4289C14.1805 10.0384 13.5474
                                    10.0384 13.1569 10.4289L7.5 16.0858L1.84315 10.4289C1.45262 10.0384 0.819456
                                    10.0384 0.428932 10.4289C0.0384074 10.8195 0.0384073 11.4526 0.428932
                                    11.8431L6.79289 18.2071ZM6.5 0.5L6.5 17.5L8.5 17.5L8.5 0.5L6.5 0.5Z"
                                            fill="#6BBD45">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="gallery__slider__wrapper">
                            <div class="gallery__slider__container">
                                <?foreach ($arProperties['VIDEOS']['VALUE'] as $arKey => $iVideo) {?>
                                <div class="gallery__video">
                                    <iframe src="<?=$iVideo?>" frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope;
                                            picture-in-picture"
                                            allowfullscreen="allowfullscreen">
                                    </iframe>
                                    <span class="gallery__video-title">
                                        <?=$arProperties['VIDEOS']['~DESCRIPTION'][$arKey]?>
                                    </span>
                                </div>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<section class="section mt-medium mb-medium">
    <div class="container">
        <div class="village-banner__container js-village-banner__container">
            <div class="village-banner" data-glide-el="track">
                <div class="glide__slides">
                    <? foreach ($arResult['BANNERS'] as $arKey => $arElement) {?>
                        <?$aKey [$arKey] = $arKey ?>
                    <div class="glide__slide">
                        <a class="banner banner--expand-lg" href="#">
                            <div class="banner__photo-wrapper">
                                <img class="banner__photo"
                                     src="<?=CFile::GetPath($arElement['DETAIL_PICTURE'])?>"/>
                            </div>
                            <div class="banner__content">
                                <h2 class="banner__title"><?=$arElement['NAME']?></h2>
                                <span class="banner__badge">Скидка 10%</span>
                                <span class="banner__text">
                                    <?=$arElement['DETAIL_TEXT']?>
                                </span>
                                <div class="banner__button button button--outlined" href="#">
                                    <span>Подробнее</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <? } ?>
                </div>
                <div class="village-banner__dots" data-glide-el="controls[nav]">
                    <? foreach ($aKey as $iKey) {?>
                    <button class="village-banner__dot" data-glide-dir="=<?=$iKey?>"></button>
                    <?}?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--overflow-hidden mt-medium mb-medium">
    <div class="container">
        <div class="section-header"><?=$arProperties['CONSTRUCTION']['NAME']?></div>
        <div class="slider-progress glide js-slider-progress">
            <div class="slider-progress__body">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        <?foreach ($arResult['construction'] as $arKey => $arElement) {?>
                            <?$aKey[$arKey] = $arKey?>
                        <div class="glide__slide">
                            <div class="date-card">
                                <a class="date-card__image"
                                   href="<?=CFile::GetPath($arElement['PREVIEW_PICTURE'])?>"
                                   data-fancybox="village-progress" data-caption=""
                                   data-type="image" data-options="{&quot;backFocus&quot;: false}">
                                    <img src="<?=CFile::GetPath($arElement['PREVIEW_PICTURE'])?>"/></a>
                                <div class="date-card__date"><?=$arElement['NAME']?></div>
                            </div>
                        </div>
                        <? } ?>
                    </div>
                </div>
            </div>
            <div class="slider-progress__arrows">
                <div class="slider-progress-controls">
                    <div data-glide-el="controls">
                        <div class="slider-progress-controls__arrow glide__arrow" data-glide-dir="&lt;">
                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341 13.0607L10.4853
                                22.6066C11.0711 23.1924 12.0208 23.1924 12.6066 22.6066C13.1924 22.0208 13.1924 21.0711
                                12.6066 20.4853L4.12132 12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066
                                1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM22 10.5L2
                                10.5V13.5L22 13.5V10.5Z"
                                        fill="#D1D1D1">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <ul class="slider-progress-controls__list glide__bullets" data-glide-el="controls[nav]">
                        <?foreach ($aKey as $iKey) {?>
                        <li class="glide__bullet" data-glide-dir="=<?=$iKey?>"><?=$iKey?></li>
                        <? }?>
                    </ul>
                    <div data-glide-el="controls">
                        <div class="slider-progress-controls__arrow glide__arrow" data-glide-dir="&gt;">
                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147
                                1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761 2.92893
                                9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208 9.3934
                                22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0
                                13.5L20 13.5V10.5L0 10.5L0 13.5Z"
                                        fill="#D1D1D1">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<? require_once $_SERVER['DOCUMENT_ROOT'] .'/_inc/line-unit.php'?>
<section class="section section--overflow-hidden pt-medium pb-medium">
    <div class="container">
        <div class="section-header">Что нового в «Альпийской долине»?</div>
        <div class="tabs js-tabs">
                <? require_once $_SERVER['DOCUMENT_ROOT'].'/_inc/about_menu.php'; ?>
            <div class="tabs__contents">
                <?require_once $_SERVER['DOCUMENT_ROOT'].'/_inc/about-news.php'?>
                <?require_once $_SERVER['DOCUMENT_ROOT'].'/_inc/review.php'?>
                <?require_once $_SERVER['DOCUMENT_ROOT'].'/_inc/about-stories.php'?>
            </div>
        </div>
    </div>
</section>
