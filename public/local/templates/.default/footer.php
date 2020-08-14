<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};

?>
<?
CModule::IncludeModule('iqdev.options');
$oOptions        =  IQDEV\Options\Options::getPageOptions('footer');
$oOptions_Social = IQDEV\Options\Options::getPageOptions('social');
$noEmpty         = false;
foreach ($oOptions as $Item => $key) {
    if ($key == "") {
        $noEmpty = false;
        break;
    } else {
        $noEmpty = true;
    }
}
?>
    <div class="line-unit">
        <div class="container">
            <div class="line-unit__grid">
                <div class="line-unit__item line-unit__item--icon">
                    <div class="line-unit__icon">
                        <svg width="64" height="46" viewBox="0 0 64 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M51.2498 35.1383C50.9988 35.1383 50.7477 35.0464
                            50.5518 34.8607L38.8073 23.8429C38.3971 23.4591 38.3767
                            22.8121 38.7624 22.4019C39.1482 21.9875 39.7911 21.9691
                            40.2055 22.3569L51.9499 33.3748C52.3602 33.7585 52.3806
                            34.4055 51.9948 34.8158C51.7928 35.0301 51.5234 35.1383
                            51.2498 35.1383Z" fill="white">
                            </path>
                            <path d="M12.0466 35.1369C11.7751 35.1369 11.5036 35.0287
                            11.3016 34.8144C10.9158 34.4042 10.9362 33.7571 11.3465
                            33.3734L23.095 22.3556C23.5073 21.9719 24.1543 21.9882
                            24.538 22.4005C24.9238 22.8108 24.9034 23.4578 24.4931
                            23.8415L12.7446 34.8593C12.5487 35.0451 12.2976 35.1369
                            12.0466 35.1369Z" fill="white">
                            </path>
                            <path d="M58.1957 45.3823H5.10274C2.29011 45.3823 0 43.0943
                             0 40.2796V5.48506C0 2.67039 2.29011 0.382324 5.10274
                             0.382324H58.1957C61.0083 0.382324 63.2984 2.67039
                             63.2984 5.48506V40.2796C63.2984 43.0943 61.0083
                             45.3823 58.1957 45.3823ZM5.10274 2.42342C3.41475
                             2.42342 2.04109 3.79707 2.04109 5.48506V40.2796C2.04109
                             41.9676 3.41475 43.3412 5.10274 43.3412H58.1957C59.8837
                             43.3412 61.2573 41.9676 61.2573 40.2796V5.48506C61.2573
                             3.79707 59.8837 2.42342 58.1957 2.42342H5.10274Z" fill="white">
                            </path>
                            <path d="M31.6492 28.0107C30.2918 28.0107 28.9345 27.5596 27.9017
                             26.6595L1.69407 3.79722C1.26952 3.42778 1.22462 2.7828 1.59406
                             2.35621C1.96758 1.93166 2.61052 1.89288 3.03507 2.25823L29.2427
                             25.1185C30.547 26.2554 32.7514 26.2554 34.0536 25.1185L60.2286
                             2.29497C60.6511 1.92554 61.294 1.96636 61.6696 2.39295C62.039
                             2.81954 61.9962 3.46248 61.5716 3.83396L35.3966 26.6575C34.3618
                             27.5596 33.0065 28.0107 31.6492 28.0107Z" fill="white">
                            </path>
                        </svg>
                    </div>
                    <div class="line-unit__text">Подписывайтесь на новости и акции:</div>
                </div>
                <div class="line-unit__item line-unit__item--form">
                    <form class="line-unit__form js-form" autocomplete="off" action="/?ajaxAction=formSubscribe"
                          data-name="subscribe">
                        <div class="line-unit__input">
                            <div class="input js-input"><input class="input__field" type="text" name="email"
                                                               placeholder="E-mail"
                                                               data-validate="required,email"/>
                                <div class="input__error"></div>
                            </div>
                        </div>
                        <div class="line-unit__button">
                            <button class="button button--primary" type="submit"><span>Подписаться</span></button>
                        </div>
                        <div class="line-unit__checkbox">
                            <div class="checkbox js-checkbox"><label class="checkbox__label">
                                    <input class="checkbox__field" type="checkbox" data-validate="required"/>
                                    <div class="checkbox__custom"></div>
                                    <div class="checkbox__text">Подтверждаю согласие с
                                        <a class="checkbox__link" href="#" target="_blank">
                                            политикой обработки персональных данных</a></div>
                                </label>
                                <div class="checkbox__error"></div>
                            </div>
                        </div>
                        <div class="line-unit__response"></div>
                    </form>
                </div>
                <?if ($oOptions_Social) ?>
                <div class="line-unit__item line-unit__item--socials">
                    <a class="line-unit__social" href="<?=$oOptions_Social["facebook"]?>" target="_blank">
                        <div class="icon icon--white icon--hover-primary">
                            <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.57895 6.875V4.375C6.57895 3.685 7.16842 3.125 7.89474
                                3.125H9.21053V0H6.57895C4.39868 0 2.63158 1.67875 2.63158
                                3.75V6.875H0V10H2.63158V20H6.57895V10H9.21053L10.5263 6.875H6.57895Z" fill="white">
                                </path>
                            </svg>
                        </div>
                    </a><a class="line-unit__social" href="<?=$oOptions_Social["vkontakte"]?>" target="_blank">
                        <div class="icon icon--white icon--hover-primary">
                            <svg width="25" height="14" viewBox="0 0 25 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.8446 12.1602C23.7799 12.0527 23.3799 11.1894 21.4551 9.41514C19.44 7.55723
                                 19.7107 7.85892 22.1378 4.6464C23.616 2.68992 24.207 1.49512 24.0221 0.984342C23.8461
                                 0.497462 22.7589 0.625902 22.7589 0.625902L19.1437 0.646811C19.1437 0.646811 18.876
                                 0.610967 18.676 0.728954C18.4821 0.845447 18.3572 1.11428 18.3572 1.11428C18.3572
                                 1.11428 17.7843 2.62868 17.0204 3.91608C15.4098 6.63275 14.7647 6.77613 14.5015
                                 6.60736C13.8894 6.21457 14.0428 5.02724 14.0428 4.18491C14.0428 1.55187 14.4443
                                 0.45415 13.2594 0.170385C12.8654 0.0762949 12.5766 0.013568 11.5706
                                 0.00311351C10.2803 -0.010328 9.18706 0.007594 8.56899 0.307787C8.15695
                                 0.507916 7.83965 0.954472 8.03364 0.979862C8.27275 1.01123 8.81411
                                 1.12473 9.10134 1.51304C9.47278 2.01336 9.45925 3.13946 9.45925
                                 3.13946C9.45925 3.13946 9.67278 6.23847 8.96149 6.62379C8.47275
                                 6.88814 7.80356 6.34899 6.36743 3.88322C5.63207 2.62122 5.07566
                                 1.2248 5.07566 1.2248C5.07566 1.2248 4.96889 0.964927 4.77791
                                 0.826031C4.54633 0.657266 4.22151 0.6035 4.22151 0.6035L0.783816
                                 0.624409C0.783816 0.624409 0.268012 0.639344 0.0785334
                                 0.861876C-0.0898924 1.06051 0.0649992 1.46973 0.0649992
                                 1.46973C0.0649992 1.46973 2.7568 7.72301 5.8035
                                 10.8758C8.59907 13.7657 11.7721 13.576 11.7721
                                 13.576H13.2097C13.2097 13.576 13.6443 13.5282
                                 13.8654 13.2908C14.0699 13.0727 14.0624 12.6635
                                 14.0624 12.6635C14.0624 12.6635 14.0338
                                 10.7473 14.9301 10.4651C15.8128 10.1873
                                 16.9467 12.317 18.1482 13.1369C19.0565
                                 13.7567 19.7467 13.6208 19.7467 13.6208L22.9604 13.576C22.9604 13.576
                                  24.6416 13.473 23.8446 12.1602Z"
                                      fill="white"></path>
                            </svg>
                        </div>
                    </a>
                    <a class="line-unit__social" href="<?=$oOptions_Social["instagram"]?>" target="_blank">
                        <div class="icon icon--white icon--hover-primary">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.00093 4.77222C5.7736 4.77222 4.77515 5.7707 4.77515 6.998C4.77515
                                 8.2253 5.77363 9.22378 7.00093 9.22378C8.22822 9.22378 9.22671 8.2253 9.22671
                                  6.998C9.22671 5.7707 8.22825 4.77222 7.00093 4.77222Z" fill="white">
                                </path>
                                <path d="M11.3933 0H2.60679C1.16941 0 0 1.16938 0 2.60676V11.3932C0
                                12.8306 1.16941 14 2.60679 14H11.3933C12.8306 14 14 12.8306
                                14 11.3932V2.60676C14 1.16938 12.8306 0 11.3933 0ZM7 10.0461C5.32036 10.0461
                                3.95391 8.67959 3.95391 7C3.95391 5.32041 5.32036 3.95391 7 3.95391C8.67964
                                3.95391 10.0461 5.32038 10.0461 7C10.0461 8.67962 8.67964 10.0461 7 10.0461ZM11.2438
                                3.33618C11.1676 3.41247 11.062 3.45622 10.954 3.45622C10.846 3.45622 10.7402 3.41247
                                10.6639 3.33618C10.5876 3.25989 10.5438 3.15407 10.5438 3.04607C10.5438 2.93809
                                10.5876 2.83248 10.6639 2.75622C10.7402 2.67963 10.846 2.63591 10.954 2.63591C11.0617
                                2.63591 11.1676 2.67966 11.2438 2.75622C11.3204 2.83248 11.3641 2.93806 11.3641
                                3.04607C11.3641 3.15407 11.3204 3.25989 11.2438 3.33618Z" fill="white">
                                </path>
                            </svg>
                        </div>
                    </a><a class="line-unit__social" href="<?=$oOptions_Social["youtube"]?>" target="_blank">
                        <div class="icon icon--white icon--hover-primary">
                            <svg width="20" height="15" viewBox="0 0 20 15" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.15 1.35623C18.6075 0.368485 18.0188 0.186801 16.82 0.11771C15.6225
                                 0.0345455 12.6112 0 10.0025 0C7.38875 0 4.37625 0.0345456 3.18 0.116431C1.98375
                                 0.186801 1.39375 0.367205 0.84625 1.35623C0.2875 2.34269 0 4.04182 0 7.0332C0
                                 7.03576 0 7.03704 0 7.03704C0 7.0396 0 7.04088 0 7.04088V7.04343C0 10.022 0.2875
                                 11.7339 0.84625 12.7102C1.39375 13.6979 1.9825 13.877 3.17875 13.9602C4.37625
                                 14.0319 7.38875 14.0741 10.0025 14.0741C12.6112 14.0741 15.6225 14.0319 16.8212
                                 13.9615C18.02 13.8783 18.6087 13.6992 19.1513 12.7114C19.715 11.7352 20 10.0233
                                 20 7.04471C20 7.04471 20 7.04088 20 7.03832C20 7.03832 20 7.03576 20 7.03448C20
                                 4.04182 19.715 2.34269 19.15 1.35623ZM7.5 10.8754V3.19865L13.75 7.03704L7.5 10.8754Z"
                                      fill="white">
                                </path>
                            </svg>
                        </div>
                    </a><a class="line-unit__social" href="<?=$oOptions_Social["odnoklassniki"]?>" target="_blank">
                        <div class="icon icon--white icon--hover-primary">
                            <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.7925 3.02543C6.97143 3.02543 7.93019 3.9842 7.93019 5.16312C7.93019
                                6.3385 6.97143 7.29726 5.7925 7.29726C4.61357 7.29726 3.65481 6.3385 3.65481
                                5.16312C3.65481 3.9842 4.61357 3.02543 5.7925 3.02543ZM5.7925 10.3227C8.64039
                                10.3227 10.9556 8.00746 10.9556 5.16312C10.9556 2.31524 8.64039 0 5.7925
                                0C2.94462 0 0.632928 2.31524 0.632928 5.16312C0.632928 8.00746 2.94462
                                10.3227 5.7925 10.3227ZM7.88048 14.5342C8.93157 14.2927 9.94359 13.8772
                                10.8775 13.2913C11.5841 12.8474 11.7972 11.9135 11.3533 11.2069C10.9059
                                10.4967 9.97555 10.2836 9.26536 10.7311C7.15252 12.0591 4.43248 12.0591
                                2.31609 10.7311C1.60945 10.2836 0.67554 10.4967 0.231668 11.2069C-0.212205
                                11.9135 0.000853446 12.8474 0.707498 13.2913C1.64141 13.8772 2.65343 14.2927
                                3.70452 14.5342L0.817579 17.4176C0.228116 18.007 0.228116 18.9658 0.817579
                                19.5552C1.11586 19.85 1.49937 19.9991 1.88642 19.9991C2.27348 19.9991
                                2.66054 19.85 2.95882 19.5552L5.7925 16.7216L8.62973 19.5552C9.21919
                                20.1483 10.1744 20.1483 10.7674 19.5552C11.3569 18.9658 11.3569
                                18.007 10.7674 17.4176L7.88048 14.5342Z"
                                      fill="white"></path>
                            </svg>
                        </div>
                    </a></div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="up-button js-up-button">
            <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M6.53033 0.46967C6.23744 0.176777 5.76256 0.176777 5.46967 0.46967L0.6967 5.24264C0.403806
                    5.53553 0.403806 6.01041 0.696699 6.3033C0.989593 6.59619 1.46447 6.59619 1.75736 6.3033L6
                    2.06066L10.2426 6.3033C10.5355 6.59619 11.0104 6.59619 11.3033 6.3033C11.5962 6.01041 11.5962
                    5.53553 11.3033 5.24264L6.53033 0.46967ZM6.75 14L6.75 1L5.25 1L5.25 14L6.75 14Z"
                    fill="white">
                </path>
            </svg>
        </div>
    <div class="container">
        <div class="footer__grid">
            <?$APPLICATION->IncludeComponent(
                'bitrix:menu',
                'footer',
                [
                    'ROOT_MENU_TYPE' => 'bottom',
                    'MAX_LEVEL' => '2',
                    'CHILD_MENU_TYPE' => 'top-page',
                    'USE_EXT' => 'Y',
                    'DELAY' => 'N',
                    'ALLOW_MULTI_SELECT' => 'Y',
                    'MENU_CACHE_TYPE' => 'N',
                    'MENU_CACHE_TIME' => "3600",
                    'MENU_CACHE_USE_GROUPS' => 'Y',
                    'MENU_CACHE_GET_VARS' => [],
                    'COMPONENT_TEMPLATE' => 'footer'
                ],
                false);?>
            <?if ($noEmpty == true) { ?>
            <div class="footer__contacts">
                <div class="footer__contacts-title">Наши контакты</div>
                <div class="footer__contacts-inner">
                    <a class="footer__contacts-number roistat_phone_navig" href="<?=s["href"]?>">
                        <?=$oOptions["number"]?>
                        <svg class="footer__contacts-icon" width="14" height="14" viewBox="0 0 14 14" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.965 6.0925C4.045 8.215 5.785 9.9475 7.9075 11.035L9.5575 9.385C9.76 9.1825
                            10.06 9.11510.3225 9.205C11.1625 9.4825 12.07 9.6325 13 9.6325C13.4125 9.6325 13.75
                            9.97 13.7510.3825V13C13.75 13.4125 13.4125 13.75 13 13.75C5.9575 13.75 0.25 8.0425
                            0.25 1C0.250.5875 0.5875 0.25 1 0.25H3.625C4.0375 0.25 4.375 0.5875 4.375 1C4.375
                            1.9375 4.5252.8375 4.8025 3.6775C4.885 3.94 4.825 4.2325 4.615 4.4425L2.965 6.0925Z"
                                  fill="white">
                            </path>
                        </svg>
                    </a>
                    <div class="footer__contacts-worktime"><?=$oOptions["worktime"]?></div>
                    <div class="footer__contacts-calltime"><?=$oOptions["calltime"]?></div>
                    <div class="footer__contacts-address">
                        <span><?=$oOptions["address"]?><svg class="footer__contacts-icon" width="14" height="16
             viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.75C0 2.98926 2.98929 0 6.75 0C10.5107
                     0 13.5 2.98926 13.4036 6.75C13.4036 8.58215 12.7286 10.3179 11.3786 11.5714C11.3786 11.6435
                     9.16794 13.6028 8.01241 14.6269C7.62262 14.9724 7.35289 15.2114 7.32857 15.2357C7.03929
                     15.525 6.46071 15.525 6.075 15.2357C6.02679 15.1875 5.0384 14.2955 4.05002 13.4036C3.06162
                     12.5116 2.07321 11.6196 2.025 11.5714C0.675 10.3179 0 8.58215 0 6.75ZM4.82143 6.74988C4.82143
                     7.81055 5.68928 8.67841 6.75 8.67841C7.81071 8.67841 8.67857 7.81055 8.67857 6.74988C8.67857
                     5.68915 7.81071 4.82129 6.75 4.82129C5.68928 4.82129 4.82143 5.68915 4.82143 6.74988Z"
                          fill="white">
                    </path></svg>
                        </span>
                        <a class="footer__contacts-map" href="<?=$oOptions["url"][0]?>" target="_blank">
                            схема проезда</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="footer__information">
            <div class="footer__information-item">
                <div class="footer__information-subitem"><?=$oOptions["informationSubItem"][0]?></div>
                <div class="footer__information-subitem"><?=$oOptions["informationSubItem"][1]?></div>
            </div>
            <div class="footer__information-item"><a class="footer__policy" href="#" target="_blank">Политика
                    конфиденциальности</a></div>
            <div class="footer__information-item">
                <a class="iq-dev" href="https://iqdev.digital/"><span>Разработано</span>
                    <svg width="59" height="17" viewBox="0 0 59 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M14.1433 2.86084V10.6588C14.1433 10.7486 14.1033 10.8337 14.0342 10.8909L6.70612
                             16.9529C6.4613217.0222 6.46132 17.0222 6.2146 16.7208V3.16178C6.2146 2.99557
                             6.34908 2.86084 6.51494 2.86084H14.1433Z" fill="#DEDEDE">
                            </path>
                            <path d="M14.1434 2.86084H6.49744C6.31836 2.86084 6.14859 2.94092 6.03449 3.07925L0.0694144
                            10.3101C-0.0921532 10.506 0.046266 10.8019 0.299851 10.8028L13.842 10.8501C14.0083 10.8507
                            14.1434 10.7158 14.1434 10.5492V2.86084Z" fill="white">
                            </path>
                            <path d="M21.8574 1.93659C22.3812 1.93659 22.8085 1.48753 22.8085
                            0.968297C22.8085 0.435034 22.3812 0 21.8574 0C21.3336 0 20.9063
                            0.435034 20.9063 0.968297C20.9063 1.48753 21.3336 1.93659 21.8574
                            1.93659ZM21.1131 10.0057H22.6018V2.98909H21.1131V10.0057Z" fill="white">
                            </path>
                            <path d="M29.7888 2.98907V3.99947C29.265 3.25571 28.4517 2.80664 27.3766 2.80664C25.5019
                            2.80664 23.9443 4.42047 23.9443 6.49742C23.9443 8.58838 25.5019 10.1882 27.3766
                            10.1882C28.4517 10.1882 29.265 9.73909 29.7888
                            9.00937V12.8124H31.2775V2.98907H29.7888ZM27.6109 8.74274C26.3703 8.74274 25.433 7.80249
                            25.433 6.49742C25.433 5.19231 26.3703 4.25206 27.6109 4.25206C28.8515 4.25206 29.7888
                            5.19231 29.7888 6.49742C29.7888 7.80249 28.8515 8.74274 27.6109 8.74274Z" fill="white">
                            </path>
                            <path d="M41.6414 0.182617V3.98563C41.1178 3.25591 40.3044 2.80685 39.2295 2.80685C37.3548
                            2.80685 35.7971 4.40666 35.7971 6.49762C35.7971 8.57453 37.3548 10.1884 39.2295
                            10.1884C40.3044 10.1884 41.1178 9.7393 41.6414
                            8.99553V10.0059H43.1301V0.182617H41.6414ZM39.4636 8.74294C38.2231 8.74294 37.2858
                            7.80269 37.2858 6.49762C37.2858 5.19251 38.2231 4.25226 39.4636 4.25226C40.7041
                            4.25226 41.6414 5.19251 41.6414 6.49762C41.6414 7.80269 40.7041 8.74294 39.4636 8.74294Z"
                                   fill="white">
                            </path>
                            <path d="M46.0371 7.14293H51.5229C51.5508 6.94648 51.5782 6.72193 51.5782 6.51143C51.5782
                            4.49062 50.1723 2.80664 48.1184 2.80664C45.9543 2.80664 44.4793 4.42047 44.4793
                            6.49742C44.4793 8.60239 45.9543 10.1882 48.2286 10.1882C49.5797 10.1882 50.6135
                            9.6128 51.2472 8.65853L50.0205 7.92878C49.6899 8.41997 49.0694 8.79888 48.2423
                            8.79888C47.1399 8.79888 46.2712 8.23754 46.0371 7.14293ZM46.0233 5.90801C46.23
                            4.85552 46.9881 4.1819 48.1047 4.1819C49.0004 4.1819 49.8691 4.70112 50.0758
                            5.90801H46.0233Z" fill="white">
                            </path>
                            <path d="M57.2916 2.98926L55.3758 8.32193L53.4459 2.98926H51.8195L54.5075
                            10.0059H56.2304L58.9184 2.98926H57.2916Z" fill="white">
                            </path>
                        </g>
                        <defs>
                            <clippath id="clip0">
                                <rect width="59" height="17" fill="white"></rect>
                            </clippath>
                        </defs>
                    </svg>
                </a></div>
        </div>
        <div class="footer__offer"><?=$oOptions["offer"]?></div>
            <? } ?>
    </div>
    </footer>
    <div class="modal js-modal" data-modal-open="callback">
        <div class="modal__content">
        <div class="modal__title">Обратный звонок</div>
        <div class="modal__description">Оставьте контактные данные, и мы вам перезвоним!</div>
        <form class="modal__form js-form" action="/?ajaxAction=formCallback" data-name="callback">
            <div class="modal__input">
                <div class="input js-input"><input class="input__field" type="text" name="name" placeholder="Имя"
                                                   data-validate="required,name"/>
                    <div class="input__error"></div>
                </div>
            </div>
            <div class="modal__input">
                <div class="input js-input"><input class="input__field" type="text" name="phone" placeholder="Телефон"
                                                   data-validate="required,phone" data-masking="phone"/>
                    <div class="input__error"></div>
                </div>
            </div>
            <div class="modal__checkbox">
                <div class="checkbox js-checkbox"><label class="checkbox__label">
                        <input class="checkbox__field" type="checkbox" data-validate="required"/>
                        <div class="checkbox__custom checkbox__custom--border"></div>
                        <div class="checkbox__text">Подтверждаю согласие с
                            <a class="checkbox__link" href="#"
                               target="_blank">политикой обработки персональных данных</a>
                        </div>
                    </label>
                    <div class="checkbox__error"></div>
                </div>
            </div>
            <div class="modal__response"></div>
            <div class="modal__button">
                <button class="button button--primary" type="submit"><span>Отправить</span></button>
            </div>
        </form>
        </div>
    </div>
    <div class="modal-success js-modal" data-modal-open="success">
        <div class="modal-success__message">
        <div class="modal-success__message-title">Спасибо!</div>
        <div class="modal-success__message-subtitle" data-modal-import="subtitle"></div>
        <div class="modal-success__message-description" data-modal-import="description"></div>
        <div class="modal-success__message-icon">
            <svg width="168" height="169" viewBox="0 0 168 169" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M62.3767 86.3617C67.8967 97.21 76.79 106.065 87.6383 111.623L96.0717 103.19C97.1067 102.155
                    98.64 101.81 99.9817 102.27C104.275 103.688 108.913 104.455 113.667 104.455C115.775 104.455 117.5
                    106.18 117.5 108.288V121.667C117.5 123.775 115.775 125.5 113.667 125.5C77.6717 125.5 48.5 96.3283
                    48.5 60.3333C48.5 58.225 50.225 56.5 52.3333 56.5H65.75C67.8583 56.5 69.5833 58.225 69.5833
                    60.3333C69.5833 65.125 70.35 69.725 71.7683 74.0183C72.19 75.36 71.8833 76.855
                    70.81 77.9283L62.3767 86.3617Z"
                    fill="#675A54">
                </path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M87.3754 6.86727C129.506 8.70367 162.456 43.8767 161.613 86.0761C161.613 86.0762 161.613
                      86.0763 161.613 86.0763C161.612 86.122 161.611 86.1677 161.61 86.2133C160.692 128.464
                      126.232 162.236 84.0304 162.253C84.0203 162.253 84.0101 162.253 84 162.253C83.9899
                      162.253 83.9797 162.253 83.9696 162.253C41.7696 162.236 7.30946 128.464 6.39173
                      86.2133C6.39074 86.1676 6.38979 86.1218 6.38887 86.0761C5.54521 43.8766 38.4962
                      8.70354 80.6249 6.86726C80.728 6.86726 80.8284 6.8672 80.9261 6.8671C80.9261
                      6.8671 80.9262 6.8671 80.9262 6.8671C84.285 6.86368 84.4904 6.8027 84.6999
                      6.7792C84.8749 6.75957 85.0528 6.76609 87.0744 6.85415C87.1704 6.85833
                      87.2706 6.8627 87.3751 6.86726C87.3752 6.86726 87.3753 6.86726 87.3754
                      6.86727ZM167.98 86.3517C166.988 132.129 129.747 168.794 84 169C38.2544
                      168.794 1.01391 132.129 0.0203065 86.3517C0.0192338 86.3023 0.0182033
                      86.2529 0.0172152 86.2034C-0.897117 40.4554 34.7212 2.31163 80.3309
                      0.121834C80.4288 0.117131 80.5268 0.112594 80.6249 0.108222C84.392
                      -0.0596807 85.3085 0.00396773 86.1107 0.0596719C86.472 0.0847632
                      86.8102 0.108243 87.3751 0.108222C87.4732 0.112593 87.5712 0.117131
                      87.6691 0.121833C133.279 2.31162 168.897 40.4554 167.983 86.2034C167.982
                      86.2529 167.981 86.3023 167.98 86.3517Z"
                      fill="#675A54">
                </path>
            </svg>
        </div>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcoCLIUAAAAAFB2Ud11o2DWXV-vXxph8kMKxKjH"></script>
    <div id="recaptcha" data-key="6LcoCLIUAAAAAFB2Ud11o2DWXV-vXxph8kMKxKjH"></div>
    <script src="/assets/js/application.js?v=1"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;amp;apikey=b9f13544-de93-45f5-becd-5d9ba7a80326"
            type="text/javascript"></script>
    </body>
    </html>
