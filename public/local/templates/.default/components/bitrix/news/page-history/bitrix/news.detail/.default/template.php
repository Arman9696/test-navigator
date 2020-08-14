<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
?>
<?

$APPLICATION->SetPageProperty('menu', 'N');?>
<section class="section section--overflow-hidden mb-medium">
    <div class="container">
    <div class="detail">
    <div class="detail__item">
        <?if ($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]) { ?>
        <div class="detail-header"><h1 class="detail-header__title"><?=$arResult["NAME"]?></h1>
        <? } ?>
            <div class="detail-header__footer">
                <?if ($arParams["DISPLAY_DATE"]=="N") { ?>
                    <span class="news-date-time"><?=date('d.m.Y', strtotime($arResult['TIMESTAMP_X']))?></span>
                <? } ?>
                <div class="detail-header__share">
                    <div class="detail-header__share-title">Поделиться:</div>
                    <a class="detail-header__share-icon" href="<?=$arResult['SOCIAL']['facebook']?>" target="_blank">
                        <div class="icon">
                            <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.57895 6.875V4.375C6.57895 3.685 7.16842 3.125 7.89474
                                3.125H9.21053V0H6.57895C4.39868 0 2.63158 1.67875 2.63158
                                3.75V6.875H0V10H2.63158V20H6.57895V10H9.21053L10.5263 6.875H6.57895Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                    <a class="detail-header__share-icon" href="<?=$arResult['SOCIAL']['vkontakte']?>" target="_blank">
                        <div class="icon">
                            <svg width="25" height="14" viewBox="0 0 25 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.8446 12.1602C23.7799 12.0527 23.3799 11.1894 21.4551 9.41514C19.44
                                    7.55723 19.7107 7.85892 22.1378 4.6464C23.616 2.68992 24.207 1.49512 24.0221
                                    0.984342C23.8461 0.497462 22.7589 0.625902 22.7589 0.625902L19.1437
                                    0.646811C19.1437 0.646811 18.876 0.610967 18.676 0.728954C18.4821
                                    0.845447 18.3572 1.11428 18.3572 1.11428C18.3572 1.11428 17.7843
                                    2.62868 17.0204 3.91608C15.4098 6.63275 14.7647 6.77613 14.5015
                                    6.60736C13.8894 6.21457 14.0428 5.02724 14.0428 4.18491C14.0428
                                    1.55187 14.4443 0.45415 13.2594 0.170385C12.8654 0.0762949 12.5766
                                    0.013568 11.5706 0.00311351C10.2803 -0.010328 9.18706 0.007594
                                    8.56899 0.307787C8.15695 0.507916 7.83965 0.954472 8.03364
                                    0.979862C8.27275 1.01123 8.81411 1.12473 9.10134 1.51304C9.47278
                                    2.01336 9.45925 3.13946 9.45925 3.13946C9.45925 3.13946 9.67278
                                    6.23847 8.96149 6.62379C8.47275 6.88814 7.80356 6.34899 6.36743
                                    3.88322C5.63207 2.62122 5.07566 1.2248 5.07566 1.2248C5.07566
                                    1.2248 4.96889 0.964927 4.77791 0.826031C4.54633 0.657266 4.22151
                                    0.6035 4.22151 0.6035L0.783816 0.624409C0.783816 0.624409 0.268012
                                    0.639344 0.0785334 0.861876C-0.0898924 1.06051 0.0649992 1.46973
                                    0.0649992 1.46973C0.0649992 1.46973 2.7568 7.72301 5.8035
                                    10.8758C8.59907 13.7657 11.7721 13.576 11.7721 13.576H13.2097C13.2097
                                    13.576 13.6443 13.5282 13.8654 13.2908C14.0699 13.0727 14.0624 12.6635
                                    14.0624 12.6635C14.0624 12.6635 14.0338 10.7473 14.9301
                                    10.4651C15.8128 10.1873 16.9467 12.317 18.1482 13.1369C19.0565
                                    13.7567 19.7467 13.6208 19.7467 13.6208L22.9604 13.576C22.9604
                                    13.576 24.6416 13.473 23.8446 12.1602Z">
                                </path>
                            </svg>
                        </div>
                    </a>
                    <a class="detail-header__share-icon" href="<?=$arResult['SOCIAL']['odnoklassniki']?>"
                       target="_blank">
                        <div class="icon">
                            <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.7925 3.02543C6.97143 3.02543 7.93019 3.9842 7.93019 5.16312C7.93019
                                6.3385 6.97143 7.29726 5.7925 7.29726C4.61357 7.29726 3.65481 6.3385 3.65481
                                5.16312C3.65481 3.9842 4.61357 3.02543 5.7925 3.02543ZM5.7925 10.3227C8.64039
                                10.3227 10.9556 8.00746 10.9556 5.16312C10.9556 2.31524 8.64039 0 5.7925
                                0C2.94462 0 0.632928 2.31524 0.632928 5.16312C0.632928 8.00746 2.94462 10.3227
                                5.7925 10.3227ZM7.88048 14.5342C8.93157 14.2927 9.94359 13.8772 10.8775
                                13.2913C11.5841 12.8474 11.7972 11.9135 11.3533 11.2069C10.9059 10.4967
                                9.97555 10.2836 9.26536 10.7311C7.15252 12.0591 4.43248 12.0591 2.31609
                                10.7311C1.60945 10.2836 0.67554 10.4967 0.231668 11.2069C-0.212205
                                11.9135 0.000853446 12.8474 0.707498 13.2913C1.64141 13.8772 2.65343
                                14.2927 3.70452 14.5342L0.817579 17.4176C0.228116 18.007 0.228116
                                18.9658 0.817579 19.5552C1.11586 19.85 1.49937 19.9991 1.88642
                                19.9991C2.27348 19.9991 2.66054 19.85 2.95882 19.5552L5.7925
                                16.7216L8.62973 19.5552C9.21919 20.1483 10.1744 20.1483 10.7674
                                19.5552C11.3569 18.9658 11.3569 18.007 10.7674 17.4176L7.88048 14.5342Z">
                                </path>
                            </svg>
                        </div>
                    </a>
            </div>
        </div>
    </div>
    </div>
        <div class="detail__item"></div>
    <div class="detail__item">
        <div class="detail-content">
        <?if ($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])) {?>
            <div class="detail-content__image">
                <img class="img" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                     alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                     title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"/>
            </div>
        <? } else {?>
                <img class="img" src="http://placehold.it/1920x1080"
                     alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                     title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"/>
        <?}?>
            <?if ($arResult["NAV_RESULT"]) { ?>
                <?if ($arParams["DISPLAY_TOP_PAGER"]) {?>
                    <?=$arResult["NAV_STRING"]?>
                <? } ?>
                <?echo $arResult["NAV_TEXT"];?>
                <?if ($arParams["DISPLAY_BOTTOM_PAGER"]) { ?>
                    <?=$arResult["NAV_STRING"]?>
                <? } ?>
            <?} elseif (strlen($arResult["DETAIL_TEXT"])>0) { ?>
                <?=$arResult["DETAIL_TEXT"]?>
            <? } ?>

            <?if (strlen($arResult["PROPERTIES"]["DETAIL"]["~VALUE"]["TEXT"])>0) {?>
                <?$iImage = $arResult["PROPERTIES"]["IMAGE"]["VALUE"]?>
                <?if ($iImage != null) {?>
            <div class="detail-content__image"><img class="img" src="<?=CFILE::GetPath($iImage)?>"/></div>
                <?} else {?>
                    <div class="detail-content__image">
                        <img class="img" src="https://source.unsplash.com/900x450"/>
                    </div>
                <?}?>
                <?=$arResult["PROPERTIES"]["DETAIL"]["~VALUE"]["TEXT"]?>
            <?}?>
        </div>


    </div>
        <div class="detail__item">
            <div class="detail-aside-banners">
                <?foreach ($arResult['BANNERS'] as $arkey => $aElement) {?>
                    <? if ($arkey == 0) {?>
                    <div class="detail-aside-banners__item"><a class="banner" href="#">
                            <div class="banner__photo-wrapper">
                                <?if ($aElement["DETAIL_PICTURE"] == null && $aElement["DETAIL_PICTURE"] == "") {?>
                                    <img class="banner__photo"
                                         src="http://placehold.it/500x250/ffa"/>
                                <?} else {?>
                                    <img class="banner__photo" src="<?=CFile::GetPath($aElement["DETAIL_PICTURE"])?>"/>
                                <?}?>
                            </div>
                            <div class="banner__content"><h2 class="banner__title"><?=$aElement["NAME"]?></h2><span
                                        class="banner__text"><?=$aElement["DETAIL_TEXT"]?></span>
                                <div class="banner__button button button--outlined" href="#">
                                    <span>Подробнее</span>
                                </div>
                            </div>
                        </a></div>
                    <?}?>
                <?}?>
            </div>
        </div>
        <div class="detail__item detail__item--gallery-header">
            <div class="separate-paragraph">
                <div class="separate-paragraph__title"><span>Фотоотчет с мероприятия</span></div>
                <div class="separate-paragraph__divider"></div>
                <div class="separate-paragraph__text-wrapper">
                    <div class="separate-paragraph__text separate-paragraph__text--large">Полный фотоотчет смотрите
                        в наших официальных группах в социальных сетях
                        <div class="separate-paragraph__icons"><a class="separate-paragraph__icon" href="#">
                                <div class="icon icon--middle-brown icon--hover-primary">
                                    <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.57895 6.875V4.375C6.57895 3.685 7.16842 3.125 7.89474
                                        3.125H9.21053V0H6.57895C4.39868 0 2.63158 1.67875 2.63158
                                        3.75V6.875H0V10H2.63158V20H6.57895V10H9.21053L10.5263
                                         6.875H6.57895Z" fill="middle-brown">
                                        </path>
                                    </svg>
                                </div>
                            </a><a class="separate-paragraph__icon" href="#">
                                <div class="icon icon--middle-brown icon--hover-primary">
                                    <svg width="25" height="14" viewBox="0 0 25 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M23.8446 12.1602C23.7799 12.0527 23.3799 11.1894 21.4551
                                        9.41514C19.44 7.55723 19.7107 7.85892 22.1378 4.6464C23.616 2.68992
                                        24.207 1.49512 24.0221 0.984342C23.8461 0.497462 22.7589 0.625902
                                        22.7589 0.625902L19.1437 0.646811C19.1437 0.646811 18.876 0.610967
                                        18.676 0.728954C18.4821 0.845447 18.3572 1.11428 18.3572
                                        1.11428C18.3572 1.11428 17.7843 2.62868 17.0204 3.91608C15.4098 6.63275
                                        14.7647 6.77613 14.5015 6.60736C13.8894 6.21457 14.0428 5.02724 14.0428
                                        4.18491C14.0428 1.55187 14.4443 0.45415 13.2594 0.170385C12.8654
                                        0.0762949 12.5766 0.013568 11.5706 0.00311351C10.2803 -0.010328 9.18706
                                        0.007594 8.56899 0.307787C8.15695 0.507916 7.83965 0.954472 8.03364
                                        0.979862C8.27275 1.01123 8.81411 1.12473 9.10134 1.51304C9.47278
                                        2.01336 9.45925 3.13946 9.45925 3.13946C9.45925 3.13946 9.67278
                                        6.23847 8.96149 6.62379C8.47275 6.88814 7.80356 6.34899 6.36743
                                        3.88322C5.63207 2.62122 5.07566 1.2248 5.07566 1.2248C5.07566
                                        1.2248 4.96889 0.964927 4.77791 0.826031C4.54633 0.657266
                                        4.22151 0.6035 4.22151 0.6035L0.783816 0.624409C0.783816
                                        0.624409 0.268012 0.639344 0.0785334 0.861876C-0.0898924
                                        1.06051 0.0649992 1.46973 0.0649992 1.46973C0.0649992 1.46973
                                        2.7568 7.72301 5.8035 10.8758C8.59907 13.7657 11.7721 13.576
                                        11.7721 13.576H13.2097C13.2097 13.576 13.6443 13.5282 13.8654
                                        13.2908C14.0699 13.0727 14.0624 12.6635 14.0624 12.6635C14.0624
                                        12.6635 14.0338 10.7473 14.9301 10.4651C15.8128 10.1873 16.9467
                                        12.317 18.1482 13.1369C19.0565 13.7567 19.7467 13.6208 19.7467
                                        13.6208L22.9604 13.576C22.9604 13.576 24.6416 13.473 23.8446 12.1602Z"
                                              fill="middle-brown">
                                        </path>
                                    </svg>
                                </div>
                            </a><a class="separate-paragraph__icon" href="#">
                                <div class="icon icon--middle-brown icon--hover-primary">
                                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.7925 3.02543C6.97143 3.02543 7.93019 3.9842 7.93019 5.16312C7.93019
                                        6.3385 6.97143 7.29726 5.7925 7.29726C4.61357 7.29726 3.65481 6.3385 3.65481
                                        5.16312C3.65481 3.9842 4.61357 3.02543 5.7925 3.02543ZM5.7925 10.3227C8.64039
                                        10.3227 10.9556 8.00746 10.9556 5.16312C10.9556 2.31524 8.64039 0 5.7925
                                        0C2.94462 0 0.632928 2.31524 0.632928 5.16312C0.632928 8.00746 2.94462
                                        10.3227 5.7925 10.3227ZM7.88048 14.5342C8.93157 14.2927 9.94359 13.8772
                                        10.8775 13.2913C11.5841 12.8474 11.7972 11.9135 11.3533 11.2069C10.9059
                                        10.4967 9.97555 10.2836 9.26536 10.7311C7.15252 12.0591 4.43248 12.0591
                                        2.31609 10.7311C1.60945 10.2836 0.67554 10.4967 0.231668
                                        11.2069C-0.212205 11.9135 0.000853446 12.8474 0.707498 13.2913C1.64141
                                        13.8772 2.65343 14.2927 3.70452 14.5342L0.817579 17.4176C0.228116
                                        18.007 0.228116 18.9658 0.817579 19.5552C1.11586 19.85 1.49937
                                        19.9991 1.88642 19.9991C2.27348 19.9991 2.66054 19.85 2.95882
                                        19.5552L5.7925 16.7216L8.62973 19.5552C9.21919 20.1483 10.1744
                                        20.1483 10.7674 19.5552C11.3569 18.9658 11.3569 18.007 10.7674
                                        17.4176L7.88048 14.5342Z"
                                              fill="middle-brown">
                                        </path>
                                    </svg>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail__item"></div>
        <div class="detail__item detail__item--full-main detail__item--gallery">
            <div class="gallery js-gallery">
                <div class="gallery__container">
                    <?foreach ($arResult['PROPERTIES']['PHOTO']['VALUE'] as $iPhoto) {?>
                        <div class="gallery__item">
                            <a class="gallery-item" href="<?=CFile::GetPath($iPhoto)?>" data-fancybox="photo_large"
                               data-options="{&quot;backFocus&quot; : false}">
                                <img class="gallery-item__image" src="<?=CFile::GetPath($iPhoto)?>" width="100%"/>
                            </a>
                        </div>
                    <? } ?>
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
                            <path d="M6.79289 18.2071C7.18342 18.5976 7.81658 18.5976 8.20711
                            18.2071L14.5711 11.8431C14.9616 11.4526 14.9616 10.8195 14.5711
                            10.4289C14.1805 10.0384 13.5474 10.0384 13.1569 10.4289L7.5
                            16.0858L1.84315 10.4289C1.45262 10.0384 0.819456 10.0384
                            0.428932 10.4289C0.0384074 10.8195 0.0384073 11.4526 0.428932
                            11.8431L6.79289 18.2071ZM6.5 0.5L6.5 17.5L8.5 17.5L8.5 0.5L6.5 0.5Z" fill="#6BBD45">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="gallery__slider__wrapper">
                    <div class="gallery__slider__container js-gallery__slider__container">
                        <div class="gallery__slider__container__track" data-glide-el="track">
                            <div class="glide__slides">
                                <? foreach ($arResult['PROPERTIES']['PHOTO']['VALUE'] as $iPhoto) { ?>
                                    <div class="glide__slide">
                                        <a class="gallery-item" href="<?=CFile::GetPath($iPhoto)?>"
                                           data-fancybox="photo_mobile" data-options="{&quot;backFocus&quot; : false}">
                                            <img class="gallery-item__image" src="<?=CFile::GetPath($iPhoto)?>"
                                                 width="100%"/>
                                        </a></div>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail__item detail__item--slider-mobile">
            <div class="slider glide js-slider">
                <div class="slider__body">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                        <?foreach ($arResult['BANNERS'] as $aElement) {?>
                            <div class="glide__slide"><a class="banner" href="#">
                                    <div class="banner__photo-wrapper">
                                    <?if ($aElement["DETAIL_PICTURE"] == null || $aElement["DETAIL_PICTURE"] == "") { ?>
                                            <img class="banner__photo" src="http://placehold.it/500x250/ffa"/>
                                    <?} else {?>
                                            <img class="banner__photo"
                                                 src="<?=CFile::GetPath($aElement["DETAIL_PICTURE"])?>"/>
                                    <? } ?>
                                    </div>
                                    <div class="banner__content">
                                        <h2 class="banner__title"><?=$aElement["NAME"]?></h2>
                                        <span class="banner__text"><?=$aElement["DETAIL_TEXT"]?></span>
                                        <div class="banner__button button button--outlined" href="#">
                                            <span>Подробнее</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?}?>
                        </div>
                    </div>
                </div>
                <div class="slider__arrows">
                    <div class="slider-controls">
                        <div data-glide-el="controls">
                            <div class="slider-controls__arrow glide__arrow" data-glide-dir="&lt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.939341 10.9393C0.353554 11.5251 0.353554 12.4749 0.939341
                                    13.0607L10.4853 22.6066C11.0711 23.1924 12.0208 23.1924 12.6066
                                    22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132
                                    12L12.6066 3.51472C13.1924 2.92893 13.1924 1.97919 12.6066
                                    1.3934C12.0208 0.807611 11.0711 0.807611 10.4853
                                    1.3934L0.939341 10.9393ZM22 10.5L2 10.5V13.5L22 13.5V10.5Z" ill="#D1D1D1">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <ul class="slider-controls__list glide__bullets" data-glide-el="controls[nav]">
                            <li class="glide__bullet" data-glide-dir="=0">0</li>
                            <li class="glide__bullet" data-glide-dir="=1">1</li>
                        </ul>
                        <div data-glide-el="controls">
                            <div class="slider-controls__arrow glide__arrow" data-glide-dir="&gt;">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147
                                     1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761
                                     2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208
                                     9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0
                                     13.5L20 13.5V10.5L0 10.5L0 13.5Z" fill="#D1D1D1">
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
    <div class="container-large">
        <div class="feedback__container">
            <div class="container">
                <form class="feedback js-form" action="/?ajaxAction=formQuestion" data-name="question">
                    <div class="feedback__wrapper"><h2 class="feedback__title">Появились вопросы?</h2>
                        <p class="feedback__subtitle">Оставьте свой телефон и мы свяжемся с вами</p></div>
                    <div class="feedback__wrapper">
                        <div class="feedback__form">
                            <div class="feedback__inputs-wrapper">
                                <div class="feedback__input">
                                    <div class="input js-input">
                                        <input class="input__field" type="text" name="name" placeholder="Имя"
                                                                       data-validate="required,name"/>
                                        <div class="input__error">
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback__input">
                                    <div class="input js-input">
                                        <input class="input__field" type="text" name="phone" placeholder="Телефон"
                                                                       data-validate="required,phone"
                                               data-masking="phone"/>
                                        <div class="input__error"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="feedback_checkbox">
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
                        </div>
                    </div>
                    <div class="feedback__button">
                        <button class="button button--primary" type="submit"><span>Отправить</span></button>
                    </div>
                    <div></div>
                    <div class="feedback__response"></div>
                </form>
            </div>
        </div>
    </div>

</section>


