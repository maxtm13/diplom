<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var string $discountPositionClass
 * @var string $labelPositionClass
 * @var CatalogSectionComponent $component
 */
?>
<?php
/*
 					<div class="slider__item-wrp">
                        <img src="img/good-1.jpg" alt="good-1">
                        <div class="slider__item-content-wrp">
                            <h3><a href="product.html">Cycling Gloves, Adult</a></h3>
                            <p>95.00 р</p>
                            <p>Артикул</p>
                        </div>
                    </div>
 */
?>
<div class="slider__item-wrp">

		<img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="">
		<div class="slider__item-content-wrp">
			<h3><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$productTitle?></a></h3>
			<p><?=$price['PRINT_RATIO_PRICE']?></p>
			<?$articul = $item['DISPLAY_PROPERTIES']['ARTIKUL'];
			if (!empty($articul['VALUE'])) {?>
				<p><?=$articul['~NAME'] . ': '.$articul['VALUE']?></p>
			<? } ?>


		</div>
</div>
		<?
		echo '<pre>';
		var_dump($itemIds['BASKET_ACTIONS']);
		echo '</pre>';?>
		
		<div class="product-item-info-container product-item-hidden" data-entity="buttons-block">
<?
			if ($actualItem['CAN_BUY'])
			{
				?>
				<div class="product-item-button-container" id="<?=$itemIds['BASKET_ACTIONS']?>">
					<a class="btn btn-default <?=$buttonSizeClass?>" id="<?=$itemIds['BUY_LINK']?>"
					   href="javascript:void(0)" rel="nofollow">
						<?=($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET'])?>
					</a>
				</div>
				<?
			}
			else
			{
				?>
				<div class="product-item-button-container">

					<a class="btn btn-link <?=$buttonSizeClass?>"
					   id="<?=$itemIds['NOT_AVAILABLE_MESS']?>" href="javascript:void(0)" rel="nofollow">
						<?=$arParams['MESS_NOT_AVAILABLE']?>
					</a>
				</div>
				<?
			}

		?>
		</div>


