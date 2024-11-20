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