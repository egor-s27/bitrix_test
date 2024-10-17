<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_RECURSIVE" => "Y",
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/local/include/inc_baza.php"
    )
);?>
<div class="item-wrap">
    <!-- side action -->
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_RECURSIVE" => "Y",
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/inc_action.php"
        )
    );?>
    <!-- /side action -->
</div>
<!-- /side action -->
<!-- footer rew slider box -->
<div class="item-wrap">
    <div class="rew-footer-carousel">
        <div class="item">
            <div class="side-block side-opin">
                <div class="inner-block">
                    <div class="title">
                        <div class="photo-block">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/side-opin.jpg" alt="">
                        </div>
                        <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                        <div class="pos-block">Генеральный директор,"Офис+"</div>
                    </div>
                    <div class="text-block">“В магзине предоставили потрясающий выбор
                        расцветок, а также, получил большую скидку по карте постоянного...</div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="side-block side-opin">
                <div class="inner-block">
                    <div class="title">
                        <div class="photo-block">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/side-opin.jpg" alt="">
                        </div>
                        <div class="name-block"><a href="">Дмитрий Иванов</a></div>
                        <div class="pos-block">Генеральный директор,"Офис+"</div>
                    </div>
                    <div class="text-block">“В магазине предоставили потрясающий выбор
                        расцветок, а также, получил большую скидку по карте постоянного...</div>
                </div>
            </div>
        </div>
    </div>
</div>
