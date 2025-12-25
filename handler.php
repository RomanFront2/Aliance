<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

function setEnvData( string $filePath = '' ): void {
	if ( empty( $filePath ) ) {
		$filePath = '.env';
	}
	if ( ! file_exists( $filePath ) ) {
		throw new RuntimeException( 'Wrong file path.' );
	}
	$file = file_get_contents( $filePath );
	$data = array_filter( explode( PHP_EOL, $file ) );
	if ( empty( $data ) ) {
		return;
	}
	foreach ( $data as $i => $line ) {
		$data[ $i ] = array_map( 'trim', explode( '=', $line, 2 ) );
		if ( isset( $data[ $i ][1] ) ) {
			$data[ $i ][1] = trim( $data[ $i ][1], '"' );
		} else {
			$data[ $i ][1] = '';
		}
		$_ENV[ $data[ $i ][0] ] = $data[ $i ][1];
	}
}

setEnvData();

$token= $_ENV['Bot_token'];
$chat_id= $_ENV['Chat_id'];

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
