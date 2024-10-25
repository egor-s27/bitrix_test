<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

if (\Bitrix\Main\Loader::includeModule("iblock")) {

    $arResult = \Bitrix\Iblock\Elements\ElementRewTable::getList([
        'filter' => ['=ACTIVE' => 'Y'],
        'select' => ['ID', 'NAME'],
    ])->fetchAll();

    $arIBlock = \Bitrix\Iblock\IblockTable::getList([
        'filter' => ['ID' => 5, 'ACTIVE' => 'Y',],
        'select' => ["NAME"],
    ])->fetchAll();
    $APPLICATION->SetTitle($arIBlock[0]["NAME"]);
} ?>
    <ul>
        <? foreach ($arResult as $arItem): ?>
            <li><?= $arItem["ID"] ?> - <?= $arItem["NAME"] ?></li>
        <? endforeach; ?>
    </ul>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>