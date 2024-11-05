<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @var CMain $APPLICATION */
/** @var CUser $USER */
/** @var CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
?>
<div class="subscribe-form" id="subscribe-form">

    <?php
    $frame = $this->createFrame('subscribe-form', false)->begin();
    ?>
    <form id="subscribe" method="post">
        <div class="footer__form-wrp">
            <label>
                <input type="email" name="email" placeholder="Enter your Email adress" required>
                <span class="visually-hidden">email</span>
            </label>
            <button type="submit">подписаться</button>
        </div>
        <span>Продолжая, вы соглашаетесь с нашей политикой конфиденциальности.</span>
        <div id="message"></div>
    </form>
    <?php
    $frame->beginStub();
    ?>
    <form id="subscribe" method="post">

        <div class="footer__form-wrp">
            <label>
                <input type="email" name="email" placeholder="Enter your Email adress" required>
                <span class="visually-hidden">email</span>
            </label>
            <button type="submit">подписаться</button>
        </div>
        <span>Продолжая, вы соглашаетесь с нашей политикой конфиденциальности.</span>
        <div id="message"></div>
    </form>

    <?php
    $frame->end();
    ?>
</div>
<script>
    $('form').on('submit',function (){
        $.ajax({
            url: '/ajax/subscribe.php',
            method:'post',
            dataType: 'html',
            data: $(this).serialize(),
            success: function(responsedata){
                $('#message').html(responsedata);
            }
        })
        return false;
    })

</script>
