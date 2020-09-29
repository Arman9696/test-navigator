<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>

<?if (!empty($arResult)) { ?>
    <div class="tabs-navigation js-tabs-navigation">
        <div class="tabs-navigation__active"></div>
        <? foreach ($arResult as $arItem) { ?>
            <?if ($arParams["MAX_LEVEL"] == 1) { ?>
                <?if ($arItem["SELECTED"]) { ?>
                    <div class="tabs-navigation__item active" data-tab="<?=$arItem["PARAMS"][0]["tabs"]?>">
                        <?=$arItem["TEXT"]?></div>
                <? } else { ?>
                    <div class="tabs-navigation__item" data-tab="<?=$arItem["PARAMS"][0]["tabs"]?>">
                        <?=$arItem["TEXT"]?></div>
                <?}?>
            <?} ?>

        <?} ?>
<?} ?>
    </div>
