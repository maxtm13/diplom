<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/bitrix/modules/main/include/prolog_before.php');
use Bitrix\Main\Loader;
//if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
//    die('prolog');
//}


 Loader::includeModule('subscribe'); // Подключаем модуль Подписка, рассылки

if (!empty($_POST['email'])) {

    global $USER;
    $email = $_POST['email'];

    $subscribeFields = [
        'USER_ID' => ($USER->IsAuthorized() ? $USER->GetID() : false),
        'FORMAT' => 'html',
        'EMAIL' => $email,
        'ACTIVE' => 'Y',
        'CONFIRMED' => 'Y', // Подтверждаем подписку без подтверждения по почте
        'SEND_CONFIRM' => 'N', // Не отправялем письмо с подтверждение подписчику
        'RUB_ID' => [1] // Указываем ID рассылки
    ];

    $subscr = new CSubscription;
    $ID = $subscr->Add($subscribeFields);

    if ($ID > 0) {
        CSubscription::Authorize($ID);
        echo 'Вы успешно подписались на рассылку';
    }
    else {
       $message ="Error adding subscription: ".$subscr->LAST_ERROR;
       echo $message;
    }

}

