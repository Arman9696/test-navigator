<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<section class="section mb-medium">
    <div class="container">
        <button class="button button--green-outlined button--w224 button--with-plus js-modal-trigger"
                data-modal-id="review"><span>Добавить отзыв</span></button>
    </div>
</section>
<section class="section mb-large">
    <div class="container">
        <div class="grid-news grid-news--top">
            <?foreach ($arResult['ITEMS'] as $arKey => $arElement) {?>
            <div class="grid-news__item">
                <div style="display: none">
                    <div class="modal-review js-modal-review" data-modal-open="review<?=$arKey?>">
                        <div class="modal-review__inner">
                            <div class="modal-review__photo"><img src="<?=$arElement['PREVIEW_PICTURE']['SRC']?>"/>
                            </div>
                            <div class="modal-review__content">
                                <div class="modal-review__content-title"><?=$arElement['NAME']?></div>
                                <div class="modal-review__content-location">коттеджный посёлок «Альпийская долина»</div>
                                <div class="modal-review__content-text">
                                    <?=$arElement['PREVIEW_TEXT']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="review-card">
                    <div class="review-card__header">
                        <div class="review-card__image"><img src="<?=$arElement['PREVIEW_PICTURE']['SRC']?>"
                                                             alt="Андрей"/></div>
                        <div class="review-card__title-wrapper">
                            <div class="review-card__title"><?=$arElement['NAME']?></div>
                            <div class="review-card__location">коттеджный посёлок «Альпийская долина»</div>
                        </div>
                    </div>
                    <div class="review-card__content">
                        <span class="review-card__text js-modal-trigger" data-modal-id="review<?=$arKey?>">
                           <?=$arElement['PREVIEW_TEXT']?>
                        </span>
                    </div>
                </div>
            </div>
            <?}?>
        </div>
        <?=$arResult["NAV_STRING"]?>
    </div>
</section>
