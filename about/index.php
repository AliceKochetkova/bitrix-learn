<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("About");
$APPLICATION->SetPageProperty('title', 'About');
    ?>

<?php $APPLICATION->IncludeComponent(
    "blog:addresses",
    "",
    Array()
);?>
<?php $APPLICATION->IncludeComponent(
    "blog:date",
    ".default",
    Array(
        "COLOR" => "black",
        "COMPONENT_TEMPLATE" => ".default",
        "FONT-SIZE" => "20",
        "FONT-WEIGHT" => "N"
    )
);
?><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>