<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

class Service extends CBitrixComponent
{
    public function __construct($component = null)
    {
        parent::__construct($component);
        if (!Loader::includeModule('iblock')) {
            ShowError("Не подключен модуль iblock");
        }
    }

    public function onPrepareComponentParams($arParams)
    {
        return parent::onPrepareComponentParams($arParams);
    }

    private function getServices()
    {
        $services = [];
        $arFilter = ['IBLOCK_ID' => 5, 'ACTIVE' => 'Y'];
        $arSelect = ['ID', 'NAME', 'PROPERTY_COST', 'PROPERTY_RENDER','PROPERTY_CITIES'];
        $res = CIBlockElement::GetList(
            Array(), $arFilter, false, false, $arSelect);
        $VALUES = [];
        while ($elem = $res->Fetch()) {
            $services[$elem['ID']]['ID'] = $elem['ID'];
            $services[$elem["ID"]]['NAME'] = $elem["NAME"];
            $services[$elem["ID"]]['COST'] = $elem['PROPERTY_COST_VALUE'];
            $services[$elem["ID"]]['RENDER'] = $elem['PROPERTY_RENDER_VALUE'];
            $services[$elem["ID"]]['CITIES'][] = $elem['PROPERTY_CITIES_VALUE'];
        }



       return $services;
    }
    public function executeComponent()
    {
        $this->arResult['SERVICES'] = $this->getServices();
        $this->includeComponentTemplate();
        return $this->arResult;
    }

}
