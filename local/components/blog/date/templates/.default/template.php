<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<p style="
        color: <?=$arParams['COLOR']?>;
        font-size: <?=$arParams["FONT-SIZE"]?>px;
        font-weight: <?= $arParams["FONT-WEIGHT"] === 'Y' ? 'bold' : 'normal' ?>;
        text-align: end;
        margin-top: 30px">
        <?=$arResult['DATE']?>
</p>
