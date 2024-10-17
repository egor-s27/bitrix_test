<div class="side-block side-action">
    <img src="<?SITE_TEMPLATE_PATH?>/img/side-action-bg.jpg" alt="" class="bg">
    <div class="photo-block">
        <?$APPLICATION->IncludeComponent(
            "bitrix:main.include",
            "",
            Array(
                "AREA_FILE_RECURSIVE" => "Y",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/local/include/inc_img-action.php"
            )
        );?>
    </div>
    <div class="text-block">
        <div class="title">Акция!</div>
        <p>Мебельная полка всего за 560 <span class="r">a</span>
        </p>
    </div>
    <a href="" class="btn-more">подробнее</a>
</div>
