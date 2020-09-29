<?php

$ch = curl_init('https://qrackajack.expeditedaddons.com/?api_key=' . getenv('QRACKAJACK_API_KEY') . '&bg_color=%23ffffff&content=http%3A%2F%2Fexample.org&fg_color=%23000000&height=256&width=256');

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);