<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	<div id="banners"> 					
		<div id="b_nav"> 
			<?$i = 0;?>
			<?foreach($arResult["ITEMS"] as $arItem):$i++;?>
				<div<?if($i == 1){?> class="act"<?}?>><?=$i;?></div>
			<?endforeach;?>						
		</div>
		<?$i = 0;?>
		<?foreach($arResult["ITEMS"] as $arItem):$i++;?>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"<?if($i == 1){?> class="act"<?}?> />
		<?endforeach;?>
	</div>
<?endif?>
