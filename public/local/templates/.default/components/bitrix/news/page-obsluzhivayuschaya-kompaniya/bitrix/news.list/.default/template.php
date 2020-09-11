<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
?>
<?
$oOptions = IQDEV\Options\Options::getPageOptions('ok_page');
?>
<section class="section mb-large">
    <div class="container">
        <div class="cards-color">
            <? foreach ($arResult['ITEMS'] as $arElement) { ?>
                <? $arProperties = $arElement['PROPERTIES'] ?>
                <div class="cards-color__card cards-color__card--<?= $arProperties['COLOR']['VALUE'] ?>">
                    <div class="cards-color__card-title"><?= $arElement['NAME'] ?></div>
                    <div class="cards-color__card-text">
                        <?= $arElement['PREVIEW_TEXT'] ?>
                    </div>
                    <div class="cards-color__card-icon">
                        <img class="cards-color__card-icon-image"
                             src="<?= CFile::GetPath($arProperties['PHOTO']['VALUE']) ?>"/>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</section>
<section class="section mb-medium">
    <div class="container">
        <div class="separate-paragraph">
            <div class="separate-paragraph__title"><span><?= $oOptions['paragraphAdditionalServices']['title'] ?></span>
            </div>
            <div class="separate-paragraph__divider"></div>
            <div class="separate-paragraph__text-wrapper">
                <div class="separate-paragraph__text">
                    <?= $oOptions['paragraphAdditionalServices']['text'] ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mb-large">
    <div class="container">
        <div class="js-additional-services"></div>
    </div>
</section>
<section class="section mb-large">
    <div class="container">
        <div class="section-header">Как работает обслуживающая компания «Навигатор-Сервис?»</div>
        <div class="work-stage-container">
            <? foreach ($arResult['works'] as $arKey => $arElement) { ?>
                <? $arProperties = $arElement['PROPERTIES'] ?>
                <div class="work-stage">
                    <div class="work-stage__index"><?= $arKey + 1 ?></div>
                    <div class="work-stage__header">
                        <div class="work-stage__icon"><img
                                    src="<?= CFile::GetPath($arProperties['PHOTO']['VALUE']) ?>"/></div>
                        <div class="work-stage__line"></div>
                    </div>
                    <div class="work-stage__text">
                        <div class="work-stage__title"><?= $arElement['NAME'] ?></div>
                        <div class="work-stage__description">
                            <?= $arElement['PREVIEW_TEXT'] ?>
                        </div>
                    </div>
                </div>
            <? } ?>
        </div>
    </div>
</section>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/_inc/ask.php' ?>
<section class="section section--overflow-hidden pb-large">
    <div class="container">
        <div class="section-header">Новости и отзывы обслуживающей компании</div>
        <div class="tabs js-tabs">
            <? require_once $_SERVER['DOCUMENT_ROOT'] . '/_inc/about_menu.php' ?>
            <div class="tabs__contents">
                <? require_once $_SERVER['DOCUMENT_ROOT'] . '/_inc/about-news.php' ?>
                <? require_once $_SERVER['DOCUMENT_ROOT'] . '/_inc/review.php' ?>
            </div>
        </div>
    </div>
</section>
<section class="section mb-medium">
    <div class="container">
        <div class="section-header"><?= $oOptions['questionsTitle'] ?></div>
        <div class="accordion-container js-accordion accordion-container--show-more">
            <? $iCount = count($arResult['quest']) ?>
            <? for ($index = 0; $index < $iCount && $index <= 6; $index++) {
                $iNumber_Element = $index + 1;
                if ($index % 2 == 0) { ?>
                    <div class="accordion accordion--sand">
                        <div class="accordion__header">
                            <div class="accordion__header-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9"
                                     fill="none">
                                    <path d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409
                            7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172
                            7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172
                            1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261
                            4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="accordion__header-text">
                                <div class="accordion__header-text-primary">
                                    <? $iNumber_Quest = $index + 1 ?>
                                    <?= $iNumber_Quest . '.' . $arResult['quest'][$index]['NAME'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion__body" style="display: none">
                            <?= $arResult['quest'][$index]['PREVIEW_TEXT'] ?>
                        </div>
                    </div>
                <? } else { ?>
                    <div class="accordion">
                        <div class="accordion__header">
                            <div class="accordion__header-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9"
                                     fill="none">
                                    <path d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261 4.80473L9.64409
                            7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172 7.79144 8.74172
                            7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172 1.42748 8.74172
                            1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261
                            4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="accordion__header-text">
                                <div class="accordion__header-text-primary">
                                    <? $iNumber_Quest = $index + 1 ?>
                                    <?= $iNumber_Quest . '.' . $arResult['quest'][$index]['NAME'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion__body" style="display: none">
                            <?= $arResult['quest'][$index]['PREVIEW_TEXT'] ?>
                        </div>
                    </div>
                <? }
            } ?>
            <? if ($iNumber_Element >= 6) { ?>
            <div class="accordion-container__expand">
                <div class="expand js-expand">
                    <div class="expand__collapse" style="display:none;">
                        <? for (; $iNumber_Element < $iCount; $iNumber_Element++) { ?>
                            <? if ($iNumber_Element % 2 == 0) { ?>
                                <div class="accordion accordion--sand">
                                    <div class="accordion__header">
                                        <div class="accordion__header-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9"
                                                 viewBox="0 0 13 9" fill="none">
                                                <path d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261
                                                4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698
                                                7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654
                                                4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698
                                                0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261
                                                4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="accordion__header-text">
                                            <div class="accordion__header-text-primary">
                                                <? $iNumber_Quest = $iNumber_Element + 1 ?>
                                                <?= $iNumber_Quest . '.' . $arResult['quest'][$index]['NAME'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__body" style="display: none">
                                        <?= $arResult['quest'][$iNumber_Element]['PREVIEW_TEXT'] ?>
                                    </div>
                                </div>
                            <? } else { ?>
                                <div class="accordion">
                                    <div class="accordion__header">
                                        <div class="accordion__header-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9"
                                                 viewBox="0 0 13 9" fill="none">
                                                <path d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261
                                                4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698
                                                7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654
                                                4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698
                                                0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261
                                                4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="accordion__header-text">
                                            <div class="accordion__header-text-primary">
                                                <? $iNumber_Quest = $iNumber_Element + 1 ?>
                                                <?= $iNumber_Quest . '.' . $arResult['quest'][$index]['NAME'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__body" style="display: none">
                                        <?= $arResult['quest'][$iNumber_Element]['PREVIEW_TEXT'] ?>
                                    </div>
                                </div>
                            <? } ?>
                        <? } ?>
                    </div>
                    <div class="expand__a">
                        <div class="expand__b">
                            <div class="expand__button">
                                <div class="arrow-link arrow-link--bottom">
                                    <div class="arrow-link__border">
                                        <svg viewBox="0 0 49 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M47 1.5C47 13.9264 36.9264 24 24.5 24C18.476 24 13.0049
                                            21.6326 8.96629 17.7775C8.01424 16.8686 7.1418 15.8771 6.36049
                                            14.8145C3.61938 11.0863 2 6.48226 2 1.5" stroke="#6BBD45" stroke-width="3"
                                                  stroke-linecap="round" stroke-linejoin="round">

                                            </path>
                                        </svg>
                                    </div>
                                    <svg class="arrow-link__arrow" width="15" height="19" viewBox="0 0 15 19"
                                         fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.79289 18.2071C7.18342 18.5976 7.81658 18.5976 8.20711
                                        18.2071L14.5711 11.8431C14.9616 11.4526 14.9616 10.8195 14.5711 10.4289C14.1805
                                        10.0384 13.5474 10.0384 13.1569 10.4289L7.5 16.0858L1.84315 10.4289C1.45262
                                        10.0384 0.819456 10.0384 0.428932 10.4289C0.0384074 10.8195 0.0384073 11.4526
                                        0.428932 11.8431L6.79289 18.2071ZM6.5 0.5L6.5 17.5L8.5 17.5L8.5 0.5L6.5 0.5Z"
                                              fill="#6BBD45">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? } ?>
            </div>
        </div>
</section>
<section class="section section--overflow-hidden mb-large">
    <div class="container">
        <div class="section-header"><?=$oOptions['contactsTitle']?></div>
        <div class="glide contacts-persons js-contacts-persons">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?foreach ($arResult['sotrudniki'] as $arElement) {?>
                    <li class="glide__slide">
                        <div class="contacts-person contacts-person--slider">
                            <div class="contacts-person__photo"
                                 style="background-image:url(http://placehold.it/400x300);">
                            </div>
                            <div class="contacts-person__content">
                                <div class="contacts-person__name">
                                    <?=$arElement['NAME']?>
                                </div>
                                <div class="contacts-person__position">
                                    <?=$arElement['PREVIEW_TEXT']?>
                                </div>
                                <ul class="contacts-person__contact-group">
                                    <?foreach ($arElement['PROPERTIES']['PHONE']['VALUE'] as $strPhone) {?>
                                    <li>
                                        <?=$strPhone?>
                                    </li>
                                    <?}?>
                                </ul>
                                <ul class="contacts-person__contact-group">
                                    <?foreach ($arElement['PROPERTIES']['EMAIL']['VALUE'] as $strEmail) {?>
                                        <li>
                                            <?=$strEmail?>
                                        </li>
                                    <?}?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <?}?>
                </ul>
            </div>
        </div>
        <div class="contacts-table">
            <div class="contacts-table-group">
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name"><?=$oOptions['AccountingDepartment']?></div>
                    <div class="contacts-table-group__value"><?=$oOptions['dataAccountingDepartment']?></div>
                </div>
                <div class="contacts-table-group__divider"></div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name"><?=$oOptions['alpine_title1']?></div>
                    <div class="contacts-table-group__value"><?=$oOptions['alpine_data1']?></div>
                </div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name"><?=$oOptions['alpine_title3']?></div>
                    <div class="contacts-table-group__value"><?=$oOptions['alpine_data3']?></div>
                </div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name"><?=$oOptions['trees']?></div>
                    <div class="contacts-table-group__value"><?=$oOptions['trees_data']?></div>
                </div>
                <div class="contacts-table-group__divider"></div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name"><?=$oOptions['sovet_apline']?></div>
                    <div class="contacts-table-group__value"><?=$oOptions['data_apline']?></div>
                </div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name"><?=$oOptions['sovet_ushakova']?></div>
                    <div class="contacts-table-group__value"><?=$oOptions['data_ushakova']?></div>
                </div>
                <div class="contacts-table-group__group">
                    <div class="contacts-table-group__name"><?=$oOptions['sovet_esenino']?></div>
                    <div class="contacts-table-group__value"><?=$oOptions['data_esenino']?></div>
                </div>
            </div>
            <div class="contacts-table-map js-contacts-table-map js-tabs">
                <div class="contacts-table-map__navigation">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "contact",
                    [
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "right",
                        "COMPONENT_TEMPLATE" => "contact",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => [],
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "right",
                        "USE_EXT" => "Y"
                    ]
                );?>
                </div>
                <div class="tabs__contents">
                    <div class="tabs__content js-tabs__content active" data-tab-content="offices">
                        <div class="contacts-table-map__note">График приема посетилелей: <b>Четверг с 10:00 до 18:00</b>
                        </div>
                    </div>
                    <div class="tabs__content js-tabs__content" data-tab-content="alpine">
                        <div class="contacts-table-map__note">График приема посетилелей: <b>Пятница с 11:00 до 21:00</b>
                        </div>
                    </div>
                </div>
                <div class="contacts-table-map__map" style="width: 100%; height: 100%"></div>
            </div>

        </div>
    </div>
</section>
