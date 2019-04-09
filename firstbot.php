<?php
	include 'connect.php';
	function reply_msg($txtin,$replyToken)//สร้างข้อความและตอบกลับ
	{
		$flex = '
		{
  "type": "bubble",
  "hero": {
    "type": "image",
    "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_3_movie.png",
    "size": "full",
    "aspectRatio": "20:13",
    "aspectMode": "cover",
    "action": {
      "type": "uri",
      "uri": "http://linecorp.com/"
    }
  },
  "body": {
    "type": "box",
    "layout": "vertical",
    "spacing": "md",
    "contents": [
      {
        "type": "text",
        "text": "BROWN'S ADVENTURE\nIN MOVIE",
        "wrap": true,
        "weight": "bold",
        "gravity": "center",
        "size": "xl"
      },
      {
        "type": "box",
        "layout": "baseline",
        "margin": "md",
        "contents": [
          {
            "type": "icon",
            "size": "sm",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
          },
          {
            "type": "icon",
            "size": "sm",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
          },
          {
            "type": "icon",
            "size": "sm",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
          },
          {
            "type": "icon",
            "size": "sm",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
          },
          {
            "type": "icon",
            "size": "sm",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
          },
          {
            "type": "text",
            "text": "4.0",
            "size": "sm",
            "color": "#999999",
            "margin": "md",
            "flex": 0
          }
        ]
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
                "text": "Date",
                "color": "#aaaaaa",
                "size": "sm",
                "flex": 1
              },
              {
                "type": "text",
                "text": "Monday 25, 9:00PM",
                "wrap": true,
                "size": "sm",
                "color": "#666666",
                "flex": 4
              }
            ]
          },
          {
            "type": "box",
            "layout": "baseline",
            "spacing": "sm",
            "contents": [
              {
                "type": "text",
                "text": "Place",
                "color": "#aaaaaa",
                "size": "sm",
                "flex": 1
              },
              {
                "type": "text",
                "text": "7 Floor, No.3",
                "wrap": true,
                "color": "#666666",
                "size": "sm",
                "flex": 4
              }
            ]
          },
          {
            "type": "box",
            "layout": "baseline",
            "spacing": "sm",
            "contents": [
              {
                "type": "text",
                "text": "Seats",
                "color": "#aaaaaa",
                "size": "sm",
                "flex": 1
              },
              {
                "type": "text",
                "text": "C Row, 18 Seat",
                "wrap": true,
                "color": "#666666",
                "size": "sm",
                "flex": 4
              }
            ]
          }
        ]
      },
      {
        "type": "box",
        "layout": "vertical",
        "margin": "xxl",
        "contents": [
          {
            "type": "spacer"
          },
          {
            "type": "image",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/linecorp_code_withborder.png",
            "aspectMode": "cover",
            "size": "xl"
          },
          {
            "type": "text",
            "text": "You can enter the theater by using this code instead of a ticket",
            "color": "#aaaaaa",
            "wrap": true,
            "margin": "xxl",
            "size": "xs"
          }
        ]
      }
    ]
  }
}
';
		$access_token = 'JlqfkhQinH+BmTxFyFOyOjMLtiPY33oUH49gMD8yae2yvLBcbJiREM5kMAyCt263s+MG0mew1M1Sak1073mHbHkRMvayt9UhvofIOBtfIGa/GWbx7fbjB+DdkCjrZsQWkflrBHhdsazEIeblZh3wtgdB04t89/1O/w1cDnyilFU=';
		$messages = ['type' => 'text','text' => $txtin];//สร้างตัวแปร 
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
				$sql="SELECT * FROM line_reply WHERE msg = '".$txtin."'";
				$result=mysqli_query($con, $sql);
				$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
				$ans = $row['reply'];
				reply_msg($flex,$replyToken);
			}
		}
	}
	echo "BOT OK";
	
