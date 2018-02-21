<?php
$access_token = 'BOsuZnsafYuDUA8daAe02Fm7M8vkUMmTiYSu1QANC0muItziiHClMeKsZWo3sl/6C46R4SFP+WJqdi3xCjT9uHISKOA4T0U60Hr3cov7AEglIhhxvKwS1QlrKCaiXm+BVIV3cI8n6HP6D1q2XqTlJgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			/*$text = $event['message']['text'];
			if($text == 'Flow'){
				$text = 'Flow is 100 m3/hr';
			}
			if($text == 'Level'){
				$text = 'Level is 95.55 M';
			}*/
			
			switch(trim($event['message']['text'])){
				case "FT0101":
				$text = "FT0101 101 m3/hr";
				break;
				case "FT0102":
				$text = "FT0102 102 m3/hr";
				break;
				case "FT0103":
				$text = "FT0103 103 m3/hr";
				break;
				case "PT0001":
				$text = "PT0001 10 bar";
				break;
				case "PT0101":
				$text = "PT0101 20 bar";
				break;
				case "LT0001":
				$text = "LT0001 10 M";
				break;
				case "LT0501":
				$text = "LT0501 11 M";
				break;	
				case "M0001":
				$text = "M0001 RUN";
				break;
				case "M0002":
				$text = "M0002 STOP";
				break;
				case "M0003":
				$text = "M0003 RUN";
				break;
				case "M0601":
				$text = "M0601 STOP";
				break;
				case "M0602":
				$text = "M0602 START";
				break;
				case "M0603":
				$text = "M0603 STOP";
				break;				
				default:
				$text = $event['message']['text'];
				break;
			}
			
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";