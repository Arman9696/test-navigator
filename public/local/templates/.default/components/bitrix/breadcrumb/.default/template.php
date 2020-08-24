<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
};

?>

<?if (empty($arResult)) {
    return "";
}?>
<?for ($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++) {
    if ($index > 0) {
        $strReturn .= '<span class="breadcrumbs__divider">&gt;&nbsp;</span>';
    }
    $title = htmlspecialcharsex($arResult[$index]["TITLE"]);
    if ($arResult[$index]["LINK"] <> "") {
        if ($index+1 == $itemSize) {
            $strReturn .= '<span class="breadcrumbs__item" href="'
                . $arResult[$index]["LINK"] . '" title="' . $title . '">' . $title .'</span>';
        } else {
            $strReturn .= '<a class="breadcrumbs__item" href="' . $arResult[$index]["LINK"] .
                '" title="' . $title . '">' . $title . '</a>';
        }
    } else {
        $strReturn .= $title;
    }
}
return $strReturn;
