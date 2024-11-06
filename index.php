<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
    <main>
        <section class="products">

            <div class="container">
                <h2>Популярные товары</h2>
                <div class="slider slick-good-slider">
                    <div class="slider__item">
                        <div class="slider__item-wrp">
                            <img src="img/good-1.jpg" alt="good-1">
                            <div class="slider__item-content-wrp">
                                <h3><a href="product.html">Cycling Gloves, Adult</a></h3>
                                <p>95.00 р</p>
                                <p>Артикул</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-wrp">
                            <img src="img/good-1.jpg" alt="good-1">
                            <div class="slider__item-content-wrp">
                                <h3><a href="#">Cycling Gloves, Adult</a></h3>
                                <p>95.00 р</p>
                                <p>Артикул</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-wrp">
                            <img src="img/good-1.jpg" alt="good-1">
                            <div class="slider__item-content-wrp">
                                <h3><a href="#">Cycling Gloves, Adult</a></h3>
                                <p>95.00 р</p>
                                <p>Артикул</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-wrp">
                            <img src="img/good-1.jpg" alt="good-1">
                            <div class="slider__item-content-wrp">
                                <h3><a href="#">Cycling Gloves, Adult</a></h3>
                                <p>95.00 р</p>
                                <p>Артикул</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-wrp">
                            <img src="img/good-1.jpg" alt="good-1">
                            <div class="slider__item-content-wrp">
                                <h3><a href="#">Cycling Gloves, Adult</a></h3>
                                <p>95.00 р</p>
                                <p>Артикул</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-wrp">
                            <img src="img/good-1.jpg" alt="good-1">
                            <div class="slider__item-content-wrp">
                                <h3><a href="#">Cycling Gloves, Adult</a></h3>
                                <p>95.00 р</p>
                                <p>Артикул</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div class="slider__item-wrp">
                            <img src="img/good-1.jpg" alt="good-1">
                            <div class="slider__item-content-wrp">
                                <h3><a href="#">Cycling Gloves, Adult</a></h3>
                                <p>95.00 р</p>
                                <p>Артикул</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="ride-us">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH" => "/include/ride_us.php"
                ),
                false
            );?>


        </section>
        <section class="city-bike">
            <div class="container">
<!--                <h2>Городские велосипеды</h2>-->


                <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "BTN_NAME",
			1 => "BTN_LINK",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>

                
