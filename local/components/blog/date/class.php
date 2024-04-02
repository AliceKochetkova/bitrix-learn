<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

class Date extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        return parent::onPrepareComponentParams($arParams);
    }

    public function getDate()
    {
        return date("d.m.Y H:i:s");
    }

    public function executeComponent()
    {

        $this->arResult['DATE'] = $this->getDate();
        $this->includeComponentTemplate();
        return $this->arResult;
    }
}