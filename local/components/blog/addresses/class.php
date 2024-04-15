<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

class Address extends CBitrixComponent
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

    public function getAddresses()
    {
        $addresses = [];
        $arFilter = ["IBLOCK_ID" => 4, "ACTIVE" => "Y"];
        $arSelect = ["ID", "NAME", "PROPERTY_CITY", "PROPERTY_COUNTRY", "PROPERTY_STREET"];
        $res = CIBlockElement::GetList(
            ["PROPERTY_COUNTRY" => "ASC"], $arFilter, false, false, $arSelect
        );
        while ($elem = $res->Fetch()) {
            $addresses["COUNTRIES"][$elem["PROPERTY_COUNTRY_VALUE"]] = $elem["PROPERTY_COUNTRY_VALUE"];
            $addresses["ADDRESSES"][$elem["ID"]]["ID"] = $elem["ID"];
            $addresses["ADDRESSES"][$elem["ID"]]["NAME"] = $elem["NAME"];
            $addresses["ADDRESSES"][$elem["ID"]]["CITY"] = $elem["PROPERTY_CITY_VALUE"];
            $addresses["ADDRESSES"][$elem["ID"]]["COUNTRY"] = $elem["PROPERTY_COUNTRY_VALUE"];
            $addresses["ADDRESSES"][$elem["ID"]]["STREET"] = $elem["PROPERTY_STREET_VALUE"];

        };
        return $addresses;
    }

    public function executeComponent()
    {
        $this->arResult = $this->getAddresses();
        $this->includeComponentTemplate();
        return $this->arResult;
    }
}

