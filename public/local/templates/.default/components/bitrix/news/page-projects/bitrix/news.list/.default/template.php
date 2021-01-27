<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
?>
<?$arFilter = array_shift($arResult['Filter'])?>

<?$options = IQDEV\Options\Options::getPageOptions('projects');?>
<section class ="section mb-medium">
    <div class ="container">
        <div class="gridster">
            <?foreach ($arResult['ITEMS'] as $arKey => $arElement) {?>
                <?
                $arProperties = $arElement['PROPERTIES'];
                $iMin_Square  = $arElement['MIN_SQUARE'];
                $iMax_Square  = $arElement['MAX_SQUARE'];
                ?>
                <?if ($arElement['AVAILABLE'] > 0) {?>
                    <div class="gridster__item"><a class="card" href="<?=$arElement['DETAIL_PAGE_URL']?>">
                    <div class="card__image" style="background-image: url(<?=$arElement['PREVIEW_PICTURE']['SRC']?>)">
                        <div class="card__logo-inner">
                            <div class="card__logo" style="background-image:
                            url(<?=CFile::GetPath($arProperties['LOGO']['VALUE'])?>)"></div>
                        </div>
                        <div class="card__name"><?=$arElement['NAME']?></div>
                    </div>
                    <div class="card__content">
                        <div class="card__location">
                            <?=$arElement['PREVIEW_TEXT']?>
                        </div>
                        <div class="card__list">
                            <div class="card__list-item card__list-item--sale">
                                <svg width="15" height="18" viewBox="0 0 15 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.2857 6.18701H0V17.1861H14.2857V6.18701Z" fill="#7EC95C"></path>
                                    <path d="M9.28571 10.9991C9.28571 9.86003 8.32643 8.9368 7.14286 8.9368C5.95929
                                    8.9368 5 9.86003 5 10.9991C5 11.9045 5.61 12.6655 6.45357 12.9425C6.44571 12.9824
                                    6.42857 13.0195 6.42857 13.0614V14.4363C6.42857 14.8158 6.74857 15.1237 7.14286
                                    15.1237C7.53714 15.1237 7.85714 14.8158 7.85714 14.4363V13.0614C7.85714 13.0195
                                    7.84 12.9824 7.83214 12.9425C8.67571 12.6655 9.28571 11.9045 9.28571 10.9991Z"
                                            fill="#48AD19">
                                    </path>
                                    <path d="M3.57142 4.8121C3.57142 2.91682 5.17357 1.37489 7.14285
                                    1.37489C9.11214 1.37489 10.7143 2.91682 10.7143
                                    4.8121V6.18699H12.1429V4.8121C12.1429 2.15857 9.9 0 7.14285 0C4.38571 0 2.14285
                                    2.15857 2.14285 4.8121V6.18699H3.57142V4.8121Z"
                                            fill="#48AD19">
                                    </path>
                                </svg>
                                <span><?=$arElement['SOLD']." ".$options['Sold']?></span></div>
                            <div class="card__list-item card__list-item--reserved">
                                <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.79217 7.97784H6.49347C4.13439 7.13415 2.59738 5.15529 2.59738
                                    2.961V1.01001H11.6883V2.961C11.6883 5.15529 10.1513 7.13415 7.79217 7.97784Z"
                                            fill="#7EC95C">
                                    </path>
                                    <path d="M6.49347 7.97708H7.79217C10.1513 8.82078 11.6883 10.7997 11.6883
                                    12.994V14.945H2.59738V12.994C2.59738 10.7997 4.13439 8.82078 6.49347 7.97708Z"
                                            fill="#7EC95C">
                                    </path>
                                    <path d="M0.649351 1.59015H1.2987H2.5974H13.6364C13.9955 1.59015 14.2857 1.32995
                                    14.2857 1.00935C14.2857 0.688755 13.9955 0.428558 13.6364
                                    0.428558H2.5974H1.2987H0.649351C0.29026 0.428558 0 0.688755 0 1.00935C0
                                    1.32995 0.29026 1.59015 0.649351 1.59015Z" fill="#48AD19">
                                    </path>
                                    <path d="M13.6357 14.3632H1.9474C1.94545 14.3632 1.9435 14.3644 1.94091
                                    14.3644H0.64935C0.29026 14.3644 0 14.6246 0 14.9452C0 15.2658 0.29026 15.526
                                    0.64935 15.526H2.5974C2.59935 15.526 2.6013 15.5248 2.60389 15.5248H13.6357C13.9948
                                    15.5248 14.2851 15.2646 14.2851 14.944C14.2851 14.6234 13.9948 14.3632 13.6357
                                    14.3632Z" fill="#48AD19"></path>
                                </svg>
                                <span><?=$arElement['RESERV']." ".$options['Reserv']?></span></div>
                            <div class="card__list-item card__list-item--access">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="7.14286" cy="7.85715" r="7.14286" fill="#7EC95C"></circle>
                                    <path d="M7.60502 3.57144H6.59663V11.0232H7.60502V3.57144Z" fill="#48AD19"></path>
                                    <path d="M7.10084 11.4889L3.57144 8.41172L4.31564 7.76297L7.10084 10.1914L9.88604
                                    7.76297L10.6302 8.41172L7.10084 11.4889Z"
                                            fill="#48AD19">
                                    </path>
                                </svg>
                                <span><?=$arElement['AVAILABLE']." ".$options['Available']?></span></div>
                        </div>
                    </div>
                    <div class="card__footer">
                        <div class="card__spot"><?="Участки от $iMin_Square до $iMax_Square соток"?></div>
                        <div class="card__button">
                            <div class="arrow-link arrow-link--right">
                                <div class="arrow-link__border">
                                    <svg viewBox="0 0 26 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 2C13.9264 2 24 12.0736 24 24.5C24 30.524 21.6326 35.9951 17.7775
                                        40.0337C16.8686 40.9858 15.8771 41.8582 14.8145 42.6395C11.0863 45.3806 6.48226
                                        47 1.5 47" stroke="#6BBD45" stroke-width="3" stroke-linecap="round"
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
                <?} else {?>
                    <div class="gridster__item"><a class="card card--overlay" href="#">
                            <div class="card__image" style="background-image:
                                    url(<?=$arElement['PREVIEW_PICTURE']['SRC']?>)">
                                <div class="card__logo-inner">
                                    <div class="card__logo" style="background-image:
                                            url(<?=CFile::GetPath($arProperties['LOGO']['VALUE'])?>)"></div>
                                </div>
                                <div class="card__name"><?=$arElement['NAME']?></div>
                            </div>
                            <div class="card__content">
                                <div class="card__location">
                                    <?=$arElement['PREVIEW_TEXT']?>
                                </div>
                                <div class="card__list">
                                    <div class="card__list-item card__list-item--sale">
                                        <svg width="15" height="18" viewBox="0 0 15 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.2857 6.18701H0V17.1861H14.2857V6.18701Z" fill="#7EC95C"></path>
                                            <path d="M9.28571 10.9991C9.28571 9.86003 8.32643 8.9368 7.14286
                                            8.9368C5.95929 8.9368 5 9.86003 5 10.9991C5 11.9045 5.61 12.6655 6.45357
                                            12.9425C6.44571 12.9824 6.42857 13.0195 6.42857 13.0614V14.4363C6.42857
                                            14.8158 6.74857 15.1237 7.14286 15.1237C7.53714 15.1237 7.85714 14.8158
                                            7.85714 14.4363V13.0614C7.85714 13.0195 7.84 12.9824 7.83214 12.9425C8.67571
                                             12.6655 9.28571 11.9045 9.28571 10.9991Z"
                                                  fill="#48AD19">
                                            </path>
                                            <path d="M3.57142 4.8121C3.57142 2.91682 5.17357 1.37489 7.14285
                                    1.37489C9.11214 1.37489 10.7143 2.91682 10.7143
                                    4.8121V6.18699H12.1429V4.8121C12.1429 2.15857 9.9 0 7.14285 0C4.38571 0 2.14285
                                    2.15857 2.14285 4.8121V6.18699H3.57142V4.8121Z"
                                                  fill="#48AD19">
                                            </path>
                                        </svg>
                                        <span><?=$arElement['SOLD']." ".$options['Sold']?></span></div>
                                    <div class="card__list-item card__list-item--reserved">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.79217 7.97784H6.49347C4.13439 7.13415 2.59738 5.15529 2.59738
                                    2.961V1.01001H11.6883V2.961C11.6883 5.15529 10.1513 7.13415 7.79217 7.97784Z"
                                                  fill="#7EC95C">
                                            </path>
                                            <path d="M6.49347 7.97708H7.79217C10.1513 8.82078 11.6883 10.7997 11.6883
                                    12.994V14.945H2.59738V12.994C2.59738 10.7997 4.13439 8.82078 6.49347 7.97708Z"
                                                  fill="#7EC95C">
                                            </path>
                                            <path d="M0.649351 1.59015H1.2987H2.5974H13.6364C13.9955 1.59015 14.2857
                                            1.32995 14.2857 1.00935C14.2857 0.688755 13.9955 0.428558 13.6364
                                            0.428558H2.5974H1.2987H0.649351C0.29026 0.428558 0 0.688755 0 1.00935C0
                                            1.32995 0.29026 1.59015 0.649351 1.59015Z" fill="#48AD19">
                                            </path>
                                            <path d="M13.6357 14.3632H1.9474C1.94545 14.3632 1.9435 14.3644 1.94091
                                    14.3644H0.64935C0.29026 14.3644 0 14.6246 0 14.9452C0 15.2658 0.29026 15.526
                                    0.64935 15.526H2.5974C2.59935 15.526 2.6013 15.5248 2.60389 15.5248H13.6357C13.9948
                                    15.5248 14.2851 15.2646 14.2851 14.944C14.2851 14.6234 13.9948 14.3632 13.6357
                                    14.3632Z" fill="#48AD19"></path>
                                        </svg>
                                        <span><?=$arElement['RESERV']." ".$options['Reserv']?></span></div>
                                    <div class="card__list-item card__list-item--access">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="7.14286" cy="7.85715" r="7.14286" fill="#7EC95C"></circle>
                                            <path d="M7.60502 3.57144H6.59663V11.0232H7.60502V3.57144Z" fill="#48AD19">
                                            </path>
                                            <path d="M7.10084 11.4889L3.57144 8.41172L4.31564 7.76297L7.10084
                                            10.1914L9.88604 7.76297L10.6302 8.41172L7.10084 11.4889Z"
                                                  fill="#48AD19">
                                            </path>
                                        </svg>
                                        <span><?=$arElement['AVAILABLE']." ".$options['Available']?></span></div>
                                </div>
                            </div>
                            <div class="card__footer">
                                <div class="card__spot">Продано</div>
                                <div class="card__button">
                                    <div class="arrow-link arrow-link--right">
                                        <div class="arrow-link__border">
                                            <svg viewBox="0 0 26 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 2C13.9264 2 24 12.0736 24 24.5C24 30.524 21.6326
                                                35.9951 17.7775 40.0337C16.8686 40.9858 15.8771 41.8582 14.8145
                                                42.6395C11.0863 45.3806 6.48226 47 1.5 47" stroke="#6BBD45"
                                                      stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                            </svg>
                                        </div>
                                        <svg class="arrow-link__arrow" width="19" height="15" viewBox="0 0 19 15"
                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.2071 8.20711C18.5976 7.81658 18.5976 7.18342 18.2071
                                            6.79289L11.8431 0.428932C11.4526 0.0384078 10.8195 0.0384078 10.4289
                                            0.428932C10.0384 0.819457 10.0384 1.45262 10.4289 1.84315L16.0858
                                            7.5L10.4289 13.1569C10.0384 13.5474 10.0384 14.1805 10.4289 14.5711C10.8195
                                            14.9616 11.4526 14.9616 11.8431 14.5711L18.2071 8.20711ZM0.5 8.5L17.5
                                            8.5V6.5L0.5 6.5L0.5 8.5Z" fill="#6BBD45 ">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a></div>
                <?}?>
            <?}?>
            <div class="gridster__item gridster__item--calc">
                <div class="local-filter">
                    <div class="local-filter__title">Выберите свой участок</div>
                    <form class="local-filter__grid filter-slider" action="/ceni-na-zemelnie-uchastki/" method="GET">
                        <div class="local-filter__grid-item">
                            <div class="local-filter__slider">
                                <div class="local-filter__slider-item">
                                    <div class="filter-slider__slider-name">Стоимость</div>
                                    <div class="input-slider js-input-slider" data-min="<?=$arFilter['MIN_COST']?>"
                                         data-max="<?=$arFilter['MAX_COST']?>"
                                         data-labels="[&quot;₽&quot;,&quot;₽&quot;,&quot;₽&quot;]">
                                        <input class="input-slider__input" type="hidden" name="cost"/>
                                        <div class="input-slider__slider"></div>
                                        <div class="input-slider__results">
                                            <div class="filter-slider__result"></div>
                                            <div class="filter-slider__result"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="local-filter__slider-item">
                                    <div class="filter-slider__slider-name">Размер участка</div>
                                    <div class="input-slider js-input-slider" data-min="<?=$arFilter['MIN_AREA']?>"
                                         data-max="<?=$arFilter['MAX_AREA']?>"
                                         data-labels="[&quot;сотка&quot;,&quot;сотки&quot;,&quot;соток&quot;]"><input
                                                class="input-slider__input" type="hidden" name="area"/>
                                        <div class="input-slider__slider"></div>
                                        <div class="input-slider__results">
                                            <div class="filter-slider__result"></div>
                                            <div class="filter-slider__result"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="local-filter__grid-item">
                            <div class="local-filter__checkbox-title">Коттеджный поселок</div>
                            <?foreach ($arResult['ITEMS'] as $arElement) {?>
                            <div class="local-filter__checkbox">
                                <div class="checkbox">
                                    <label class="checkbox__label">
                                        <input class="checkbox__field" type="checkbox" name="checkbox"
                                               value="<?=$arElement['ID']?>"
                                               checked="checked"/>
                                        <div class="checkbox__custom"></div>
                                        <div class="checkbox__text"><?=$arElement['NAME']?></div>
                                    </label>
                                </div>
                            </div>
                            <?}?>
                        </div>
                        <div class="local-filter__grid-item">
                            <div class="local-filter__button">
                                <button class="button button--primary" type="submit">
                                    <span>Подобрать участок</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mt-medium mb-medium">
    <div class="container">
        <div class="section-header">Коттеджные поселки на карте</div>
        <div class="map-villages js-map-villages">
            <div class="map-villages__ya" id="map-villages__ya"></div>
        </div>
    </div>
