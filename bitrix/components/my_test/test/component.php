<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true);

/** @var array $arParams */

$arResult["IBLOCK_TYPE"] = $arParams["IBLOCK_TYPE"];
$arRes["IBLOCK_ID"] = $arParams["IBLOCK_ID"];

if (CModule::IncludeModule("iblock")) {
    //здесь можно использовать функции и классы модуля

    $arSelect = array("ID", "NAME");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
    $arFilter = array("IBLOCK_ID" => $arRes["IBLOCK_ID"], "ACTIVE_DATE" => "Y", "ACTIVE" => "Y");
    $res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 50), $arSelect);
//    $arBlock = GetIBlock("3");

    while ($arItem = $res->Fetch()) {
        $arResult["ELEMENT"][$arItem["ID"]] = $arItem["NAME"];
    }
}

$this->IncludeComponentTemplate();