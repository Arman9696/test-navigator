<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};

?>
<?$oOption = IQDEV\Options\Options::getPageOptions('main_page')?>
<?$aFilter = array_shift($arResult['Filter'])?>
<section class="section section--overflow-hidden pt-medium pb-medium">
    <div class="container">
        <div class="tabs js-tabs">
            <? require_once $_SERVER['DOCUMENT_ROOT'] . '/_inc/left-index.menu.php'; ?>
            <div class="tabs__contents">
                <div class="tabs__content js-tabs__content active" data-tab-content="list">
                    <div class="slider glide js-slider">
                        <div class="slider__body">
                            <div class="glide__track" data-glide-el="track">
                                <div class="glide__slides">
                                    <? foreach ($arResult['ITEMS'] as $arElement) {
                                        $arProperties = $arElement['PROPERTIES'];
                                        if ($arElement['PROP']['AVAILABLE'] >= 1) { ?>
                                            <div class="glide__slide"><a class="card"
                                                                         href="<?=$arElement['DETAIL_PAGE_URL']?>">
                                                    <div class="card__image"
                                                         style="background-image: url(
                                                         <?=$arElement['PREVIEW_PICTURE']['SRC']?>)">
                                                        <div class="card__logo-inner">
                                                            <div class="card__logo"
                                                                 style="background-image:
                                                                 url(<?=
                                                                      CFile::GetPath($arProperties['LOGO']['VALUE'])
                                                                    ?>)">
                                                            </div>
                                                        </div>
                                                        <div class="card__name"><?=$arElement['NAME']?></div>
                                                    </div>
                                                    <div class="card__content">
                                                        <div class="card__location"><?=$arElement['PREVIEW_TEXT']?>
                                                        </div>
                                                        <div class="card__list">
                                                            <div class="card__list-item card__list-item--sale">
                                                                <svg width="15" height="18" viewBox="0 0 15 18"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.2857
                                                                    6.18701H0V17.1861H14.2857V6.18701Z"
                                                                          fill="#7EC95C">
                                                                    </path>
                                                                    <path d="M9.28571 10.9991C9.28571 9.86003 8.32643
                                                                    8.9368 7.14286 8.9368C5.95929 8.9368 5 9.86003 5
                                                                    10.9991C5 11.9045 5.61 12.6655 6.45357
                                                                    12.9425C6.44571 12.9824 6.42857 13.0195 6.42857
                                                                    13.0614V14.4363C6.42857 14.8158 6.74857 15.1237
                                                                    7.14286 15.1237C7.53714 15.1237 7.85714 14.8158
                                                                    7.85714 14.4363V13.0614C7.85714 13.0195 7.84 12.9824
                                                                     7.83214 12.9425C8.67571 12.6655 9.28571 11.9045
                                                                     9.28571 10.9991Z"
                                                                            fill="#48AD19">
                                                                    </path>
                                                                    <path d="M3.57142 4.8121C3.57142 2.91682 5.17357
                                                                    1.37489 7.14285 1.37489C9.11214 1.37489 10.7143
                                                                    2.91682 10.7143
                                                                    4.8121V6.18699H12.1429V4.8121C12.1429 2.15857 9.9
                                                                    0 7.14285 0C4.38571 0 2.14285 2.15857 2.14285
                                                                    4.8121V6.18699H3.57142V4.8121Z"
                                                                            fill="#48AD19">
                                                                    </path>
                                                                </svg>
                                                                <span><?=$arElement['PROP']['SOLD']?> продано</span>
                                                            </div>
                                                            <div class="card__list-item card__list-item--reserved">
                                                                <svg width="15" height="16" viewBox="0 0 15 16"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.79217 7.97784H6.49347C4.13439 7.13415
                                                                    2.59738 5.15529 2.59738
                                                                    2.961V1.01001H11.6883V2.961C11.6883 5.15529
                                                                    10.1513 7.13415 7.79217 7.97784Z"
                                                                            fill="#7EC95C">
                                                                    </path>
                                                                    <path d="M6.49347 7.97708H7.79217C10.1513 8.82078
                                                                    11.6883 10.7997 11.6883
                                                                    12.994V14.945H2.59738V12.994C2.59738 10.7997
                                                                    4.13439 8.82078 6.49347 7.97708Z"
                                                                            fill="#7EC95C">
                                                                    </path>
                                                                    <path d="M0.649351
                                                                    1.59015H1.2987H2.5974H13.6364C13.9955
                                                                    1.59015 14.2857 1.32995 14.2857 1.00935C14.2857
                                                                    0.688755 13.9955 0.428558 13.6364
                                                                    0.428558H2.5974H1.2987H0.649351C0.29026 0.428558 0
                                                                    0.688755 0 1.00935C0 1.32995 0.29026 1.59015
                                                                    0.649351 1.59015Z"
                                                                            fill="#48AD19">
                                                                    </path>
                                                                    <path d="M13.6357 14.3632H1.9474C1.94545 14.3632
                                                                    1.9435 14.3644 1.94091 14.3644H0.64935C0.29026
                                                                    14.3644 0 14.6246 0 14.9452C0 15.2658 0.29026 15.526
                                                                    0.64935 15.526H2.5974C2.59935 15.526 2.6013 15.5248
                                                                    2.60389 15.5248H13.6357C13.9948 15.5248 14.2851
                                                                    15.2646 14.2851 14.944C14.2851 14.6234 13.9948
                                                                    14.3632 13.6357 14.3632Z"
                                                                            fill="#48AD19">
                                                                    </path>
                                                                </svg>
                                                                <span>
                                                                    <?=$arElement['PROP']['RESERVATION']?> забронировано
                                                                </span>
                                                            </div>
                                                            <div class="card__list-item card__list-item--access">
                                                                <svg width="15" height="15" viewBox="0 0 15 15"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="7.14286" cy="7.85715" r="7.14286"
                                                                            fill="#7EC95C"></circle>
                                                                    <path d="M7.60502
                                                                    3.57144H6.59663V11.0232H7.60502V3.57144Z"
                                                                          fill="#48AD19"></path>
                                                                    <path d="M7.10084 11.4889L3.57144 8.41172L4.31564
                                                                     7.76297L7.10084 10.1914L9.88604 7.76297L10.6302
                                                                     8.41172L7.10084 11.4889Z"
                                                                            fill="#48AD19">
                                                                    </path>
                                                                </svg>
                                                                <span>
                                                                    <?=$arElement['PROP']['AVAILABLE']?> доступно
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card__footer">
                                                        <div class="card__spot">
                                                            Участки от <?=$arElement['PROP']['MIN_SQUARE']?> до
                                                            <?=$arElement['PROP']['MAX_SQUARE']?> соток
                                                        </div>
                                                        <div class="card__button">
                                                            <div class="arrow-link arrow-link--right">
                                                                <div class="arrow-link__border">
                                                                    <svg viewBox="0 0 26 49" fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1.5 2C13.9264 2 24 12.0736 24 24.5C24
                                                                        30.524 21.6326 35.9951 17.7775 40.0337C16.8686
                                                                        40.9858 15.8771 41.8582 14.8145 42.6395C11.0863
                                                                        45.3806 6.48226 47 1.5 47"
                                                                        stroke="#6BBD45" stroke-width="3"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <svg class="arrow-link__arrow" width="19" height="15"
                                                                     viewBox="0 0 19 15" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M18.2071 8.20711C18.5976 7.81658 18.5976
                                                                    7.18342 18.2071 6.79289L11.8431 0.428932C11.4526
                                                                    0.0384078 10.8195 0.0384078 10.4289 0.428932C10.0384
                                                                     0.819457 10.0384 1.45262 10.4289 1.84315L16.0858
                                                                     7.5L10.4289 13.1569C10.0384 13.5474 10.0384 14.1805
                                                                      10.4289 14.5711C10.8195 14.9616 11.4526 14.9616
                                                                      11.8431 14.5711L18.2071 8.20711ZM0.5 8.5L17.5
                                                                      8.5V6.5L0.5 6.5L0.5 8.5Z"
                                                                            fill="#6BBD45 ">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        <? } else { ?>
                                            <div class="glide__slide"><a class="card card--overlay"
                                                                         href="<?=$arElement['DETAIL_PAGE_URL']?>">
                                                    <div class="card__image"
                                                         style="background-image: url(
                                                         <?=
                                                            $arElement['PREVIEW_PICTURE']['SRC']
                                                            ?>)">
                                                        <div class="card__logo-inner">
                                                            <div class="card__logo"
                                                                 style="background-image: url(
                                                                 <?=
                                                                    CFile::GetPath($arProperties['LOGO']['VALUE'])
                                                                    ?>)">
                                                            </div>
                                                        </div>
                                                        <div class="card__name"><?=$arElement['NAME']?></div>
                                                    </div>
                                                    <div class="card__content">
                                                        <div class="card__location">
                                                            <?=$arElement['PREVIEW_TEXT']?>
                                                        </div>
                                                        <div class="card__list">
                                                            <div class="card__list-item card__list-item--sale">
                                                                <svg width="15" height="18" viewBox="0 0 15 18"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M14.2857
                                                                    6.18701H0V17.1861H14.2857V6.18701Z"
                                                                          fill="#7EC95C"></path>
                                                                    <path d="M9.28571 10.9991C9.28571 9.86003 8.32643
                                                                    8.9368 7.14286 8.9368C5.95929 8.9368 5 9.86003 5
                                                                    10.9991C5 11.9045 5.61 12.6655 6.45357
                                                                    12.9425C6.44571 12.9824 6.42857 13.0195 6.42857
                                                                    13.0614V14.4363C6.42857 14.8158 6.74857 15.1237
                                                                    7.14286 15.1237C7.53714 15.1237 7.85714 14.8158
                                                                    7.85714 14.4363V13.0614C7.85714 13.0195 7.84
                                                                    12.9824 7.83214 12.9425C8.67571 12.6655 9.28571
                                                                    11.9045 9.28571 10.9991Z"
                                                                            fill="#48AD19">
                                                                    </path>
                                                                    <path d="M3.57142 4.8121C3.57142 2.91682 5.17357
                                                                    1.37489 7.14285 1.37489C9.11214 1.37489 10.7143
                                                                    2.91682 10.7143
                                                                    4.8121V6.18699H12.1429V4.8121C12.1429 2.15857
                                                                    9.9 0 7.14285 0C4.38571 0 2.14285 2.15857 2.14285
                                                                    4.8121V6.18699H3.57142V4.8121Z"
                                                                            fill="#48AD19">
                                                                    </path>
                                                                </svg>
                                                                <span>
                                                                    <?=$arElement['PROP']['SOLD']?> продано</span>
                                                            </div>
                                                            <div class="card__list-item card__list-item--reserved">
                                                                <svg width="15" height="16" viewBox="0 0 15 16"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M7.79217 7.97784H6.49347C4.13439 7.13415
                                                                    2.59738 5.15529 2.59738
                                                                    2.961V1.01001H11.6883V2.961C11.6883 5.15529 10.1513
                                                                    7.13415 7.79217 7.97784Z"
                                                                            fill="#7EC95C">
                                                                    </path>
                                                                    <path d="M6.49347 7.97708H7.79217C10.1513 8.82078
                                                                    11.6883 10.7997 11.6883
                                                                    12.994V14.945H2.59738V12.994C2.59738 10.7997 4.13439
                                                                     8.82078 6.49347 7.97708Z"
                                                                            fill="#7EC95C">
                                                                    </path>
                                                                    <path d="M0.649351
                                                                    1.59015H1.2987H2.5974H13.6364C13.9955 1.59015
                                                                    14.2857 1.32995 14.2857 1.00935C14.2857 0.688755
                                                                    13.9955 0.428558 13.6364
                                                                    0.428558H2.5974H1.2987H0.649351C0.29026 0.428558 0
                                                                    0.688755 0 1.00935C0 1.32995 0.29026 1.59015
                                                                    0.649351 1.59015Z"
                                                                            fill="#48AD19">
                                                                    </path>
                                                                    <path d="M13.6357 14.3632H1.9474C1.94545 14.3632
                                                                    1.9435 14.3644 1.94091 14.3644H0.64935C0.29026
                                                                    14.3644 0 14.6246 0 14.9452C0 15.2658 0.29026 15.526
                                                                    0.64935 15.526H2.5974C2.59935 15.526 2.6013 15.5248
                                                                    2.60389 15.5248H13.6357C13.9948 15.5248 14.2851
                                                                    15.2646 14.2851 14.944C14.2851 14.6234 13.9948
                                                                    14.3632 13.6357 14.3632Z"
                                                                           fill="#48AD19">
                                                                    </path>
                                                                </svg>
                                                                <span>0 забронировано</span></div>
                                                            <div class="card__list-item card__list-item--access">
                                                                <svg width="15" height="15" viewBox="0 0 15 15"
                                                                     fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="7.14286" cy="7.85715" r="7.14286"
                                                                            fill="#7EC95C"></circle>
                                                                    <path d="M7.60502
                                                                    3.57144H6.59663V11.0232H7.60502V3.57144Z"
                                                                          fill="#48AD19"></path>
                                                                    <path d="M7.10084 11.4889L3.57144 8.41172L4.31564
                                                                    7.76297L7.10084 10.1914L9.88604 7.76297L10.6302
                                                                    8.41172L7.10084 11.4889Z"
                                                                            fill="#48AD19">
                                                                    </path>
                                                                </svg>
                                                                <span>0 доступно</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="card__footer">
                                                        <div class="card__spot">Продано</div>
                                                        <div class="card__button">
                                                            <div class="arrow-link arrow-link--right">
                                                                <div class="arrow-link__border">
                                                                    <svg viewBox="0 0 26 49" fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M1.5 2C13.9264 2 24 12.0736 24 24.5C24
                                                                        30.524 21.6326 35.9951 17.7775 40.0337C16.8686
                                                                        40.9858 15.8771 41.8582 14.8145 42.6395C11.0863
                                                                        45.3806 6.48226 47 1.5 47"
                                                                                stroke="#6BBD45" stroke-width="3"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <svg class="arrow-link__arrow" width="19" height="15"
                                                                     viewBox="0 0 19 15" fill="none"
                                                                     xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M18.2071 8.20711C18.5976 7.81658 18.5976
                                                                    7.18342 18.2071 6.79289L11.8431 0.428932C11.4526
                                                                    0.0384078 10.8195 0.0384078 10.4289 0.428932C10.0384
                                                                     0.819457 10.0384 1.45262 10.4289 1.84315L16.0858
                                                                     7.5L10.4289 13.1569C10.0384 13.5474 10.0384 14.1805
                                                                      10.4289 14.5711C10.8195 14.9616 11.4526 14.9616
                                                                      11.8431 14.5711L18.2071 8.20711ZM0.5 8.5L17.5
                                                                      8.5V6.5L0.5 6.5L0.5 8.5Z"
                                                                            fill="#6BBD45 ">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        <?}
                                    } ?>
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
                                            22.6066C13.1924 22.0208 13.1924 21.0711 12.6066 20.4853L4.12132 12L12.6066
                                            3.51472C13.1924 2.92893 13.1924 1.97919 12.6066 1.3934C12.0208 0.807611
                                            11.0711 0.807611 10.4853 1.3934L0.939341 10.9393ZM22 10.5L2 10.5V13.5L22
                                            13.5V10.5Z"
                                                    fill="#D1D1D1">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <?$iCount = count($arResult['ITEMS'])?>
                                <ul class="slider-controls__list glide__bullets" data-glide-el="controls[nav]">
                                    <? for ($iIndex = 0; $iIndex<=$iCount; $iIndex++) {?>
                                    <li class="glide__bullet" data-glide-dir="=<?=$iIndex?>"><?=$iIndex?></li>
                                    <? } ?>
                                </ul>
                                <div data-glide-el="controls">
                                    <div class="slider-controls__arrow glide__arrow" data-glide-dir="&gt;">
                                        <svg width="22" height="24" viewBox="0 0 22 24" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607
                                            10.9393L11.5147 1.3934C10.9289 0.807611 9.97919 0.807611 9.3934
                                            1.3934C8.80761 1.97919 8.80761 2.92893 9.3934 3.51472L17.8787 12L9.3934
                                            20.4853C8.80761 21.0711 8.80761 22.0208 9.3934 22.6066C9.97919 23.1924
                                            10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0 13.5L20 13.5V10.5L0
                                            10.5L0 13.5Z"
                                                    fill="#D1D1D1">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs__content js-tabs__content" data-tab-content="map">
                    <div class="map-villages js-map-villages">
                        <div class="map-villages__ya" id="map-villages__ya"></div>
                        <a class="map-villages__link link-blue"
                           href="<?=$oOption['mapVillagesLink']?>">Подобрать участок</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mt-medium mb-medium">
    <div class="container-large">
        <div>
            <div class="form-wide-wrapper form-wide-wrapper--wood">
                <div class="container">
                    <div class="form-wide">
                        <div class="form-wide__left-line"></div>
                        <div class="form-wide__text">
                            <div class="form-wide__title"><?=$oOption['sectionHeaderA']?></div>
                        </div>
                        <form class="form-wide__grid filter-slider" action="/ceni-na-zemelnie-uchastki/" method="GET">
                            <div class="form-wide__grid-item">
                                <div class="filter-slider__slider-name">Стоимость</div>
                                <div class="input-slider js-input-slider"
                                     data-min="<?=$aFilter['MIN_COST']?>"
                                     data-max="<?=$aFilter['MAX_COST']?>"
                                     data-labels="[&quot;₽&quot;,&quot;₽&quot;,&quot;₽&quot;]">
                                    <input class="input-slider__input" type="hidden" name="cost"/>
                                    <div class="input-slider__slider"></div>
                                    <div class="input-slider__results">
                                        <div class="filter-slider__result"></div>
                                        <div class="filter-slider__result"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-wide__grid-item">
                                <div class="filter-slider__slider-name">Размер участка</div>
                                <div class="input-slider js-input-slider" data-min="<?=$aFilter['MIN_AREA']?>"
                                     data-max="<?=$aFilter['MAX_AREA']?>"
                                     data-labels="[&quot;сотка&quot;,&quot;сотки&quot;,&quot;соток&quot;]"><input
                                            class="input-slider__input" type="hidden" name="area"/>
                                    <div class="input-slider__slider"></div>
                                    <div class="input-slider__results">
                                        <div class="filter-slider__result"></div>
                                        <div class="filter-slider__result"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-wide__grid-item">
                                <button class="button button--primary" type="submit">
                                    <span>Подобрать участок</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/_inc/company.php'; ?>