<!--                <div class="slider slick-city-slider">-->
<!--                    <div class="slider__item">-->
<!--                        <div class="city-bike__slide-wrp">-->
<!--                            <img src="img/city-bike.png" alt="city-bike">-->
<!--                            <div class="city-bike__content">-->
<!--                                <p>Предназначены для езды по дорогам с твердым покрытиям на не большие расстояния. Имеют гладкие покрышки, жесткую вилки, комфортную посадку. Как правило, сразу же оборудованы крыльями и багажником.</p>-->
<!--                                <a href="#">в раздел</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="slider__item">-->
<!--                        <div class="city-bike__slide-wrp">-->
<!--                            <img src="img/city-bike.png" alt="city-bike">-->
<!--                            <div class="city-bike__content">-->
<!--                                <p>Это особенная модель городского велосипеда, на которую сейчас действуют скидки и акции</p>-->
<!--                                <a href="#">подробнее</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="slider__item">-->
<!--                        <div class="city-bike__slide-wrp">-->
<!--                            <img src="img/city-bike.png" alt="city-bike">-->
<!--                            <div class="city-bike__content">-->
<!--                                <p>Дополнительные аксессуары для городских велосипедов. Все самое нужное и полезное. Без этих штучек ваша дорога будет скучна и безрадостно. Просто необходимо их приобрести</p>-->
<!--                                <a href="#">срочно купить</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
            </div>
        </section>
        <section class="sale">
            <div class="container sale__wrp">
                <h2>Скидка 5%</h2>
                <div class="sale__img-wrp">
                    <?php
                    $arFilter = [
                        "IBLOCK_ID" =>'4',
                        "SECTION_ID"=>'21',
                    ];
                    $res = CIBlockElement::GetList(Array("RAND"=>"ASC"), $arFilter, false, Array("nTopCount"=>1), ['PREVIEW_PICTURE', 'NAME']);
                    $ob = $res->GetNextElement()->GetFields();
                    $img['SRC'] = CFile::GetPath($ob['PREVIEW_PICTURE']);
                    $img['NAME'] = $ob['~NAME'];
                    ?>

                    <img src="<?=$img['SRC']?>" alt="<?=$img['NAME']?>">
                </div>
            </div>
        </section>
        <section class="reviewed">
            <div class="container">
                <?$APPLICATION->IncludeComponent("bitrix:catalog.products.viewed", "viewed_on_main", Array(
                    "ACTION_VARIABLE" => "action_cpv",	// Название переменной, в которой передается действие
                        "ADDITIONAL_PICT_PROP_2" => "-",	// Дополнительная картинка
                        "ADDITIONAL_PICT_PROP_3" => "-",	// Дополнительная картинка
                        "ADDITIONAL_PICT_PROP_4" => "-",	// Дополнительная картинка
                        "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
                        "ADD_TO_BASKET_ACTION" => "ADD",	// Показывать кнопку добавления в корзину или покупки
                        "BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
                        "DEPTH" => "2",	// Максимальная отображаемая глубина разделов
                        "DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
                        "ENLARGE_PRODUCT" => "STRICT",	// Выделять товары в списке
                        "HIDE_NOT_AVAILABLE" => "Y",	// Недоступные товары
                        "HIDE_NOT_AVAILABLE_OFFERS" => "N",	// Недоступные торговые предложения
                        "IBLOCK_ID" => "4",	// Инфоблок
                        "IBLOCK_MODE" => "single",	// Показывать товары из
                        "IBLOCK_TYPE" => "catalog",	// Тип инфоблока
                        "LABEL_PROP_2" => "",	// Свойство меток товара
                        "LABEL_PROP_4" => "",	// Свойство меток товара
                        "LABEL_PROP_POSITION" => "top-left",	// Расположение меток товара
                        "MESS_BTN_ADD_TO_BASKET" => "В корзину срочно",	// Текст кнопки "Добавить в корзину"
                        "MESS_BTN_BUY" => "Купить срочно",	// Текст кнопки "Купить"
                        "MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
                        "MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
                        "MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
                        "PAGE_ELEMENT_COUNT" => "9",	// Количество элементов на странице
                        "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
                        "PRICE_CODE" => array(	// Тип цены
                            0 => "BASE",
                        ),
                        "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
                        "PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",	// Порядок отображения блоков товара
                        "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
                        "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
                        "PRODUCT_QUANTITY_VARIABLE" => "quantity",	// Название переменной, в которой передается количество товара
                        "PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false},{'VARIANT':'0','BIG_DATA':false}]",	// Вариант отображения товаров
                        "PRODUCT_SUBSCRIPTION" => "Y",	// Разрешить оповещения для отсутствующих товаров
                        "SECTION_CODE" => "",	// Код раздела
                        "SECTION_ELEMENT_CODE" => "",	// Символьный код элемента, для которого будет выбран раздел
                        "SECTION_ELEMENT_ID" => $GLOBALS["CATALOG_CURRENT_ELEMENT_ID"],	// ID элемента, для которого будет выбран раздел
                        "SECTION_ID" => $GLOBALS["CATALOG_CURRENT_SECTION_ID"],	// ID раздела
                        "SHOW_CLOSE_POPUP" => "N",	// Показывать кнопку продолжения покупок во всплывающих окнах
                        "SHOW_DISCOUNT_PERCENT" => "N",	// Показывать процент скидки
                        "SHOW_FROM_SECTION" => "N",	// Показывать товары из раздела
                        "SHOW_MAX_QUANTITY" => "N",	// Показывать остаток товара
                        "SHOW_OLD_PRICE" => "N",	// Показывать старую цену
                        "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
                        "SHOW_SLIDER" => "N",	// Показывать слайдер для товаров
                        "SLIDER_INTERVAL" => "3000",
                        "SLIDER_PROGRESS" => "N",
                        "TEMPLATE_THEME" => "blue",	// Цветовая тема
                        "USE_ENHANCED_ECOMMERCE" => "N",	// Отправлять данные электронной торговли в Google и Яндекс
                        "USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
                        "USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
                    ),
                    false
                );?>
                <h2>Уже просмотрели</h2>
                <div class="slider slick-good-slider">
                    <div class="slider__item">
                        <div class="slider__item-wrp">
                            <img src="img/good-1.jpg" alt="good-1">
                            <div class="slider__item-content-wrp">
                                <h3><a href="product.html">Bottle cage</a></h3>
                                <p>95.00 р</p>
                                <p>Артикул</p>
                            </div>
                        </div>
                        <button>купить срочно</button>
                    </div>
                </div>
            </div>
        </section>
    </main>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>