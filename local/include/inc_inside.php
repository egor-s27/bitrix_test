<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"left",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y"
	)
);?> <br>
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
	 <!-- side action --> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/local/include/inc_action.php"
	)
);?> <!-- /side action -->
</div>
 <!-- /side action --> <!-- footer rew slider box -->
<div class="item-wrap">
	<div class="rew-footer-carousel">
		<div class="item">
			<div class="side-block side-opin">
				<div class="inner-block">
					<div class="title">
						<div class="photo-block">
 <img src="/local/templates/exam1/img/side-opin.jpg" alt="">
						</div>
						<div class="name-block">
 <a href="">Дмитрий Иванов</a>
						</div>
						<div class="pos-block">
							 Генеральный директор,"Офис+"
						</div>
					</div>
					<div class="text-block">
						 “В магзине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного...
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="side-block side-opin">
				<div class="inner-block">
					<div class="title">
						<div class="photo-block">
 <img src="/local/templates/exam1/img/side-opin.jpg" alt="">
						</div>
						<div class="name-block">
 <a href="">Дмитрий Иванов</a>
						</div>
						<div class="pos-block">
							 Генеральный директор,"Офис+"
						</div>
					</div>
					<div class="text-block">
						 “В магазине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного...
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
 <br>