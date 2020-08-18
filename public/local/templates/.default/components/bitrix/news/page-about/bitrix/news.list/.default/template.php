<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<?php
$options =  IQDEV\Options\Options::getPageOptions('about');
?>
<section class="section mb-medium">
    <div class="container">
        <div class="separate-paragraph">
            <div class="separate-paragraph__title"><h1><?=$options['Navigator_Name']?></h1></div>
            <div class="separate-paragraph__divider"></div>
            <div class="separate-paragraph__text-wrapper">
                <div class="separate-paragraph__text">
                    <?=$options['Description']?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mb-large">
    <div class="container">
        <div class="grid-layout">
            <div class="grid-layout__item">
                <div class="about-title-image"><img class="img" src="<?=$options['Image']?>"/></div>
            </div>
        </div>
        <div class="grid-layout grid-layout--gap-15 grid-layout--col-4">
            <div class="grid-layout__item grid-layout__item--md-span-column-1">
                <div class="grid-card grid-card--background-green grid-card--color-white">
                    <div class="grid-card__content">
                        <div class="grid-card__title"><?=$arResult['ITEMS'][0]['NAME']?></div>
                        <div class="grid-card__subtext">
                            <?=$arResult['ITEMS'][0]['PREVIEW_TEXT']?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid-layout__item grid-layout__item--md-span-column-3">
                <div class="grid-card grid-card--background-sand">
                    <div class="grid-card__content">
                        <div class="grid-card__title grid-card__title--green">
                            <?=$options['Our-values']?>
                        </div>
                        <div class="slider-simple glide js-slider-simple">
                            <div class="slider-simple__body">
                                <div class="glide__track" data-glide-el="track">
                                    <div class="glide__slides">
                                        <?foreach ($arResult['Our-values'] as $arElement) {?>
                                        <div class="glide__slide">
                                            <div class="slider-simple-text">
                                                <div class="slider-simple-text__title"><?=$arElement['NAME']?></div>
                                                <div class="slider-simple-text__text">
                                                    <?=$arElement['PREVIEW_TEXT']?>
                                                </div>
                                            </div>
                                        </div>
                                        <?}?>
                                    </div>
                                </div>
                        </div>
                            <div class="slider-simple__arrows">
                                <div class="slider-simple-controls">
                                    <div data-glide-el="controls">
                                        <div class="slider-simple-controls__arrow glide__arrow glide__arrow--prev"
                                             data-glide-dir="&lt;">
                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341
                                                13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066
                                                22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132
                                                12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066
                                                1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341
                                                10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z"
                                                        fill="#D1D1D1">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <ul class="slider-simple-controls__list" data-glide-el="controls[nav]">
                                        <?foreach ($arResult['Our-values'] as $arKey => $arElement) {?>
                                        <li class="glide__bullet" data-glide-dir="=0"><?=$arKey?></li>
                                        <? } ?>
                                    </ul>
                                    <div data-glide-el="controls">
                                        <div class="slider-simple-controls__arrow glide__arrow glide__arrow--next"
                                             data-glide-dir="&gt;">
                                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607
                                                10.9393L11.5147 1.3934C10.9289 0.807611 9.97919 0.807611
                                                9.3934 1.3934C8.80761 1.97919 8.80761 2.92893 9.3934 3.51472L17.8787
                                                12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208 9.3934 22.6066C9.97919
                                                23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0
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
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mb-large">
    <div class="container">
        <div class="section-header">
            <?=$options['Facts']?>
        </div>
        <div class="grid-layout grid-layout--gap-15 grid-layout--col-4">
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-2"><a
                        class="grid-card" href="#"><img class="grid-card__image" src="http://placehold.it/1920x800"/>
                    <div class="grid-card__arrow-link">
                        <div>
                            <?=$arResult['Facts'][0]['NAME']?>
                        </div>
                        <div class="grid-card__arrow-link-link">
                            <div class="arrow-link arrow-link--right">
                                <div class="arrow-link__border">
                                    <svg viewBox="0 0 26 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 2C13.9264 2 24 12.0736 24 24.5C24 30.524 21.6326 35.9951
                                        17.7775 40.0337C16.8686 40.9858 15.8771 41.8582 14.8145 42.6395C11.0863
                                        45.3806 6.48226 47 1.5 47"
                                                stroke="#6BBD45" stroke-width="3" stroke-linecap="round"
                                              stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </div>
                                <svg class="arrow-link__arrow" width="19" height="15" viewBox="0 0 19 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.2071 8.20711C18.5976 7.81658 18.5976 7.18342 18.2071 6.79289L11.8431
                                    0.428932C11.4526 0.0384078 10.8195 0.0384078 10.4289 0.428932C10.0384 0.819457
                                    10.0384 1.45262 10.4289 1.84315L16.0858 7.5L10.4289 13.1569C10.0384 13.5474
                                    10.0384 14.1805 10.4289 14.5711C10.8195 14.9616 11.4526 14.9616 11.8431
                                    14.5711L18.2071 8.20711ZM0.5 8.5L17.5 8.5V6.5L0.5 6.5L0.5 8.5Z"
                                            fill="#6BBD45 ">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </a></div>
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-1">
                <div class="grid-card grid-card--background-blue grid-card--color-white">
                    <div class="grid-card__content">
                        <div class="grid-card__title">
                            <?=$arResult['Facts'][1]['NAME']?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-1">
                <div class="grid-card grid-card--background-sand">
                    <div class="grid-card__grow">
                        <div class="grid-card__content">
                            <div class="grid-card__title">
                                <?=$arResult['Facts'][2]['NAME']?>
                            </div>
                            <div class="grid-card__subtitle">
                                <?=$arResult['Facts'][2]['PREVIEW_TEXT']?>
                            </div>
                        </div>
                    </div>
                    <a class="grid-card__button" href="#">Выбрать участок</a></div>
            </div>
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-1">
                <div class="grid-card grid-card--border">
                    <div class="grid-card__content">
                        <div class="grid-card__title">
                            <?=$arResult['Facts'][3]['NAME']?>
                        </div>
                        <div class="grid-card__subtitle">
                            <?=$arResult['Facts'][3]['PREVIEW_TEXT']?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-2">
                <div class="grid-card grid-card--background-primary grid-card--color-white">
                    <div class="grid-card__content">
                        <div class="grid-card__title">
                            <?=$arResult['Facts'][4]['NAME']?>
                        </div>
                        <div class="grid-card__subtitle">
                            <?=$arResult['Facts'][4]['PREVIEW_TEXT']?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-layout__item grid-layout__item--md-span-column-2 grid-layout__item--lg-span-column-1">
                <div class="grid-card grid-card--background-sand">
                    <div class="grid-card__content">
                        <div class="grid-card__title">
                            <?=$arResult['Facts'][5]['NAME']?>
                        </div>
                        <div class="grid-card__subtitle">
                            <?=$arResult['Facts'][5]['PREVIEW_TEXT']?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--overflow-hidden mb-large">
    <div class="container">
        <div class="section-header"><?=$options['Why']?></div>
        <div class="slider glide js-slider">
            <div class="slider__body">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        <? foreach ($arResult['WHY'] as $arElements) {?>
                        <div class="glide__slide">
                            <div class="card-list">
                                <div class="card-list__icon">
                                    <img class="img"
                                         src="<?=CFile::GetPath($arElements['PROPERTIES']['PHOTO']['VALUE'][0])?>"/>
                                </div>
                                <div class="card-list__title">
                                    <?=$arElements['NAME']?>
                                </div>
                                <div class="card-list__list-container"></div>
                                <? foreach ($arElements['PROPERTIES']['ADVANTAGES']['VALUE'] as $strValue) {?>
                                <div class="card-list__list-item">
                                    <?=$strValue?>
                                </div>
                                <?}?>
                            </div>
                        </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--overflow-hidden mb-large">
    <div class="container">
        <div class="section-header"><?=$options['Trust']?></div>
        <div class="slider-trust">
            <div class="glide js-slider-trust">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        <?foreach ($arResult['Trust'] as $arElement) {?>
                        <div class="glide__slide">
                            <img class="img slider-trust__item"
                                 src="<?=CFile::GetPath($arElement['PREVIEW_PICTURE'])?>"/>
                        </div>
                        <? } ?>
                    </div>
                </div>
                <div class="slider-trust__arrows">
                    <div class="slider-trust-controls">
                        <div data-glide-el="controls">
                            <div class="slider-trust-controls__arrow glide__arrow glide__arrow--prev"
                                 data-glide-dir="&lt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341
                                    13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066
                                    22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132
                                    12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066
                                    1.3934C12.0208 0.807611 11.0711 0.807611 10.4853 1.3934L0.939341
                                    10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z"
                                            fill="#D1D1D1">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <ul class="slider-trust-controls__list glide__bullets" data-glide-el="controls[nav]">
                            <?foreach ($arResult['Trust'] as $arKey => $arElement) {?>
                            <li class="glide__bullet" data-glide-dir="=<?=$arKey?>"><?=$arKey?></li>
                            <?}?>
                        </ul>
                        <div data-glide-el="controls">
                            <div class="slider-trust-controls__arrow glide__arrow glide__arrow--next"
                                 data-glide-dir="&gt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147
                                    1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919
                                    8.80761 2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711
                                    8.80761 22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147
                                    22.6066L21.0607 13.0607ZM0 13.5L20 13.5V10.5L0 10.5L0 13.5Z"
                                            fill="#D1D1D1">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mb-large">
    <div class="container-large">
        <div>
            <div class="form-wide-wrapper form-wide-wrapper--wood">
                <div class="container">
                    <div class="form-wide">
                        <div class="form-wide__left-line"></div>
                        <div class="form-wide__text form-wide__text--vertical-md">
                            <div class="form-wide__title">Экскурсия по загородной жизни</div>
                            <div class="form-wide__description">Приглашаем вас на обзорную экскурсию по
                                загородной жизни в один из наших поселков. Заполните форму ниже, и мы вам перезвоним.
                            </div>
                        </div>
                        <form class="form-wide__form js-form" action="/?ajaxAction=formExcursion"
                              data-name="wide-excursion">
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
                                        <div class="checkbox__text">Подтверждаю согласие с
                                            <a class="checkbox__link" href="#" target="_blank">
                                                политикой обработки персональных данных</a>
                                        </div>
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
    </div>
</section>
<section class="section section--overflow-hidden pb-large">
    <div class="container">
        <div class="section-header">А что у нас нового?</div>
        <div class="tabs js-tabs">
                <?
                require_once $_SERVER['DOCUMENT_ROOT'].'/_inc/about_menu.php';
                ?>
            <div class="tabs__contents">
                <?
                require_once $_SERVER['DOCUMENT_ROOT'].'/_inc/about-news.php';
                require_once $_SERVER['DOCUMENT_ROOT'].'/_inc/about-stories.php';
                require_once $_SERVER['DOCUMENT_ROOT'].'/_inc/about-articles.php';
                ?>
            </div>
        </div>
    </div>
</section>
