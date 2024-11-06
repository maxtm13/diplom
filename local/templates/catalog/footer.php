<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<footer class="footer">
    <div class="container">
        <div class="footer__wrp">
            <nav>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "btmfirst",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "footer"
                    ),
                    false
                );?>
<!--                <ul class="footer__nav-list">-->
<!--                    <li><a href="#">каталог</a></li>-->
<!--                    <li><a href="#">о магазине</a></li>-->
<!--                    <li><a href="#">контакты</a></li>-->
<!--                    <li><a href="#">доставка и оплата</a></li>-->
<!--                </ul>-->
            </nav>
            <nav>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "btmsecond",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "footer"
                    ),
                    false
                );?>
<!--                <ul class="footer__nav-list">-->
<!--                    <li><a href="#">карьера в нашем магазине</a></li>-->
<!--                    <li><a href="#">как оформить возврат</a></li>-->
<!--                    <li><a href="#">правила магазина</a></li>-->
<!--                    <li><a href="#">соглашение о конфиденциальности</a></li>-->
<!--                </ul>-->
            </nav>
            <div class="footer__form">
                <h2>подписаться на новости магазина go&ride</h2>
<!--                <form action="#">-->
<!--                    <div class="footer__form-wrp">-->
<!--                        <label>-->
<!--                            <input type="email" placeholder="Enter your Email adress" required>-->
<!--                            <span class="visually-hidden">email</span>-->
<!--                        </label>-->
<!--                        <button>подписаться</button>-->
<!--                    </div>-->
<!--                    <span>Продолжая, вы соглашаетесь с нашей политикой конфиденциальности.</span>-->
<!--                </form>-->
                <?$APPLICATION->IncludeComponent(
                    "bitrix:subscribe.form",
                    "subscribe",
                    Array(
                        "CACHE_TIME" => "3600",
                        "CACHE_TYPE" => "A",
                        "PAGE" => "#SITE_DIR#personal/subscribe/subscr_edit.php",
                        "SHOW_HIDDEN" => "N",
                        "USE_PERSONALIZATION" => "Y"
                    )
                );?>
            </div>
        </div>
        <div class="footer__social-wrp">
            <ul class="footer__social-list">
                <li>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR."include/insta_link.php"),
                        false
                    );?>
                </li>
                <li>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR."include/facebook_link.php"),
                        false
                    );?>
                </li>
                <li>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => SITE_DIR."include/tweeter_link.php"),
                        false
                    );?>
                </li>
            </ul>
            <span><?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR."include/go_ride_copyright.php"),
                    false
                );?>
                </span>
        </div>
    </div>
</footer>
<!--<script defer src="js/jquery.js"></script>-->
<!--<script defer src="js/slick.js"></script>-->
<!--<script defer src="js/scripts.js"></script>-->
</body>

</html>
