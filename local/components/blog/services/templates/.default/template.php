<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */
dump($arResult)
?>

<table style="width:100%">
    <tr class="header-table">
        <th>Наименование</th>
        <th>Стоимость</th>
        <th>Предоставляется</th>
        <th>Город</th>
    </tr>
    <?php foreach ($arResult['SERVICES'] as $service): ?>
        <tr>
            <td><?= $service['NAME']?></td>
            <td><?= $service['COST']?></td>
            <td><?= $service['RENDER']?></td>
            <td><?= $service['CITY']?></td>
        </tr>
    <?php endforeach;?>
</table>


<style>
    table, th, td {
        border:1px solid black;
    }
    .header-table {
        font-weight: bold;
        font-style: italic;
        border:3px solid black;
    }
    .country_select {
        margin: 20px 0
    }
</style>