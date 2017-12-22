<?php
$access_token = 'BOsuZnsafYuDUA8daAe02Fm7M8vkUMmTiYSu1QANC0muItziiHClMeKsZWo3sl/6C46R4SFP+WJqdi3xCjT9uHISKOA4T0U60Hr3cov7AEglIhhxvKwS1QlrKCaiXm+BVIV3cI8n6HP6D1q2XqTlJgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;