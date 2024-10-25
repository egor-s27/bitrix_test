<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
?>

<!--<pre>--><?//print_r($arResult)?><!--</pre>-->

<?php $APPLICATION->SetTitle($arResult["IBLOCK_NAME"]);?>
<ul>
    <? foreach ($arResult["ELEMENT"] as $arItem): ?>
        <li><?= $arItem["ID"] ?> - <?= $arItem["NAME"] ?></li>
    <? endforeach; ?>
</ul>
