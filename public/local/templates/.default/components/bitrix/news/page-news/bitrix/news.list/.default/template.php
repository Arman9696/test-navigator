<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
?>

<div class="grid-news grid-news--top">
<? foreach ($arResult["ITEMS"] as $items =>$k) {?>
    <? if ($items <= 1) { ?>
        <div class="grid-news__item grid-news__item--half"><a class="news-card" href="<?=$k['DETAIL_PAGE_URL']?>">
                <div class="news-card__image news-card__image--grid-half"><img src="http://placehold.it/500x250/ffa"
                                                                               alt="С Днем Рождения!"/></div>
                <div class="news-card__content">
                    <div class="news-card__title">
                        <?= $k['NAME'] ?>
                    </div>
                    <div class="news-card__text">
                        <?= $k['PREVIEW_TEXT'] ?>
                    </div>
                    <div class="news-card__wrapper">
                        <div class="news-card__link">Читать далее</div>
                        <span class="news-card__date">4.03.2019</span></div>
                </div>
            </a></div>


    <?}

    if ($items > 1){ ?>
        <div class="grid-news__item"><a class="news-card" href="<?=$k['DETAIL_PAGE_URL']?>">
            <div class="news-card__image news-card__image--grid-half"><img src="http://placehold.it/500x250/ffa"
                                                                           alt="С Днем Рождения!"/></div>
            <div class="news-card__content">
                <div class="news-card__title"><?= $k['NAME'] ?></div>
                <div class="news-card__text"><?= $k['PREVIEW_TEXT'] ?>
                </div>
                <div class="news-card__wrapper">
                    <div class="news-card__link">Читать далее</div>
                    <span class="news-card__date">4.03.2019</span></div>
            </div>
        </a></div>

    <?} }?>
</div>
<?=$arResult["NAV_STRING"];?>


