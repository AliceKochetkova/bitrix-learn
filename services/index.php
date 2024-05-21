<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Services");
$APPLICATION->SetPageProperty('title', 'Services');
    $APPLICATION->IncludeComponent(
    "blog:services",
    ".default",
    array()
    );
?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>