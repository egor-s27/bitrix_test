<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

$this->setFrameMode(true);

if (empty($arResult["ALL_ITEMS"]))
    return;
?>
<nav class="nav">
    <div class="inner-wrap">
        <div class="menu-block popup-wrap">
            <a href="" class="btn-menu btn-toggle"></a>
            <div class="menu popup-block">
                <ul class="">
                    <li class="main-page"><a href="/"><?=GetMessage("MAIN")?></a>
                    <? foreach ($arResult["MENU_STRUCTURE"] as $itemID => $arColumns):
                    if($arResult["ALL_ITEMS"][$itemID]["PERMISSION"] == "D") continue;?>
                         <!-- first level-->
                        <li>
                            <a href="<?= $arResult["ALL_ITEMS"][$itemID]["LINK"] ?>">
                                <?= $arResult["ALL_ITEMS"][$itemID]["TEXT"] ?>
                            </a>
                            <? foreach ($arColumns as $key => $arRow): ?>
                                <ul>
                                    <?
                                    $text_menu_top = trim($APPLICATION->GetDirProperty("text_menu_top", $arResult["ALL_ITEMS"][$itemID]["LINK"]));
                                    if ($text_menu_top):
                                    ?>
                                    <div class="menu-text"><?=$text_menu_top?></div>
                                    <?endif;?>
                                    <? foreach ($arRow as $itemIdLevel_2 => $arLevel_3):
                                        if($arResult["ALL_ITEMS"][$itemIdLevel_2]["PERMISSION"] == "D") continue;
                                        ?>  <!-- second level-->
                                        <li>
                                            <a href="<?= $arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"] ?>">
                                                <?= $arResult["ALL_ITEMS"][$itemIdLevel_2]["TEXT"] ?>
                                            </a>
                                            <? if (is_array($arLevel_3) && !empty($arLevel_3)): ?>
                                                <ul>
                                                    <?
                                                    $text_menu_top = trim($APPLICATION->GetDirProperty("text_menu_top", $arResult["ALL_ITEMS"][$itemIdLevel_2]["LINK"]));
                                                    if ($text_menu_top):
                                                    ?>
                                                        <div class="menu-text"><?=$text_menu_top?></div>
                                                    <?endif;?>
                                                    <? foreach ($arLevel_3 as $itemIdLevel_3): ?>    <!-- third level-->
                                                        <li>
                                                            <a href="<?= $arResult["ALL_ITEMS"][$itemIdLevel_3]["LINK"] ?>">
                                                                <?= $arResult["ALL_ITEMS"][$itemIdLevel_3]["TEXT"] ?>
                                                            </a>
                                                        </li>
                                                    <? endforeach; ?>
                                                </ul>
                                            <? endif ?>
                                        </li>
                                    <? endforeach; ?>
                                </ul>
                            <? endforeach; ?>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
