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

    private function getCountries(): array
    {
        $countries = [];
        $arFilter = ["IBLOCK_ID" => 4, "ACTIVE" => "Y"];
        $arSelect = ["PROPERTY_COUNTRY"];

        $result = CIBlockElement::GetList(
            Array(), $arFilter, false, false, $arSelect);

        while ($elem = $result->Fetch()) {
            $countries[$elem["PROPERTY_COUNTRY_VALUE"]] = $elem["PROPERTY_COUNTRY_VALUE"];
        }

        return $countries;
    }
    private function getAddresses(): array
    {
        $addresses = [];
        $arFilter = ["IBLOCK_ID" => 4, "ACTIVE" => "Y"];
        if ($_GET["country_filter"]) {
            $arFilter["PROPERTY_COUNTRY"] = $_GET["country_filter"];
        }
        $arSelect = ["ID", "NAME", "PROPERTY_CITY", "PROPERTY_COUNTRY", "PROPERTY_STREET"];

        $res = CIBlockElement::GetList(
            ["PROPERTY_COUNTRY" => "ASC"], $arFilter, false, false, $arSelect
        );
        while ($elem = $res->Fetch()) {
            $addresses[$elem["ID"]]["ID"] = $elem["ID"];
            $addresses[$elem["ID"]]["NAME"] = $elem["NAME"];
            $addresses[$elem["ID"]]["CITY"] = $elem["PROPERTY_CITY_VALUE"];
            $addresses[$elem["ID"]]["COUNTRY"] = $elem["PROPERTY_COUNTRY_VALUE"];
            $addresses[$elem["ID"]]["STREET"] = $elem["PROPERTY_STREET_VALUE"];

        };
        return $addresses;
    }

    public function executeComponent()
    {
        $this->arResult["ADDRESSES"] = $this->getAddresses();
        $this->arResult["COUNTRIES"] = $this->getCountries();
        $this->includeComponentTemplate();
        return $this->arResult;
    }
}

