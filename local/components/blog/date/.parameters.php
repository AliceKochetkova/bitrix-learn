<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = [
    "PARAMETERS" => [
        "COLOR" => [
            "PARENT" => "VISUAL",
            "NAME" => "Цвет даты",
            "TYPE" => "LIST",
            "VALUES" => [
                "black" => "черный",
                "red" => "красный",
                "blue" => "синий",
                "green" => "зеленый",
                "purple" => "фиолетовый"
            ],
            "DEFAULT" => "black"
        ],
        "FONT-SIZE" => [
            "PARENT" => "VISUAL",
            "NAME" => "Размер шрифта",
            "TYPE" => "STRING",
            "DEFAULT" => "20px"
        ],
       "FONT-WEIGHT" => [
          "PARENT" => "VISUAL",
           "NAME" => "Жирный шрифт",
           "TYPE" => "CHECKBOX",
           "DEFAULT" => "normal"
       ]
    ]
];