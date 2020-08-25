<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<?if (!empty($arResult)) { ?>
    <div class="tabs-navigation js-tabs-navigation-static">
        <div class="tabs-navigation__active"></div>
        <? foreach ($arResult as $arItem) { ?>
            <?if ($arParams["MAX_LEVEL"] == 1) { ?>
                <?if ($arItem["SELECTED"]) { ?>
                 <a class="tabs-navigation__item tabs-navigation__item--active" href="<?=$arItem["LINK"]?>">
                     <?=$arItem["TEXT"]?></a>
                <? } else { ?>
                    <a class="tabs-navigation__item" href="<?=$arItem["LINK"]?>">
                        <?=$arItem["TEXT"]?></a>
                <?}?>
            <?} ?>

        <?} ?>
<?} ?>
    </div>
