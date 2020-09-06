<?php

/*https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/getUpdates , 
где, XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -токен вашего бота, полученый ранее '*/

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "1246518845:AAHopBVsK-GIFEEf3BmT-6zZ0IVsFLQjCwY";
$chat_id = "-465354327";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone
);

foreach ($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.com/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>