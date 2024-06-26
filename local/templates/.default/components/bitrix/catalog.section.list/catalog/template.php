<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<div class="sidebar_top">
    <h3>Blog Categories</h3>
    <div class="sidebar_top_list">
        <ul>
            <?php foreach ($arResult['SECTIONS'] as $arSection): ?>
                <?php
                $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                ?>
                <li id="<?php echo $this->GetEditAreaId($arSection['ID']); ?>"><a
                            href="<?= $arSection['SECTION_PAGE_URL']; ?>">
                        <span class="category-name"><?= $arSection['NAME']; ?></span> <span
                                    <?php if ($arParams["COUNT_ELEMENTS"]): ?>
                                    class="count">(<?=$arSection['ELEMENT_CNT'];?>)</span>
                        <?php endif; ?>
                        <div class="clear"></div>
                    </a>
                </li>
            <?php endforeach; ?>
            <?php unset($arSection); ?>

        </ul>
    </div>
</div>
