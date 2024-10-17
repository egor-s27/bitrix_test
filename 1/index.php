<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

use Bitrix\Main\Loader;

Loader::includeModule('iblock');


$item = [];
$filter = ['IBLOCK_ID' => 4, 'ID' => 30];
$select = ['IBLOCK_ID', 'ID', 'NAME'];
$ob = CIBlockElement::getList(false, $filter, false, false, $select);
$res = $ob->Fetch();

print_r($res);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");