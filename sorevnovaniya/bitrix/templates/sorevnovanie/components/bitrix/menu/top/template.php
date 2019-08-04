<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	<?
	$previousLevel = 0;
	foreach($arResult as $arItem):?>

		<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
			<?=str_repeat("</div></div>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
		<?endif?>

		<?if ($arItem["IS_PARENT"]):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<div class="item"><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>act<?endif?>"><?=$arItem["TEXT"]?></a>
					<div class="top-sub">
			<?else:?>
				<div class="item"><a href="<?=$arItem["LINK"]?>"<?if ($arItem["SELECTED"]):?> class="act"<?endif?>><?=$arItem["TEXT"]?></a>
					<div class="top-sub">
			<?endif?>

		<?else:?>

			<?if ($arItem["PERMISSION"] > "D"):?>

				<?if ($arItem["DEPTH_LEVEL"] == 1):?>
					<div class="item"><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>act<?endif?>"><?=$arItem["TEXT"]?></a></div>
				<?else:?>
					<div class="item"><a href="<?=$arItem["LINK"]?>"<?if ($arItem["SELECTED"]):?> class="act"<?endif?>><?=$arItem["TEXT"]?></a></div>
				<?endif?>

			<?else:?>

				<?if ($arItem["DEPTH_LEVEL"] == 1):?>
					<div class="item"><a href="" class="<?if ($arItem["SELECTED"]):?>act<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></div>
				<?else:?>
					<div class="item"><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></div>
				<?endif?>

			<?endif?>

		<?endif?>

		<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

	<?endforeach?>

	<?if ($previousLevel > 1)://close last item tags?>
		<?=str_repeat("</div></div>", ($previousLevel-1) );?>
	<?endif?>
<?endif?>