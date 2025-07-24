<?php

/*
Powered By @DevMrErfi
My Channel is @CodeCraftersTeam
Erfan RasoulPour
*/

error_reporting(0);
header('Content-Type: application/json; charset=utf-8');

$key = "";   //// برای دریافت key به پیوی @DevMrErfi رفته و درخواست کلید کنید

$card = htmlspecialchars($_GET['card']);

function x(array $params): string {
    return http_build_query($params, '', '&', PHP_QUERY_RFC3986);
}

/*
Powered By @DevMrErfi
My Channel is @CodeCraftersTeam
Erfan RasoulPour
*/

function curl($url) {
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
    ]);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

$params = [
    'card' => $card,
    'key' => $key,
];

/*
Powered By @DevMrErfi
My Channel is @CodeCraftersTeam
Erfan RasoulPour
*/

$url = "https://abarmizban.com/ProjecT/API/cardinfo/cardinfo.php?" . x($params);

$response = curl($url);

$data = json_decode($response, true);



echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

/*
Powered By @DevMrErfi
My Channel is @CodeCraftersTeam
Erfan RasoulPour
*/


?>
