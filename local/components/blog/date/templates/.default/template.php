<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<p style="
        color: <?=$arParams['COLOR']?>;
        font-size: <?=$arParams["FONT-SIZE"]?>px;
        font-weight: <?= $arParams["FONT-WEIGHT"] === 'Y' ? 'bold' : 'normal' ?>">
        <?=$arResult['DATE']?>
</p>
