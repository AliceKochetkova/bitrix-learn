<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Date");
?>Дата и время:
<?php $APPLICATION->IncludeComponent(
	"blog:date", 
	".default", 
	array(
		"COLOR" => "black",
		"COMPONENT_TEMPLATE" => ".default",
		"FONT-SIZE" => "20",
		"FONT-WEIGHT" => "N"
	),
	false
);?><?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>