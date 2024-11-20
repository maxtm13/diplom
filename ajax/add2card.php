<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Context;
use Bitrix\Main\Loader;
use Bitrix\Sale\Basket;
use Bitrix\Sale\Fuser;

Loader::includeModule('sale');
Loader::includeModule('iblock');
$siteId = Context::getCurrent()->getSite();
$fUserId = Fuser::getId();
$basket = Basket::loadItemsForFUser($fUserId, $siteId);

if (!empty($_POST['ID'])) {


    $moduleId = 'sale';
    $productId = $_POST['ID'];
    $res = CIBlockElement::GetByID($productId);
    if($ar_res = $res->GetNext())
        echo $ar_res['NAME'];


    $basketItem = $basket->createItem($moduleId, $productId);


    $result = $basketItem->setFields([
//        'NAME' => $ar_res['NAME'],
        'QUANTITY'=> 1,
//        'PRICE' => 100,
//        'BASE_PRICE' => 100,
        'PRODUCT_PROVIDER_CLASS' => Bitrix\Catalog\Product\CatalogProvider::class
//        'CURRENCY' => Bitrix\Currency\CurrencyManager::getBaseCurrency()
    ]);
    if (!$result->isSuccess()) {
    // обработка ошибок
        echo 'error';
    }
    echo 'Товар добавлен';
    $saveResult = $basket->save();
}
