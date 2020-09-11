<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};
?>
<? require_once $_SERVER['DOCUMENT_ROOT'] . '/_inc/menu.php'; ?>
    <section class="section mb-large">
        <div class="container">
            <div class="job-page-title">«Навигатор» – молодая, энергичная, динамично развивающаяся компания. Cтроим
                новые
                коттеджные поселки, создаем инновационные проект для города,растем и развиваемся.
                Мы ищем лучших профессионалов в
                дружную компанию. И, поверьте, Вам у нас точно понравится!
            </div>
            <div class="accordion-container js-accordion">
                <? foreach ($arResult['ITEMS'] as $arKey => $arElement) { ?>
                    <? if ($arKey == 0) { ?>
                        <div class="accordion accordion--active">
                            <div class="accordion__header">
                                <div class="accordion__header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="9" viewBox="0 0 13 9"
                                         fill="none">
                                        <path d="M12.8261 4.09762C13.0213 4.29288 13.0213 4.60946 12.8261
                                        4.80473L9.64409 7.98671C9.44882 8.18197 9.13224 8.18197 8.93698 7.98671C8.74172
                                        7.79144 8.74172 7.47486 8.93698 7.2796L11.7654 4.45117L8.93698 1.62274C8.74172
                                        1.42748 8.74172 1.1109 8.93698 0.915638C9.13224 0.720376 9.44882 0.720376
                                        9.64409 0.915638L12.8261 4.09762ZM0.0518303
                                        3.95117H12.4725V4.95117H0.0518303V3.95117Z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="accordion__header-text">
                                    <div class="accordion__header-text-primary">
                                        <?= $arElement['NAME'] ?>
                                    </div>
                                    <div class="accordion__header-text-secondary">
                                        <?= $arElement['PROPERTIES']['PAY']['VALUE'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion__body">
                                <div class="job js-job" data-id="1">
                                    <div class="job__sections">
                                        <div class="job-section">
                                            <div class="job-section__title">
                                                <?= $arElement['PROPERTIES']['TREBOVANIA']['NAME'] ?>
                                            </div>
                                            <ul class="job-section__list">
                                                <? foreach ($arElement['PROPERTIES']['TREBOVANIA']
                                                            ['VALUE'] as $arProperty) { ?>
                                                    <li><?= $arProperty ?></li>
                                                <? } ?>
                                            </ul>
                                        </div>
                                        <div class="job-section">
                                            <div class="job-section__title">
                                                <?= $arElement['PROPERTIES']['TASKS']['NAME'] ?>
                                            </div>
                                            <ul class="job-section__list">
                                                <? foreach ($arElement['PROPERTIES']['TASKS']
                                                            ['VALUE'] as $arProperty) { ?>
                                                    <li><?= $arProperty ?></li>
                                                <? } ?>
                                            </ul>
                                        </div>
                                        <div class="job-section">
                                            <div class="job-section__title">
                                                <?= $arElement['PROPERTIES']['REQUIREMENT']['NAME'] ?>
                                            </div>
                                            <ul class="job-section__list">
                                                <? foreach ($arElement['PROPERTIES']['REQUIREMENT']
                                                            ['VALUE'] as $arProperty) { ?>
                                                    <li><?= $arProperty ?></li>
                                                <? } ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="job__footer">
                                        <div class="button button--primary button--auto-width">
                                            <span>Отправить резюме</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } else {
                        if ($arKey % 2 != 0) { ?>
                            <div class="accordion accordion--sand">
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
                                    <div class="accordion__header-text">
                                        <div class="accordion__header-text-primary">
                                            <?= $arElement['NAME'] ?>
                                        </div>
                                        <div class="accordion__header-text-secondary">
                                            <?= $arElement['PROPERTIES']['PAY']['VALUE'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__body" style="display: none">
                                    <div class="job js-job" data-id="2">
                                        <div class="job__sections">
                                            <div class="job-section">
                                                <div class="job-section__title">
                                                    <?= $arElement['PROPERTIES']['TREBOVANIA']['NAME'] ?>
                                                </div>
                                                <ul class="job-section__list">
                                                    <? foreach ($arElement['PROPERTIES']['TREBOVANIA']
                                                                ['VALUE'] as $arProperty) { ?>
                                                        <li><?= $arProperty ?></li>
                                                    <? } ?>
                                                </ul>
                                            </div>
                                            <div class="job-section">
                                                <div class="job-section__title">
                                                    <?= $arElement['PROPERTIES']['TASKS']['NAME'] ?>
                                                </div>
                                                <ul class="job-section__list">
                                                    <? foreach ($arElement['PROPERTIES']['TASKS']
                                                                ['VALUE'] as $arProperty) { ?>
                                                        <li><?= $arProperty ?></li>
                                                    <? } ?>
                                                </ul>
                                            </div>
                                            <div class="job-section">
                                                <div class="job-section__title">
                                                    <?= $arElement['PROPERTIES']['REQUIREMENT']['NAME'] ?>
                                                </div>
                                                <ul class="job-section__list">
                                                    <? foreach ($arElement['PROPERTIES']['REQUIREMENT']
                                                                ['VALUE'] as $arProperty) { ?>
                                                        <li><?= $arProperty ?></li>
                                                    <? } ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="job__footer">
                                            <div class="button button--primary button--auto-width">
                                                <span>Отправить резюме</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <? } elseif ($arKey % 2 == 0) { ?>
                            <div class="accordion">
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
                                    <div class="accordion__header-text">
                                        <div class="accordion__header-text-primary">
                                            <?= $arElement['NAME'] ?>
                                        </div>
                                        <div class="accordion__header-text-secondary">
                                            <?= $arElement['PROPERTIES']['PAY']['VALUE'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion__body" style="display: none">
                                    <div class="job js-job" data-id="2">
                                        <div class="job__sections">
                                            <div class="job-section">
                                                <div class="job-section__title">
                                                    <?= $arElement['PROPERTIES']['TREBOVANIA']['NAME'] ?>
                                                </div>
                                                <ul class="job-section__list">
                                                    <? foreach ($arElement['PROPERTIES']['TREBOVANIA']
                                                                ['VALUE'] as $arProperty) { ?>
                                                        <li><?= $arProperty ?></li>
                                                    <?
                                                    } ?>
                                                </ul>
                                            </div>
                                            <div class="job-section">
                                                <div class="job-section__title">
                                                    <?= $arElement['PROPERTIES']['TASKS']['NAME'] ?>
                                                </div>
                                                <ul class="job-section__list">
                                                    <? foreach ($arElement['PROPERTIES']['TASKS']
                                                                ['VALUE'] as $arProperty) { ?>
                                                        <li><?= $arProperty ?></li>
                                                    <?
                                                    } ?>
                                                </ul>
                                            </div>
                                            <div class="job-section">
                                                <div class="job-section__title">
                                                    <?= $arElement['PROPERTIES']['REQUIREMENT']['NAME'] ?>
                                                </div>
                                                <ul class="job-section__list">
                                                    <? foreach ($arElement['PROPERTIES']['REQUIREMENT']
                                                                ['VALUE'] as $arProperty) { ?>
                                                        <li><?= $arProperty ?></li>
                                                    <?
                                                    } ?>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="job__footer">
                                            <div class="button button--primary button--auto-width">
                                                <span>Отправить резюме</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?}
                    }
                    ?>
                <? } ?>
            </div>
        </div>
        </div>
    </section>
    <section class="section mb-large">
        <div class="container">
            <div class="section-header">
                <? if ($arResult['WHY'][0]) {
                    $arResult['WHY'][0]['IBLOCK_NAME'];
                } ?>
            </div>
            <? foreach ($arResult['WHY'] as $arElement) { ?>
            <div class="vacancy-description">
                <div class="vacancy-description__item vacancy-description__item--gallery">
                    <div class="vacancy-description-gallery js-vacancy-description-gallery">
                        <div class="vacancy-description-gallery__image"><img/></div>
                        <div class="vacancy-description-gallery__slider vacancy-description-gallery__slider--left">
                            <div class="glide">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        <? foreach ($arElement['PROPERTIES']['PHOTO']
                                                    ['VALUE'] as $arKey => $iPhoto) { ?>
                                            <li class="glide__slide">
                                                <img src="<?= CFile::GetPath($iPhoto) ?>" data-index="<?= $arKey ?>"/>
                                            </li>
                                        <?
                                        } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="vacancy-description__item vacancy-description__item--text">
                    <div class="vacancy-description-text">
                        <div class="vacancy-description-text__title"><?= $arElement['NAME'] ?></div>
                        <div class="vacancy-description-text__text-blocks">
                            <?= $arElement['PREVIEW_TEXT'] ?>
                        </div>
                    </div>
                </div>
            <? } ?>
            </div>
    </section>
<?
require_once $_SERVER['DOCUMENT_ROOT'] . '/_inc/line-unit.php';
