<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};

?>

<?

CModule::IncludeModule('iqdev.options');
$options  =  IQDEV\Options\Options::getPageOptions('headerNumber');
$bNoEmpty = false;
foreach ($options as $Item => $key) {
    if ($key == "") {
        $bNoEmpty = false;
        break;
    } else {
        $bNoEmpty = true;
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?
    global $APPLICATION, $USER;

    if ($USER->IsAdmin()) {
        $APPLICATION->ShowHead();
        $APPLICATION->ShowPanel();
    }
        $APPLICATION->ShowMeta("robots", false, true);
        $APPLICATION->ShowMeta("keywords", false, true);
        $APPLICATION->ShowMeta("description", false, true);
        $APPLICATION->ShowLink("canonical", null, true);
        $APPLICATION->ShowHeadStrings();


    if (array_filter($_REQUEST, function ($key) {
        return $key == strpos($key, 'PAGEN');
    }, ARRAY_FILTER_USE_KEY)
    ) {
        $APPLICATION->SetPageProperty('robots', 'noindex,follow');
    } ?>
    <title><?= $APPLICATION->ShowTitle(); ?></title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="/assets/css/application.css?v=1"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png"/>
    <link rel="manifest" href="/assets/icons/site.webmanifest"/>
    <link rel="mask-icon" href="/assets/icons/safari-pinned-tab.svg" color="#6bbd45"/>
    <link rel="shortcut icon" href="/assets/icons/favicon.ico"/>
    <meta name="msapplication-TileColor" content="#ffffff"/>
    <meta name="msapplication-config" content="/assets/icons/browserconfig.xml"/>
    <meta name="theme-color" content="#ffffff"/>
    <title>Global</title></head>
<body class="body js-body">
<header class="header">
    <div class="header__inner"><a class="header__logo" href="/"><img src="/assets/image/header/logo.png"/></a>
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            ".default",
            [
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "2",
                "CHILD_MENU_TYPE" => "top-page",
                "USE_EXT" => "Y",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "Y",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => [],
                "COMPONENT_TEMPLATE" => ".default"
            ],
            false
        ); ?>
        <?if ($bNoEmpty == true) { ?>
        <a class="header__number js-stats link-blue roistat_phone_navig" href="<?=$options["link"]?>">
            <?=$options["number"]?></b>
        </a>
        <?}?>
        <div class="navigation-mobile js-navigation-mobile">
            <?if ($bNoEmpty == true) { ?>
            <a class="navigation-mobile__number js-stats link-blue roistat_phone_navig"
               href="<?=$options["link"]?>"><?=$options["number"]?></b>
            </a>
            <? }
            $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "mobile",
                [
                    "ROOT_MENU_TYPE" => "top",
                    "MAX_LEVEL" => "2",
                    "CHILD_MENU_TYPE" => "top-page",
                    "USE_EXT" => "Y",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "MENU_CACHE_GET_VARS" => [],
                    "COMPONENT_TEMPLATE" => "mobile"
                ],
                false
            ); ?>
            <div class="navigation-mobile__socials"><a class="navigation-mobile__social" href="#" target="_blank">
                    <div class="icon icon--primary icon--hover-brown">
                        <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.57895 6.875V4.375C6.57895 3.685 7.16842 3.125 7.89474
                            3.125H9.21053V0H6.57895C4.39868 0 2.63158 1.67875 2.63158
                            3.75V6.875H0V10H2.63158V20H6.57895V10H9.21053L10.5263 6.875H6.57895Z"
                                  fill="primary"></path>
                        </svg>
                    </div>
                </a><a class="navigation-mobile__social" href="#" target="_blank">
                    <div class="icon icon--primary icon--hover-brown">
                        <svg width="25" height="14" viewBox="0 0 25 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M23.8446 12.1602C23.7799 12.0527 23.3799 11.1894 21.4551 9.41514C19.44
                                     7.55723 19.7107 7.85892 22.1378 4.6464C23.616 2.68992 24.207 1.49512 24.0221
                                     0.984342C23.8461 0.497462 22.7589 0.625902 22.7589 0.625902L19.1437
                                     0.646811C19.1437 0.646811 18.876 0.610967 18.676 0.728954C18.4821
                                     0.845447 18.3572 1.11428 18.3572 1.11428C18.3572 1.11428 17.7843
                                     2.62868 17.0204 3.91608C15.4098 6.63275 14.7647 6.77613 14.5015
                                     6.60736C13.8894 6.21457 14.0428 5.02724 14.0428 4.18491C14.0428
                                     1.55187 14.4443 0.45415 13.2594 0.170385C12.8654 0.0762949 12.5766
                                     0.013568 11.5706 0.00311351C10.2803 -0.010328 9.18706 0.007594 8.56899
                                     0.307787C8.15695 0.507916 7.83965 0.954472 8.03364 0.979862C8.27275
                                     1.01123 8.81411 1.12473 9.10134 1.51304C9.47278 2.01336 9.45925 3.13946
                                     9.45925 3.13946C9.45925 3.13946 9.67278 6.23847 8.96149 6.62379C8.47275
                                     6.88814 7.80356 6.34899 6.36743 3.88322C5.63207 2.62122 5.07566 1.2248
                                     5.07566 1.2248C5.07566 1.2248 4.96889 0.964927 4.77791 0.826031C4.54633
                                     0.657266 4.22151 0.6035 4.22151 0.6035L0.783816 0.624409C0.783816 0.624409
                                     0.268012 0.639344 0.0785334 0.861876C-0.0898924 1.06051 0.0649992 1.46973
                                     0.0649992 1.46973C0.0649992 1.46973 2.7568 7.72301 5.8035 10.8758C8.59907
                                     13.7657 11.7721 13.576 11.7721 13.576H13.2097C13.2097 13.576 13.6443
                                     13.5282 13.8654 13.2908C14.0699 13.0727 14.0624 12.6635 14.0624
                                     12.6635C14.0624 12.6635 14.0338 10.7473 14.9301 10.4651C15.8128
                                     10.1873 16.9467 12.317 18.1482 13.1369C19.0565 13.7567 19.7467
                                     13.6208 19.7467 13.6208L22.9604 13.576C22.9604 13.576 24.6416
                                     13.473 23.8446 12.1602Z"
                                    fill="primary"></path>
                        </svg>
                    </div>
                </a><a class="navigation-mobile__social" href="#" target="_blank">
                    <div class="icon icon--primary icon--hover-brown">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M7.00093 4.77222C5.7736 4.77222 4.77515 5.7707 4.77515 6.998C4.77515 8.2253
                                    5.77363 9.22378 7.00093 9.22378C8.22822 9.22378 9.22671 8.2253 9.22671 6.998C9.22671
                                    5.7707 8.22825 4.77222 7.00093 4.77222Z"
                                    fill="primary"></path>
                            <path
                                    d="M11.3933 0H2.60679C1.16941 0 0 1.16938 0 2.60676V11.3932C0 12.8306
                                    1.16941 14 2.60679 14H11.3933C12.8306 14 14 12.8306 14 11.3932V2.60676C14
                                    1.16938 12.8306 0 11.3933 0ZM7 10.0461C5.32036 10.0461 3.95391 8.67959
                                    3.95391 7C3.95391 5.32041 5.32036 3.95391 7 3.95391C8.67964 3.95391
                                    10.0461 5.32038 10.0461 7C10.0461 8.67962 8.67964 10.0461 7 10.0461ZM11.2438
                                    3.33618C11.1676 3.41247 11.062 3.45622 10.954 3.45622C10.846 3.45622
                                    10.7402 3.41247 10.6639 3.33618C10.5876 3.25989 10.5438 3.15407 10.5438
                                    3.04607C10.5438 2.93809 10.5876 2.83248 10.6639 2.75622C10.7402 2.67963
                                    10.846 2.63591 10.954 2.63591C11.0617 2.63591 11.1676 2.67966 11.2438
                                    2.75622C11.3204 2.83248 11.3641 2.93806 11.3641 3.04607C11.3641
                                    3.15407 11.3204 3.25989 11.2438 3.33618Z"
                                    fill="primary"></path>
                        </svg>
                    </div>
                </a><a class="navigation-mobile__social" href="#" target="_blank">
                    <div class="icon icon--primary icon--hover-brown">
                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M19.15 1.35623C18.6075 0.368485 18.0188 0.186801 16.82 0.11771C15.6225
                                    0.0345455 12.6112 0 10.0025 0C7.38875 0 4.37625 0.0345456 3.18 0.116431C1.98375
                                    0.186801 1.39375 0.367205 0.84625 1.35623C0.2875 2.34269 0 4.04182 0 7.0332C0
                                    7.03576 0 7.03704 0 7.03704C0 7.0396 0 7.04088 0 7.04088V7.04343C0 10.022
                                    0.2875 11.7339 0.84625 12.7102C1.39375 13.6979 1.9825 13.877 3.17875
                                    13.9602C4.37625 14.0319 7.38875 14.0741 10.0025 14.0741C12.6112 14.0741
                                    15.6225 14.0319 16.8212 13.9615C18.02 13.8783 18.6087 13.6992 19.1513
                                    12.7114C19.715 11.7352 20 10.0233 20 7.04471C20 7.04471 20 7.04088 20
                                    7.03832C20 7.03832 20 7.03576 20 7.03448C20 4.04182 19.715 2.34269
                                    19.15 1.35623ZM7.5 10.8754V3.19865L13.75 7.03704L7.5 10.8754Z"
                                    fill="primary"></path>
                        </svg>
                    </div>
                </a><a class="navigation-mobile__social" href="#" target="_blank">
                    <div class="icon icon--primary icon--hover-brown">
                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M5.7925 3.02543C6.97143 3.02543 7.93019 3.9842 7.93019 5.16312C7.93019
                                    6.33856.97143 7.29726 5.7925 7.29726C4.61357 7.29726 3.65481 6.3385 3.65481
                                    5.16312C3.654813.9842 4.61357 3.02543 5.7925 3.02543ZM5.7925 10.3227C8.64039
                                    10.3227 10.9556
                                    8.00746 10.9556 5.16312C10.9556 2.31524 8.64039 0 5.7925 0C2.94462 0 0.632928
                                    2.31524 0.632928 5.16312C0.632928 8.00746 2.94462 10.3227 5.7925 10.3227ZM7.88048
                                    14.5342C8.93157 14.2927 9.94359 13.8772 10.8775 13.2913C11.5841 12.8474 11.7972
                                    11.9135 11.3533 11.2069C10.9059 10.4967 9.97555 10.2836 9.26536 10.7311C7.15252
                                    12.0591 4.43248 12.0591 2.31609 10.7311C1.60945 10.2836 0.67554 10.4967 0.231668
                                    11.2069C-0.212205 11.9135 0.000853446 12.8474 0.707498 13.2913C1.64141 13.8772
                                    2.65343 14.2927 3.70452 14.5342L0.817579 17.4176C0.228116 18.007 0.228116
                                    18.9658 0.817579 19.5552C1.11586 19.85 1.49937 19.9991 1.88642 19.9991C2.27348
                                    19.9991 2.66054 19.85 2.95882 19.5552L5.7925 16.7216L8.62973 19.5552C9.21919
                                    20.1483 10.1744 20.1483 10.7674 19.5552C11.3569 18.9658 11.3569 18.007 10.7674
                                    17.4176L7.88048 14.5342Z"
                                    fill="primary"></path>
                        </svg>
                    </div>
                </a></div>
            <div class="navigation-mobile__button">
                <div class="button button--primary js-modal-trigger" data-modal-id="callback">
                    <span>Заказать звонок</span></div>
            </div>
        </div>


        <div class="header__button">
            <div class="button button--primary js-modal-trigger" data-modal-id="callback">
                <span>Заказать звонок</span>
            </div>
        </div>
        <div class="header__ham">
            <svg class="ham js-ham" viewBox="0 0 100 100" width="80">
                <path class="ham__line ham__line--top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5
                 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20">
                </path>
                <path class="ham__line ham__line--middle" d="m 70,50 h -40"></path>
                <path class="ham__line ham__line--bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5
                 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20">
                </path>
            </svg>
        </div>
        <div class="header__overlay js-header__overlay"></div>
    </div>
</header>
<section class="section mb-medium">
    <div class="container">
        <div class="breadcrumbs">
            <?$APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "",
                [
                    "START_FROM" => "0",
                    "PATH" => "",
                    "SITE_ID" => "s1"
                ]);?>
        </div>
    </div>
</section>
