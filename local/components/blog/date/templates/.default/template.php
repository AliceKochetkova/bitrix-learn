<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//dump($arParams);
$fontWeight = "";
if ($arParams["FONT-WEIGHT"] === "N") {
    $fontWeight = "normal";
}else {
    $fontWeight = "bold";
}
    ?>
<p style="
        color: <?=$arParams['COLOR']?>;
        font-size: <?=$arParams["FONT-SIZE"]?>px;
        font-weight: <?=$fontWeight?>">
        <?=$arResult['DATE']?>
</p>
