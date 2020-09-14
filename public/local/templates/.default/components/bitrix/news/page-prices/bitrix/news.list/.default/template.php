<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
?>
<? require_once $_SERVER['DOCUMENT_ROOT'] .'/_inc/buyer_menu.php'; ?>
<?$sToDay = date('d.m.Y');?>
<?$oOptions = IQDEV\Options\Options::getPageOptions('buyer_prices');?>
<section class="section mt-medium mb-medium">
    <div class="container"><h1 class="section-header"><?=$oOptions['sectionHeaderA']?></h1>
        <div class="price-list">
            <div class="price-list__accordion">
                <div class="accordion-container js-accordion">
                    <?foreach ($arResult['ITEMS'] as $arKey => $arElement) {?>
                        <?$aProperties = $arElement['PROP']?>
                        <? if ($arKey == 0) {?>
                            <div class="accordion accordion--active">
                                <div class="accordion__header">
                                    <div class="accordion__header-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9"
                                             fill="none">
                                            <path d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261
                                            4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698
                                            7.98671C8.74172 7.79144 8.74172 7.47486 8.93698 7.2796L11.7654
                                            4.45117L8.93698 1.62274C8.74172 1.42748 8.74172 1.1109 8.93698
                                            0.915638C9.13224 0.720376 9.44882 0.720376 9.64409 0.915638L12.8261
                                            4.09762ZM0.0518303 3.95117H12.4725V4.95117H0.0518303V3.95117Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="accordion__header-text accordion__header-text--grid">
                                        <div class="accordion__header-text-primary"><?=$arElement['NAME']?></div>
                                        <div class="accordion__header-text-secondary
                                        accordion__header-text-secondary--bold">
                                            от <?=$aProperties['MIN_PRICE']?> до <?=$aProperties['MAX_PRICE']?> ₽
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__body">
                                    <div class="price-list__information">
                                        <div class="price-list__text">В поселке <?=$arElement['NAME']?> представлены
                                            участки
                                        </div>
                                        <div class="price-list__value">
                                            <?='от '.$aProperties['MIN_SQUARE'].' до '.$aProperties['MAX_SQUARE'].' соток'?>
                                        </div>
                                    </div>
                                    <div class="price-list__information">
                                        <div class="price-list__text">
                                            <?='Минимальная стоимость 1 сотки на '.$sToDay?>
                                        </div>
                                        <div class="price-list__value"><?=$aProperties['MIN_PRICE_TODAY']?> ₽</div>
                                    </div>
                                    <div class="price-list__summary">
                                        <div class="list-icon">
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img"
                                                         src="
                                                         <?=CFile::GetPath($aProperties['SOLD']['VALUE']) ?>
                                                            "/>
                                                </div>
                                                <div class="list-icon__text"><?=$aProperties['SOLD']?> продано</div>
                                            </div>
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img"
                                                         src="
                                                     <?=
                                                        CFile::GetPath($aProperties['RESERVATION']['VALUE'])
                                                        ?>"/>
                                                </div>
                                                <div class="list-icon__text">
                                                    <?=$aProperties['RESERVATION']?> забронировано
                                                </div>
                                            </div>
                                            <div class="list-icon__item">
                                                <div class="list-icon__icon">
                                                    <img class="img"
                                                       src="
                                                       <?=
                                                        CFile::GetPath($aProperties['AVAILABLE']['VALUE'])
                                                        ?>"/>
                                                </div>
                                                <div class="list-icon__text">
                                                    <?=$aProperties['AVAILABLE']?> доступно
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                        <? if ($arKey >=1) {?>
                            <? if ($arKey % 2 != 0) {?>
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
                            <div class="accordion__header-text accordion__header-text--grid">
                                <div class="accordion__header-text-primary"><?=$arElement['NAME']?></div>
                                <div class="accordion__header-text-secondary accordion__header-text-secondary--bold">от
                                    <?=$aProperties['MIN_PRICE']?> до <?=$aProperties['MAX_PRICE']?> ₽
                                </div>
                            </div>
                        </div>
                        <div class="accordion__body" style="display: none">
                            <div class="price-list__information">
                                <div class="price-list__text">В поселке <?=$arElement['NAME']?> представлены
                                    участки
                                </div>
                                <div class="price-list__value">
                                    <?='от '.$aProperties['MIN_SQUARE'].' до '.$aProperties['MAX_SQUARE'].' соток'?>
                                </div>
                            </div>
                            <div class="price-list__information">
                                <div class="price-list__text"><?='Минимальная стоимость 1 сотки на '.$sToDay?></div>
                                <div class="price-list__value"><?=$aProperties['MIN_PRICE_TODAY']?> ₽</div>
                            </div>
                            <div class="price-list__summary">
                                <div class="list-icon">
                                    <div class="list-icon__item">
                                        <div class="list-icon__icon">
                                            <img class="img"
                                                 src="
                                                         <?=CFile::GetPath($aProperties['SOLD']['VALUE']) ?>
                                                            "/>
                                        </div>
                                        <div class="list-icon__text"><?=$aProperties['SOLD']?> продано</div>
                                    </div>
                                    <div class="list-icon__item">
                                        <div class="list-icon__icon">
                                            <img class="img"
                                                 src="
                                                     <?=
                                                 CFile::GetPath($aProperties['RESERVATION']['VALUE'])
                                                 ?>"/>
                                        </div>
                                        <div class="list-icon__text">
                                            <?=$aProperties['RESERVATION']?> забронировано
                                        </div>
                                    </div>
                                    <div class="list-icon__item">
                                        <div class="list-icon__icon">
                                            <img class="img"
                                                 src="
                                                       <?=
                                                 CFile::GetPath($aProperties['AVAILABLE']['VALUE'])
                                                 ?>"/>
                                        </div>
                                        <div class="list-icon__text">
                                            <?=$aProperties['AVAILABLE']?> доступно
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <? } else {?>
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
                            <div class="accordion__header-text accordion__header-text--grid">
                                <div class="accordion__header-text-primary"><?=$arElement['NAME']?></div>
                                <div class="accordion__header-text-secondary accordion__header-text-secondary--bold">от
                                    <?=$aProperties['MIN_PRICE']?> до <?=$aProperties['MAX_PRICE']?> ₽
                                </div>
                            </div>
                        </div>
                        <div class="accordion__body" style="display: none">
                            <div class="price-list__information">
                                <div class="price-list__text">В поселке <?=$arElement['NAME']?> представлены
                                    участки
                                </div>
                                <div class="price-list__value">
                                    <?='от '.$aProperties['MIN_SQUARE'].' до '.$aProperties['MAX_SQUARE'].' соток'?>
                                </div>
                            </div>
                            <div class="price-list__information">
                                <div class="price-list__text"><?='Минимальная стоимость 1 сотки на '.$sToDay?></div>
                                <div class="price-list__value"><?=$aProperties['MIN_PRICE_TODAY']?> ₽</div>
                            </div>
                            <div class="price-list__summary">
                                <div class="list-icon">
                                    <div class="list-icon__item">
                                        <div class="list-icon__icon">
                                            <img class="img"
                                                 src="
                                                         <?=CFile::GetPath($aProperties['SOLD']['VALUE']) ?>
                                                            "/>
                                        </div>
                                        <div class="list-icon__text"><?=$aProperties['SOLD']?> продано</div>
                                    </div>
                                    <div class="list-icon__item">
                                        <div class="list-icon__icon">
                                            <img class="img"
                                                 src="
                                                     <?=
                                                 CFile::GetPath($aProperties['RESERVATION']['VALUE'])
                                                 ?>"/>
                                        </div>
                                        <div class="list-icon__text">
                                            <?=$aProperties['RESERVATION']?> забронировано
                                        </div>
                                    </div>
                                    <div class="list-icon__item">
                                        <div class="list-icon__icon">
                                            <img class="img"
                                                 src="
                                                       <?=
                                                 CFile::GetPath($aProperties['AVAILABLE']['VALUE'])
                                                 ?>"/>
                                        </div>
                                        <div class="list-icon__text">
                                            <?=$aProperties['AVAILABLE']?> доступно
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            <? } ?>
                        <? } ?>
                    <? } ?>
                </div>
            </div>
            <div class="price-list__enumeration price-list__enumeration--gray">
                <div class="price-list__enumeration-title"><?=$arElement['PROPERTIES']['COMMUNICATIONS_TITLE']['VALUE']?></div>
                <ul class="price-list__list">
                    <?foreach ($arElement['PROPERTIES']['COMMUNICATIONS']['VALUE'] as $strItem) {?>
                        <li class="price-list__list-item">
                            <?=$strItem?>
                        </li>
                    <?}?>
                </ul>
                <div class="price-list__icon"><img src="../../assets/image/price-list/prices/1.svg"/></div>
            </div>
        </div>
    </div>
</section>
