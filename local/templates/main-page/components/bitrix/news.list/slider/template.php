<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<h2><?=$arParams["PAGER_TITLE"]?></h2>
<?php
//echo '<pre>';
//print_r($arResult);
//echo '</pre>';

?>
<div class="slider slick-city-slider">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<div class="slider__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="city-bike__slide-wrp">
			<img src="<?echo $arItem["DETAIL_PICTURE"]['SAFE_SRC']?>" alt="<?= $arItem["DETAIL_PICTURE"]['ALT']?>">
			<div class="city-bike__content">
				<p><?=$arItem["PREVIEW_TEXT"]?></p>
				<a href="<?=$arItem['PROPERTIES']['BTN_LINK']['~VALUE']?>"><?=$arItem['PROPERTIES']['BTN_NAME']['~VALUE']?></a>
			</div>
		</div>
	</div>
<? endforeach; ?>
</div>