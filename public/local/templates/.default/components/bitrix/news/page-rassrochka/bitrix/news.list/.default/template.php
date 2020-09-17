<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<?
require_once $_SERVER['DOCUMENT_ROOT'] .'/_inc/buyer_menu.php';
$options = IQDEV\Options\Options::getPageOptions('buyer_rassrochka');

?>

<section class="section mt-medium mb-medium">
    <div class="container">
        <div class="separate-paragraph">
            <div class="separate-paragraph__title">
                <h1><?=$options['separateParagraphTitle']?></h1>
            </div>
            <div class="separate-paragraph__divider"></div>
            <div class="separate-paragraph__text-wrapper">
                <div class="separate-paragraph__text">
                    <?=$options['separateParagraphText']?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mb-medium">
    <div class="container">
        <div class="work-stage-container">
            <? foreach ($arResult['ITEMS'] as $arElement) {?>
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
    </div>
</section>
<section class="section section--overflow-hidden mt-medium mb-large">
    <div class="container">
        <div class="section-header"><?=$options['sectionHeader']?></div>
        <div class="grid-unit">
            <div class="grid-unit__inner">
                <div class="grid-unit__item grid-unit__item--banner grid-unit__item--col2">
                    <div class="grid-card grid-card--xs-border-radius">
                        <div class="grid-card__text">
                            <?=$options['cardLargeText']?>
                        </div>
                        <div class="grid-card__image-wrapper">
                            <img src="<?=$options['cardLargeImage']?>"/>
                        </div>
                    </div>
                </div>
                <? foreach ($arResult['rassrochka'] as $arKey => $arElement) {?>
                <div class="grid-unit__item">
                    <div class="card-color card-color--<?=$arElement['PROPERTIES']['COLOR']['VALUE']?>">
                        <div class="card-color__text card-color__text--grow">
                            <?=$arElement['NAME']?>
                        </div>
                        <?if ($arElement['PREVIEW_TEXT'] != "") {?>
                        <div class="card-color__subcontent">
                            <div class="circle-percent circle-percent--background-dark-blue">
                                <?=$arElement['PREVIEW_TEXT']?>
                            </div>
                        </div>
                        <? } ?>
                    </div>
                </div>
                <? }?>
                <div class="grid-unit__item grid-unit__item--col2">
                    <div class="card-color card-color--border card-color--center">
                        <div class="card-color__grid">
                            <div><?=$options['grid']?></div>
                            <div class="card-color__button js-modal-trigger" data-modal-id="consultation">
                                <div class="button button--primary">
                                    <span><?=$options['grid_button']?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Контент дублируется для мобильного слайдера-->
                <div class="grid-unit-mobile-slider grid-unit-mobile-slider--offset-top js-grid-unit-mobile-slider">
                    <div class="grid-unit-mobile-slider__track" data-glide-el="track">
                        <div class="grid-unit-mobile-slider__carousel">
                            <? foreach ($arResult['rassrochka'] as $arKey => $arElement) {?>
                            <div class="grid-unit__mobile-item">
                                <div class="card-color card-color--gray">
                                    <div class="card-color__text card-color__text--grow">
                                        <?=$arElement['NAME']?>
                                    </div>
                                    <?if ($arElement['PREVIEW_TEXT'] != "") {?>
                                        <div class="card-color__subcontent">
                                            <div class="circle-percent circle-percent--background-dark-blue">
                                                <?=$arElement['PREVIEW_TEXT']?>
                                            </div>
                                        </div>
                                    <? } ?>
                                </div>
                            </div>
                            <? }?>
                            <div class="grid-unit__mobile-item">
                                <div class="card-color card-color--border card-color--center">
                                    <div class="card-color__grid">
                                        <div><?=$options['grid']?></div>
                                        <div class="card-color__button js-modal-trigger" data-modal-id="consultation">
                                            <div class="button button--primary">
                                                <span><?=$options['grid_button']?></span>
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
    </div>
</section>
