<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

?>

<table style="width:100%">
    <tr class="header-table">
        <th>Страна</th>
        <th>Город</th>
        <th>Улица</th>
    </tr>
<?php foreach ($arResult['ADDRESSES'] as $address): ?>
    <tr>
        <td><?= $address['COUNTRY']?></td>
        <td><?= $address['CITY']?></td>
        <td><?= $address['STREET']?></td>
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
</style>