<?php

$API_URL = 'https://api.line.me/v2/bot/message';
$channelSecret = '1fff72b7e53cab5f666bf7caacf059f8';
$ACCESS_TOKEN = "NkNrcU3TLsP3hx2W8TxEMH15/KfQaHLS18n7ewNaPwO7Ngx6fcFhA1cO+QTg7dyFUSk+9XRH6E/wivR5ENkgbbh8FGxx3dge6/ZJYkxdSiDdZkwMaw4zDrSuRnIREOptHFKv/qXmkuSqYbcCbKzcFwdB04t89/1O/w1cDnyilFU=";
// $channelSecret = '4db58f9c3e5478b901d8cad6632eecba';
// $ACCESS_TOKEN = "onfSddzCGBwYmZV9gs2d4p+ageAtGz9wOcomTdIugqEMCAAFlQTIZVyWeXzplOKSHijXv9j0e3EeR/epPLMbcSVtdEUuGuGaJnlD7bz6igjn4VbUWVxJvm/RYsWGOQ08IqINOJ+n7Kn7sSC9+4VmdgdB04t89/1O/w1cDnyilFU=";
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);
$content = file_get_contents('php://input');   // Get request content
$request_array = json_decode($content , true);   // Decode JSON to Array







$jsonFlex = [
 
  "type"=> "template",
  "altText"=> "this is a confirm template",
  "template"=> [
    "type"=> "confirm",
    "actions"=> [
      [
        "type"=> "message",
        "label"=> "Yes ",
        "text"=> "Yes"
      ],
      [
        "type"=> "message",
        "label"=> "No",
        "text"=> "No"
      ]
    ],
    "text"=> "ท่านต้องการประสงค์ออกนามหรือไม่ ❔"
  ]


];

if ( sizeof($request_array['events']) > 0 ) {
    foreach ($request_array['events'] as $event) {
        error_log(json_encode($event));
        $reply_message = '';
        $reply_token = $event['replyToken'];

        $data = [
            'replyToken' => $reply_token,
            'messages' => [$jsonFlex]
        ];

        print_r($data);

        $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
        
        $send_result = send_reply_message($API_URL.'/reply', $POST_HEADER, $post_body);

        echo "Result: ".$send_result."\r\n";
        
    }
}

echo "OK";


function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}






?>