<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
?>
<?
require_once $_SERVER['DOCUMENT_ROOT'] .'/_inc/buyer_menu.php';
?>
<section class="section mt-medium mb-large">
    <div class="container"><h1 class="section-header">Купить земельный участок под Тюменью - просто!</h1>
        <div class="work-stage-container">
            <?foreach ($arResult['ITEMS'] as $arKey => $arElement) {?>
            <div class="work-stage">
                <div class="work-stage__index"><?=$arKey+1?></div>
                <div class="work-stage__header">
                    <div class="work-stage__icon">
                        <img src="<?=CFile::GetPath($arElement['PROPERTIES']['ICON']['VALUE'])?>"/>
                    </div>
                    <div class="work-stage__line"></div>
                </div>
                <div class="work-stage__text">
                    <div class="work-stage__title"><?=$arElement['NAME']?></div>
                    <? if ($arElement['PROPERTIES']['TEXT']['VALUE'] == "") {?>
                    <div class="work-stage__description">
                        <?=$arElement['PREVIEW_TEXT']?>
                        <div class="js-modal-trigger" data-modal-id="callback">
                            <?=$arElement['PROPERTIES']['MODAL']['VALUE']?>
                        </div>
                    </div>
                    <?} else {?>
                        <div class="work-stage__description">
                            <?=$arElement['PROPERTIES']['TEXT']['VALUE']?>
                            <div class="js-modal-trigger" data-modal-id="callback">
                                <?=$arElement['PROPERTIES']['MODAL']['VALUE']?></div>
                            <?=$arElement['PREVIEW_TEXT']?>
                        </div>
                    <?}?>
                </div>
            </div>
            <? }?>
        </div>
    </div>
</section>