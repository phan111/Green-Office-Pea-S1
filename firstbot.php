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
			"altText":"การโต้ตอบของบอท",
			"contents":
			{
  "type": "carousel",
  "contents": [
    {
      "type": "bubble",
      "hero": {
        "type": "image",
        "size": "full",
        "aspectRatio": "20:13",
        "aspectMode": "fit",
        "url": "https://github.com/phan111/Green-Office-Pea-S1/blob/master/mobile.png?raw=true"
      },
      "body": {
        "type": "box",
        "layout": "vertical",
        "spacing": "sm",
        "contents": [
          {
            "type": "text",
            "text": "'.$ans[0]['topic'].'",
            "wrap": true,
            "weight": "bold",
            "size": "md"
          },
          {
            "type": "box",
            "layout": "baseline",
            "contents": [
              {
                "type": "text",
                "color": "#009933",
                "text": "มือถือ",
                "wrap": true,
                "weight": "bold",
                "size": "xs",
                "flex": 0
              }
            ]
          }
        ]
      },
      "footer": {
        "type": "box",
        "layout": "vertical",
        "spacing": "md",
        "contents": [';
         $count = count($ans);
	for($i=0;$i<$count;$i++){
		
	$json1 .='
	{
            "type": "button",
            "style": "primary",
            "action": {
              "type": "uri",
              "label": "'.$ans[$i]['subtopic'].'",
              "uri": "line://app/1556091170-01BlEQLQ?url='.$ans[$i]['reply_pc'].'"
            }
          }
	';
	if($i<$count-1){$json1.=',';}	
	}
		
        $json1 .= ']
      }
    },
    {
      "type": "bubble",
      "hero": {
        "type": "image",
        "size": "full",
        "aspectRatio": "20:13",
        "aspectMode": "fit",
        "url": "https://github.com/phan111/Green-Office-Pea-S1/blob/master/desktop-monitor%20(1).png?raw=true"
      },
      "body": {
        "type": "box",
        "layout": "vertical",
        "spacing": "sm",
        "contents": [
          {
            "type": "text",
            "text": "'.$ans[0]['topic'].'",
            "wrap": true,
            "weight": "bold",
            "size": "md"
          },
          {
            "type": "box",
            "layout": "baseline",
            "flex": 1,
            "contents": [
              {
                "type": "text",
                "color": "#009933",
                "text": "คอมพิวเตอร์",
                "wrap": true,
                "weight": "bold",
                "size": "xs",
                "flex": 0
              }
            ]
          }
        ]
      },
      "footer": {
        "type": "box",
        "layout": "vertical",
        "spacing": "md",
        "contents": [';
	for($i=0;$i<$count;$i++){
		
	$json1 .='
	{
            "type": "button",
            "style": "primary",
            "action": {
              "type": "uri",
              "label": "'.$ans[$i]['subtopic'].'",
              "uri": "'.$ans[$i]['reply_pc'].'"
            }
          }
	';
	if($i<$count-1){$json1.=',';}	
	}
        $json1 .= ']
      }
    }
  ]
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
				if (strpos($txtin, '#') !== false && substr($txtin, 0, 1) == '#') {

					$trimmed = str_replace('#', '', $txtin);
					$sql = "SELECT k.keyword_id, k.keyword, k.topic, d.detail_id, d.subtopic, d.reply_pc 
					FROM keyword k
					INNER JOIN detail d
					ON k.keyword_id = d.keyword_id
					WHERE keyword LIKE '%{$trimmed}%'
					OR d.detail_id = 999;
					";
					$resource = $con->query($sql);
					$ans = array();
					while ( $rows = $resource->fetch_assoc() ) {
					    $ans[] = $rows;
					    //print_r($rows);//echo "{$row['field']}";
					}
					reply_msg($ans, $replyToken);
					

				}
			}
		}
	}
