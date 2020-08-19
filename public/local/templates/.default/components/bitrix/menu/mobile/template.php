<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<? if (!empty($arResult)) { ?>
    <div class="navigation-mobile__item-wrapper">

    <?$previousLevel = 0;
    foreach ($arResult as $arItem) { ?>
        <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel) { ?>
            </div>
        <? } ?>

        <? if ($arItem["IS_PARENT"]) { ?>
            <div class="navigation-mobile__item js-navigation-trigger">
                <span class="navigation-mobile__page"><?=$arItem["TEXT"]?>
                    <div class="navigation-mobile__arrow">
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.83333 0.166626L10 1.33329L5
                             6.33329L-5.09966e-08 1.33329L1.16667 0.166626L5 3.99996L8.83333 0.166626Z" fill="#675A54">
                            </path>
                        </svg>
                    </div>
                </span>
            </div>
            <div class="navigation-mobile__dropdown js-navigation-dropdown">
        <? } else { ?>
            <? if ($arItem["DEPTH_LEVEL"] == 1) { ?>
            <a class="navigation-mobile__item" href="<?=$arItem["LINK"]?>">
                <span class="navigation-mobile__page"><?=$arItem["TEXT"]?></span></a>
            <? } else { ?>
            <a class="navigation-mobile__subpage" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            <? } ?>
        <? } ?>

        <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>
    <? } ?>

    <? if ($previousLevel > 1) { ?>
        </div>
    <? } ?>

    </div>
<? } ?>