</section>
<section class="section mb-medium">
    <div class="container">
        <div class="section-header">На что стоит обратить внимание при выборе коттеджного поселка в Тюмени?</div>
        <div class="accordion-container js-accordion accordion-container--show-more">
            <? $iCount = count($arResult['vnimanie']) ?>
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
                                    <?= $iNumber_Quest . '.' . $arResult['vnimanie'][$index]['NAME'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion__body" style="display: none">
                            <?= $arResult['vnimanie'][$index]['PREVIEW_TEXT'] ?>
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
                                    <?= $iNumber_Quest . '.' . $arResult['vnimanie'][$index]['NAME'] ?>
                                </div>
                            </div>
                        </div>
                        <div class="accordion__body" style="display: none">
                            <?= $arResult['vnimanie'][$index]['PREVIEW_TEXT'] ?>
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
                                                <?= $iNumber_Quest . '.' . $arResult['vnimanie'][$index]['NAME'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__body" style="display: none">
                                        <?= $arResult['vnimanie'][$iNumber_Element]['PREVIEW_TEXT'] ?>
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
                                                <?= $iNumber_Quest . '.' . $arResult['vnimanie'][$index]['NAME'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion__body" style="display: none">
                                        <?= $arResult['vnimanie'][$iNumber_Element]['PREVIEW_TEXT'] ?>
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
