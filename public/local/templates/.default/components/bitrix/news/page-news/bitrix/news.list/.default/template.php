<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
?>
<?
require_once $_SERVER['DOCUMENT_ROOT'] .'/_inc/menu.php';
?>
<section class="section mb-large">
    <div class="container">
<div class="grid-news grid-news--top">
<? foreach ($arResult["ITEMS"] as $arItems => $arKey) {?>
    <? if ($arItems <= 1) { ?>
        <div class="grid-news__item grid-news__item--half"><a class="news-card" href="<?=$arKey['DETAIL_PAGE_URL']?>">
                <div class="news-card__image news-card__image--grid-half">
                    <?if ($arKey["PREVIEW_PICTURE"]["SRC"]==null || $arKey["PREVIEW_PICTURE"]["SRC"] == "") { ?>
                    <img src="http://placehold.it/500x250/ffa" alt="С Днем Рождения!"/>
                </div>
                    <? } else { ?>
                    <img src="<?=$arKey["PREVIEW_PICTURE"]["SRC"]?>"
                         alt="С Днем Рождения!"/>
                </div>
                    <? } ?>
                <div class="news-card__content">
                    <div class="news-card__title">
                        <?=$arKey['NAME'] ?>
                    </div>
                    <div class="news-card__text">
                        <?=$arKey['PREVIEW_TEXT'] ?>
                    </div>
                    <div class="news-card__wrapper">
                        <div class="news-card__link">Читать далее</div>
                        <span class="news-card__date">4.03.2019</span></div>
                </div>
            </a></div>
    <?}
    if ($arItems > 1) { ?>
        <div class="grid-news__item"><a class="news-card" href="<?=$arKey['DETAIL_PAGE_URL']?>">
            <div class="news-card__image news-card__image--grid-half">
                <?if ($arKey["PREVIEW_PICTURE"]["SRC"]==null || $arKey["PREVIEW_PICTURE"]["SRC"] == "") {?>
                <img src="http://placehold.it/500x250/ffa" alt="С Днем Рождения!"/>
            </div>
                <? } else { ?>
                <img src="<?=$arKey["PREVIEW_PICTURE"]["SRC"]?>"
                     alt="С Днем Рождения!"/>
            </div>
                <? } ?>
            <div class="news-card__content">
                <div class="news-card__title"><?= $arKey['NAME'] ?></div>
                <div class="news-card__text"><?= $arKey['PREVIEW_TEXT']?>
                </div>
                <div class="news-card__wrapper">
                    <div class="news-card__link">Читать далее</div>
                    <span class="news-card__date">4.03.2019</span></div>
            </div>
        </a>
    </div><?
    }
} ?>

</div>
        <?=$arResult["NAV_STRING"];?>
    </div>
</section>
