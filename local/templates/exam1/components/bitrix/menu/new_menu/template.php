<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="nav">
            <div class="inner-wrap">
                <div class="menu-block popup-wrap">
                    <a href="" class="btn-menu btn-toggle"></a>
                    <div class="menu popup-block">
							<?if (!empty($arResult)):?>
								<ul class="left-menu">
                                    <li class="main-page"><a href="https://dev9.bpmsoft.ru/">Главная</a>
                                    </li>
                                    <?
                                    foreach($arResult as $arItem):
                                        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                                            continue;
                                    ?>
									<?if($arItem["SELECTED"]):?>
										<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
									<?else:?>
										<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
									<?endif?>
<!---->
								    <?endforeach?>

								</ul>
                            <?endif?>
<!--                        <a href="" class="btn-close"></a>-->
                    </div>
                    <div class="menu-overlay"></div>
                </div>
            </div>
</nav>


