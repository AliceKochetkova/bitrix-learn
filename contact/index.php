<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Contact");

$APPLICATION->IncludeComponent(
    "blog:addresses",
    "",
    array()
);

$APPLICATION->IncludeComponent(
    "blog:date",
    ".default",
    array(
        "COLOR" => "black",
        "COMPONENT_TEMPLATE" => ".default",
        "FONT-SIZE" => "20",
        "FONT-WEIGHT" => "N"
    )
);

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");