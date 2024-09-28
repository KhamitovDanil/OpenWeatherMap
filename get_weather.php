<?php
$apiKey = "73b9fe93e0c0e29e5c8e634f97fc113f";
$cityId = "479561";
$url = 'http://api.openweathermap.org/data/2.5/weather?id=' . $cityId . '&units=metric&lang=ru&appid=' . $apiKey;
$response = file_get_contents($url);

echo $response;
?>
