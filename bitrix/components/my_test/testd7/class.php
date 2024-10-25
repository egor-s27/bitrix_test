<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true);

// пространства имен для загрузки необходимых файлов, классов, модулей
use Bitrix\Main\Loader;

class CIblocList extends CBitrixComponent
{
    public function executeComponent()
    {
        if (Loader::includeModule("iblock")) {
            $el = \Bitrix\Iblock\Elements\ElementRewTable::getList([
                'filter' => ['=ACTIVE' => 'Y'],
                'select' => ['ID', 'NAME'],
            ])->fetchAll();

            $arIBlock = \Bitrix\Iblock\IblockTable::getList([
                'filter' => ['ID' => 5, 'ACTIVE' => 'Y',],
                'select' => ["NAME"],
            ])->fetchAll();
            $result["ELEMENT"] = $el;
            $result["IBLOCK_NAME"] = $arIBlock[0]["NAME"];
            $this->arResult = $result; // Присваивание значения arResult
            $this->includeComponentTemplate(); //Подключение шаблона !ОБЯЗАТЕЛЬНО!
        }
    }

    // подготовка массива $arResult
//    protected function getResult()
//    {
//        if (Loader::includeModule("iblock")) {
//            $res = \Bitrix\Iblock\Elements\ElementRewTable::getList([
//                'filter' => ['=ACTIVE' => 'Y'],
//                'select' => ['ID', 'NAME'],
//            ])->fetchAll();
//            $this->arResult["ITEM"] = $res;
//
//            $arIBlock = \Bitrix\Iblock\IblockTable::getList([
//                'filter' => ['ID' => 5, 'ACTIVE' => 'Y',],
//                'select' => ["NAME"],
//            ])->fetchAll();
//            $this->arResult["NAME_IBLOCK"] = $arIBlock;
//        }
//
//    }
}
