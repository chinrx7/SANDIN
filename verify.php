<?php
$access_token = 'Jt9Qq2FwXM3fmaSMEUEJ1t8H0x9KSVVYdd4aFH597EqpBuKPzwFJDC/0BIn4LarWC46R4SFP+WJqdi3xCjT9uHISKOA4T0U60Hr3cov7AEid9ZmV/LLWI1oRCipAFbt6pCzipYaK4NeS8nzVBdb9DwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;