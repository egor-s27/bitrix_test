<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
    <pre>
<?php
if (CModule::IncludeModule("iblock")) {
    //здесь можно использовать функции и классы модуля

    $arSelect = array("ID", "NAME");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
    $arFilter = array("IBLOCK_ID" => 5, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
    $res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 50), $arSelect);
    $arBlock = GetIBlock("3");

    while ($arItem = $res->Fetch()) {
        $arResult[$arItem["ID"]] = $arItem["NAME"];
    }
}
?>
    </pre>
    <h1><?= $arBlock["NAME"] ?></h1>
    <ul>
        <?php foreach ($arResult as $id => $arElement): ?>
            <li><?= $id ?> - <?= $arElement ?></li>
        <?php endforeach; ?>
    </ul>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>