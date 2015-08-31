<?php

require 'config.inc.php';

$connection = curl_init();

curl_setopt($connection, CURLOPT_RETURNTRANSFER, true); // return raw output
curl_setopt($connection, CURLOPT_URL, "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22Wellington%2C%20New%20Zealand%22)%20and%20u%3D%22c%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=");

// Proxy Punch
curl_setopt($connection, CURLOPT_PROXY, "proxy");
curl_setopt($connection, CURLOPT_PROXYPORT, "3128");
curl_setopt($connection, CURLOPT_PROXYUSERPWD, PROXY_USER . ":" . PROXY_PASSWORD);

$data = curl_exec($connection);

curl_close($connection);

header("Content-type: application/json");

echo $data;