<section class="section mt-medium mb-medium">
    <div class="container">
        <div class="section-header"><?=$oOption['sectionHeaderB']?></div>
        <div class="tabs js-tabs">
            <? require_once $_SERVER['DOCUMENT_ROOT'] . '/_inc/left-block.menu.php'; ?>
            <div class="tabs__contents">
                <div class="tabs__content js-tabs__content active" data-tab-content="1">
                    <div class="work-stage-container">
                        <?foreach ($arResult['StepsBuyers'] as $arKey => $arElement) {?>
                        <div class="work-stage">
                            <div class="work-stage__index"><?=$arKey+1?></div>
                            <div class="work-stage__header">
                                <div class="work-stage__icon">
                                    <img src="<?=CFile::GetPath($arElement['PROPERTIES']['LOGO']['VALUE'])?>"/>
                                </div>
                                <div class="work-stage__line"></div>
                            </div>
                            <div class="work-stage__text">
                                <div class="work-stage__title">
                                    <?=$arElement['NAME']?>
                                </div>
                                <div class="work-stage__description">
                                    <?=$arElement['PREVIEW_TEXT']?>
                                </div>
                            </div>
                        </div>
                        <? } ?>
                    </div>
                </div>
                <div class="tabs__content js-tabs__content" data-tab-content="2">
                    <div class="work-stage-container">
                        <?foreach ($arResult['Rassrochka'] as $arElement) {?>
                        <div class="work-stage">
                            <div class="work-stage__header">
                                <div class="work-stage__icon">
                                    <img src="<?=CFile::GetPath($arElement['PROPERTIES']['ICON']['VALUE'])?>"/>
                                </div>
                            </div>
                            <div class="work-stage__text">
                                <div class="work-stage__title">
                                    <?=$arElement['NAME']?>
                                </div>
                                <div class="work-stage__description">
                                    <?=$arElement['PREVIEW_TEXT']?>
                                </div>
                            </div>
                        </div>
                        <? } ?>
                    </div>
                    <div class="tabs__links">
                        <a class="tabs__link link-blue" href="#" target="_blank">Подробнее о рассрочке</a>
                    </div>
                </div>
                <div class="tabs__content js-tabs__content" data-tab-content="3">
                    <div class="work-stage-container">
                        <?foreach ($arResult['Ipoteka'] as $arElement) {?>
                        <div class="work-stage">
                            <div class="work-stage__header">
                                <div class="work-stage__icon">
                                    <img src="<?=CFile::GetPath($arElement['PROPERTIES']['ICON']['VALUE'])?>"/>
                                </div>
                            </div>
                            <div class="work-stage__text">
                                <div class="work-stage__title">
                                    <?=$arElement['NAME']?>
                                </div>
                                <div class="work-stage__description">
                                    <?=$arElement['PREVIEW_TEXT']?>
                                </div>
                            </div>
                        </div>
                        <? }?>
                    </div>
                    <div class="tabs__links">
                        <a class="tabs__link link-blue" href="<?=$oOption['gridUnitSliderLink']?>"
                           target="_blank">Подробнее об ипотеке</a>
                        <a class="tabs__link link-blue" href="/buyer/ipoteka/#calc"
                           target="_blank">Калькулятор расчета ипотеки</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mt-medium mb-medium">
    <div>
        <div class="form-wide-wrapper form-wide-wrapper--wood">
            <div class="container">
                <div class="form-wide">
                    <div class="form-wide__left-line"></div>
                    <div class="form-wide__text form-wide__text--horizontal-md">
                        <div class="form-wide__title">Запишитесь на&nbsp;просмотр</div>
                        <div class="form-wide__description">Эксперт по недвижимости быстро подберет вам
                            подходящий вариант земельного участка. А еще проведёт вам экскурсию
                            по счастливой загородной жизни.
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
                                    <div class="checkbox__text">Подтверждаю согласие с<a class="checkbox__link"
                                                                                         href="#" target="_blank">
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
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/_inc/whySelectedVillage.php'; ?>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/_inc/line-unit.php'; ?>
<section class="section section--overflow-hidden pb-large">
    <div class="container">
        <div class="section-header">А что у нас нового?</div>
        <div class="tabs js-tabs">
            <? require_once $_SERVER['DOCUMENT_ROOT'].'/_inc/left-news.menu.php'; ?>
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
