<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) ;

use Bitrix\Main\Loader;

if (!Loader::includeModule('iblock')) {
    return;
}

$arTypesEx = CIBlockParameters::GetIBlockTypes(); // Получение массива всех типов инфоблоков

$arIBlocks = [];
$iblockFilter = [
    'ACTIVE' => 'Y',
];
if (!empty($arCurrentValues['IBLOCK_TYPE'])) {
    $iblockFilter['TYPE'] = $arCurrentValues['IBLOCK_TYPE'];
}
if (isset($_REQUEST['site'])) {
    $iblockFilter['SITE_ID'] = $_REQUEST['site'];
}
$db_iblock = CIBlock::GetList(["SORT" => "ASC"], $iblockFilter); // Получение списка информационных блоков по фильтру arFilter

while ($arRes = $db_iblock->Fetch()) // Создание массива отфильтрованных инфоблоков
{
    $arIBlocks[$arRes["ID"]] = "[" . $arRes["ID"] . "] " . $arRes["NAME"];
}

$arComponentParameters = [
    "PARAMETERS" => [
        "IBLOCK_TYPE" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage("T_IBLOCK_DESC_LIST_TYPE"),
            "TYPE" => "LIST",
            "VALUES" => $arTypesEx,
            "DEFAULT" => "news",
            "REFRESH" => "Y",
        ],
        "IBLOCK_ID" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage("T_IBLOCK_DESC_LIST_ID"),
            "TYPE" => "LIST",
            "VALUES" => $arIBlocks,
            "DEFAULT" => '={$_REQUEST["ID"]}',
            "ADDITIONAL_VALUES" => "Y",
            "REFRESH" => "Y",
        ],
    ],
];
