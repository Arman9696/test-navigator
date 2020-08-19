<?php


class HighloadClass extends \CBitrixComponent
{
    public function executeComponent()
    {
        $oHouse     = new \IQDEV\Base\HighLoadBlock("house");
        $arElements = $oHouse->getList();
        foreach ($arElements as $arKey => $arElement){
            $strResult      = implode(', ',[
                $arElements[$arKey]["UF_PERSON"],
                'тел: '.$arElements[$arKey]["UF_PHONE"].' внутренний '.$arElements[$arKey]["UF_NUMBER"].".<br>".'моб. '.
                $arElements[$arKey]["UF_MOBILE_PHONE"],
                'почта: '.$arElements[$arKey]["UF_MAIL"]
            ]);
            $this->arResult['HOUSE'][$arKey] = $arElement;
            $this->arResult['HOUSE'][$arKey]['INFO'] = $strResult;
            $this->arResult['HOUSE'][$arKey]['UF_START_TIME'] = $arElements[$arKey]['UF_START_TIME']->format("d.m.Y")
                ." г.";
            $this->arResult['HOUSE'][$arKey]['UF_END_TIME'] = $arElements[$arKey]['UF_END_TIME']->format("d.m.Y").
                " г.";;
        }

        $this->includeComponentTemplate();
    }
}