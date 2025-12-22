<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "8265923983:AAGcPg_9AcpB1V4HVAgfbQDHRfhQZCSBHt4";
$chat_id = "-5040493066";

$form_date = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone
);

foreach($form_date as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
};

$send_to_telegram = fopen("http://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($send_to_telegram) {
  echo "Выполнено";
} else {
  "Ошибочка";
};

// echo "Привет, " . $user_name . "<br>";
// echo "Ваш телефон: <b>" . $user_phone . "</b>";