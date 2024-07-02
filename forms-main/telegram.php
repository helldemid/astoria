<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$gadjet = $_POST['gadjet'];
$message = $_POST['user_message'];
$token = "5538616544:AAFMeOYrko-dnlIrKzwGYJPkaKJLEDovjYc";
$chat_id = "347693068";
$arr = array(
  'Ім\'я клієнта: ' => $name,
  'Телефон: ' => $phone,
  'Пристрій: ' => $gadjet,
  'Допис: ' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram) {
  echo "Успіх";
} else {
  echo "Error";
}
?>
