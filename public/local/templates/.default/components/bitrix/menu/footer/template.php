<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<? if (!empty($arResult)) { ?>
    <div class="footer__navigation">

    <?$previousLevel = 0;
    foreach ($arResult as $arItem) { ?>
        <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) { ?>
            </div>
                </div>
        <? } ?>

        <? if ($arItem["IS_PARENT"]) { ?>
            <div class="footer__navigation-item">
                <span><?=$arItem["TEXT"]?></span>
            <div class="footer__navigation-subitems">

        <? } else { ?>
            <? if ($arItem["DEPTH_LEVEL"] > 1) { ?>
                <a class="footer__navigation-subitem" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            <? } else { ?>
                <a class="footer__navigation-item" href="#"><span><?=$arItem["TEXT"]?></span></a>
            <? } ?>
        <? } ?>

        <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

    <? } ?>


    </div>

<? } ?>
