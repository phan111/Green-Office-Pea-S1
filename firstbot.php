<?php
	include 'connect.php';
	function reply_msg($ans,$replyToken)//สร้างข้อความและตอบกลับ
	{
		$access_token = 'JlqfkhQinH+BmTxFyFOyOjMLtiPY33oUH49gMD8yae2yvLBcbJiREM5kMAyCt263s+MG0mew1M1Sak1073mHbHkRMvayt9UhvofIOBtfIGa/GWbx7fbjB+DdkCjrZsQWkflrBHhdsazEIeblZh3wtgdB04t89/1O/w1cDnyilFU=';
		//$messages = ['type' => 'text','text' => $txtin];//สร้างตัวแปร 
		$messages = flex_msg($ans); 
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
	function flex_msg($ans)
	{
	$json1 = '{
				"type":"flex",
				"altText":"Green Office",
				"contents":{
  						"type": "bubble",
  						"hero": {
   								 "type": "image",
    								 "url": "https://raw.githubusercontent.com/phan111/Green-Office-Pea-S1/master/Webp.net-resizeimage.png",
    								 "size": "full",
      							         "aspectRatio": "16:9",
    								 "aspectMode": "fit",
    								 "action": {
      	   									"type": "uri",
      										"uri": "line://app/1556091170-O9nZo3E3"
    									   }
  							},
  						"body": {
    								"type": "box",
    								"layout": "vertical",
    								"contents": [
      										{
        										"type": "text",
        										"text": "'.$ans['reply'].'",
        										"weight": "bold",
        										"size": "xl"
      										},
      										{
        										"type": "box",
        										"layout": "vertical",
        										"margin": "lg",
        										"spacing": "sm",
        										"contents": [
          												{
            													"type": "box",
            													"layout": "baseline",
            													"spacing": "sm",
            													"contents": [
															      {
																"type": "text",
																"text": "...",
																"wrap": true,
																"color": "#d4ed89",
																"size": "md",
																"flex": 5
															      }
            														   ]
          												}
        											   ]
      										}
    									]
  							},
						  "footer": {
							    "type": "box",
							    "layout": "vertical",
							    "spacing": "sm",
							    "contents": [
									      {
										"type": "button",
										"style": "primary",
										"height": "sm",
										"action": {
										  "type": "uri",
										  "label": "button",
										  "uri": "line://app/1556091170-O9nZo3E3"
										}
						      			     },
     
									      {
										"type": "spacer",
										"size": "sm"
									      }
    									],
    							 "flex": 0
  							}
				}
	
				}';
	$result = json_decode($json1);
	return $result;
	}
	// รับข้อมูล
	$content = file_get_contents('php://input');//รับข้อมูลจากไลน์
	$events = json_decode($content, true);//แปลง json เป็น php
	if (!is_null($events['events'])) //check ค่าในตัวแปร $events
	{
		foreach ($events['events'] as $event) {
			if ($event['type'] == 'message' && $event['message']['type'] == 'text')
			{
				$replyToken = $event['replyToken']; //เก็บ reply token เอาไว้ตอบกลับ
				$source_type = $event['source']['type'];//เก็บที่มาของ event(user หรือ group)
				$txtin = $event['message']['text'];//เอาข้อความจากไลน์ใส่ตัวแปร $txtin
				$sql = "SELECT * FROM line_reply WHERE msg = '".$txtin."'";
				$result = mysqli_query($con, $sql);
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				reply_msg($row, $replyToken);
			}
		}
	}
	echo "BOT OK";
	
