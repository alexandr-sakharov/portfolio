<?php
$token = "5278333776:AAGOFbMNLDva9a1tow4JVy2FBW7xuD10XeY";
$chat_id = "-710003160";

if ($_POST['act'] == 'order') {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $msg = ($_POST['msg']);

    $arr = array(
        'Имя:' => $name,
        'Почта:' => $phone,
        'Проект: ' => $msg
    );

    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    if ($sendToTelegram) {
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
    }

    else {
        alert('Что-то пошло не так. Попробуйте отправить форму ещё раз.');
    }
}

?>