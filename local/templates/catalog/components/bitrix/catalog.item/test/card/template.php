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

<div class="slider__item product-item">

		<div class="slider__item-wrp products-list__content-wrp product-item-title">

			<img src="<?=$item['DETAIL_PICTURE']['SAFE_SRC']?>" alt="<?=$item['DETAIL_PICTURE']['ALT']?>">
			<? if ($itemHasDetailUrl) { ?>
			<div class="goods__item-content-wrp">
				<h3><a href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$productTitle?>"><?=$productTitle?></a></h3>
			</div>
			<? }

			else echo $productTitle;
			?>
			<p class="price"><?=$price['PRINT_RATIO_PRICE']?></p>
			<p><? isset($item['DISPLAY_PROPERTIES']['ARTIKUL']) ? print_r($item['DISPLAY_PROPERTIES']['ARTIKUL']['NAME'] . ' ' .$item['DISPLAY_PROPERTIES']['ARTIKUL']['VALUE']) : '' ;?></p>

		</div>
	<button class="add2basket"  data-id-item="<?=$item['ID']?>">
		купить
	</button>

</div>

