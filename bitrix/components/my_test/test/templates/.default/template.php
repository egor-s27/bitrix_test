<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
?>
<?php $APPLICATION->SetTitle($arResult["IBLOCK_TYPE"]);?>
<ul>
    <?php foreach ($arResult["ELEMENT"] as $id => $arElement): ?>
        <li><?= $id ?> - <?= $arElement ?></li>
    <?php endforeach; ?>
</ul>
