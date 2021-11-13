<!-- https://api.telegram.org/bot2083842733:AAG9XwyWovK7adGcJDODyloOA_O3d69GJGo/getUpdates -->

<?php
$email = $_POST['email'];
$name = $_POST['name'];
$text = $_POST['text'];


$token = "2083842733:AAG9XwyWovK7adGcJDODyloOA_O3d69GJGo";
$chat_id = "-763548321";
$sitename = "http://FinishWorker/";

$arr = array(
    'Вопрос с сайта: ' => $sitename,
    'Email: ' => $email,
    'Имя: ' => $name,
    'Вопрос: ' => $text,
);

foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
