<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) ;

use Bitrix\Main\Loader;

if (!Loader::includeModule('iblock')) {
    return;
}

$arTypesEx = CIBlockParameters::GetIBlockTypes(); // Получение массива всех типов инфоблоков

$arIBlocks = [];

if (!empty($arCurrentValues['IBLOCK_TYPE'])) {
    $iblockFilter['TYPE'] = $arCurrentValues['IBLOCK_TYPE'];
}
if (isset($_REQUEST['site'])) {
    $iblockFilter['SITE_ID'] = $_REQUEST['site'];
}

// Получение списка информационных блоков по фильтру arFilter
$db_iblock = \Bitrix\Iblock\IblockTable::getList([
    'filter' => ['ACTIVE' => 'Y'],
    'select' => ["NAME", "ID"]
])->fetchAll();

foreach ($db_iblock as $row) {
    $arIBlocks[$row["ID"]] = "[" . $row["ID"] . "] " . $row["NAME"];
}

$arComponentParameters = [
    "PARAMETERS" => [
        "IBLOCK_TYPE" => [
            "PARENT" => "BASE",
            "NAME" => GetMessage("T_IBLOCK_DESC_LIST_TYPE"),
            "TYPE" => "LIST",
            "VALUES" => $arTypesEx,
            "DEFAULT" => '={$_REQUEST["NAME"]}',
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
