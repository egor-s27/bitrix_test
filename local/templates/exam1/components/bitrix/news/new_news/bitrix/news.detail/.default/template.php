<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="review-block">
    <div class="review-text">
        <div class="review-text-cont">
            <? if ($arResult["NAV_RESULT"]): ?>
                <? if ($arParams["DISPLAY_TOP_PAGER"]): ?><?= $arResult["NAV_STRING"] ?><br/><? endif; ?>
                <? echo $arResult["NAV_TEXT"]; ?>
                <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?><br/><?= $arResult["NAV_STRING"] ?><? endif; ?>
            <? elseif ($arResult["DETAIL_TEXT"] <> ''): ?>
                <? echo $arResult["DETAIL_TEXT"]; ?>
            <? else: ?>
                <? echo $arResult["PREVIEW_TEXT"]; ?>
            <? endif ?>
        </div>
        <div class="review-autor">
            <? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
                <?= $arResult["NAME"] . "," ?>
            <? endif; ?>
            <? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
                <?= $arResult["DISPLAY_ACTIVE_FROM"] ?>
            <? endif; ?>
            <? foreach ($arResult["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
                <? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
                    <?= "," . implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
                <? else: ?>
                    <?= ", " . $arProperty["DISPLAY_VALUE"]; ?>
                <? endif ?>
                <br/>
            <? endforeach; ?>
        </div>
    </div>
<!--    <pre>--><?php //print_r($arResult["PROPERTIES"]);?><!--</pre>-->
<!--    <pre>--><?php //print_r(CFile::GetPath($arResult["PROPERTIES"]["DOCX"]["VALUE"][0]));?><!--</pre>-->
    <div style="clear: both;" class="review-img-wrap">
        <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
            <img
                    class="detail_picture"
                    border="0"
                    src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                    width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
                    height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>"
                    alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                    title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
            />
        <? endif ?>
    </div>
    <div class="exam-review-doc">
        <? foreach ($arResult["FIELDS"] as $code => $value):
            if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code) {
                ?><?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?
                if (!empty($value) && is_array($value)) {
                    ?><img border="0" src="<?= $value["SRC"] ?>" width="<?= $value["WIDTH"] ?>"
                           height="<?= $value["HEIGHT"] ?>"><?
                }
            } else {
                ?><?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?><?
            }
            ?><br/>
        <? endforeach; ?>
    </div>

    <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '')): ?>
        <p><?= $arResult["FIELDS"]["PREVIEW_TEXT"];
            unset($arResult["FIELDS"]["PREVIEW_TEXT"]); ?></p>
    <? endif; ?>
    <div style="clear:both"></div>
    <br/>

    <? if (array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y") {
        ?>
        <div class="news-detail-share">
            <noindex>
                <?
                $APPLICATION->IncludeComponent("bitrix:main.share", "", array(
                    "HANDLERS" => $arParams["SHARE_HANDLERS"],
                    "PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
                    "PAGE_TITLE" => $arResult["~NAME"],
                    "SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
                    "SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
                    "HIDE" => $arParams["SHARE_HIDE"],
                ),
                    $component,
                    array("HIDE_ICONS" => "Y")
                );
                ?>
            </noindex>
        </div>
        <?
    }
    ?>
</div>