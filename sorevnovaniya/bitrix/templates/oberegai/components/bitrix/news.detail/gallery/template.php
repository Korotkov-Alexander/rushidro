<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="news-detail list-material">																																																														
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<div class="m-date"><?=mb_strtolower($arResult["DISPLAY_ACTIVE_FROM"])?></div>
	<?endif;?>
	<?echo $arResult["DETAIL_TEXT"];?>

	<?php if ($arResult['PROPERTIES']['NEWS']['VALUE']): ?>

		<?$APPLICATION->IncludeComponent("bitrix:news.detail", "sub_gallery", array(
			"IBLOCK_TYPE" => "oberegai",
			"IBLOCK_ID" => "8",
			"ELEMENT_ID" => $arResult['PROPERTIES']['NEWS']['VALUE'],
			"ELEMENT_CODE" => "",
			"CHECK_DATES" => "Y",
			"FIELD_CODE" => array(
				0 => "",
				1 => "",
			),
			"PROPERTY_CODE" => array(
				"PHOTO",
				"VIDEO",
				"FORMAT",
			),
			"IBLOCK_URL" => "",																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																											
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "N",
			"META_KEYWORDS" => "-",
			"META_DESCRIPTION" => "-",
			"BROWSER_TITLE" => "-",
			"SET_TITLE" => "Y",
			"SET_STATUS_404" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "Y",
			"ACTIVE_DATE_FORMAT" => "j F Y г.",
			"USE_PERMISSIONS" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"PAGER_TITLE" => "Страница",
			"PAGER_TEMPLATE" => "",
			"PAGER_SHOW_ALL" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"USE_SHARE" => "N",
			"AJAX_OPTION_ADDITIONAL" => ""
			),
			false
		);?>

	<?php else: ?>

		<?php require dirname(__FILE__).'/../sub_gallery/template.php'; ?>

	<?php endif; ?>
</div>

