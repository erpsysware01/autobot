<?php

$API_URL = 'https://api.line.me/v2/bot/message';
$channelSecret = '1fff72b7e53cab5f666bf7caacf059f8';
$ACCESS_TOKEN = "NkNrcU3TLsP3hx2W8TxEMH15/KfQaHLS18n7ewNaPwO7Ngx6fcFhA1cO+QTg7dyFUSk+9XRH6E/wivR5ENkgbbh8FGxx3dge6/ZJYkxdSiDdZkwMaw4zDrSuRnIREOptHFKv/qXmkuSqYbcCbKzcFwdB04t89/1O/w1cDnyilFU=";
// $channelSecret = '4db58f9c3e5478b901d8cad6632eecba';
// $ACCESS_TOKEN = "onfSddzCGBwYmZV9gs2d4p+ageAtGz9wOcomTdIugqEMCAAFlQTIZVyWeXzplOKSHijXv9j0e3EeR/epPLMbcSVtdEUuGuGaJnlD7bz6igjn4VbUWVxJvm/RYsWGOQ08IqINOJ+n7Kn7sSC9+4VmdgdB04t89/1O/w1cDnyilFU=";
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);
$content = file_get_contents('php://input');   // Get request content
$request_array = json_decode($content , true);   // Decode JSON to Array


$data_api = array(
  'id_card'      => $data
);

$options = array(
  'http' => array(
    'method'  => 'POST',
    'content' => json_encode( $data_api ),
    'header'=>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
    )
);

$url = "https://select2web-autobot-test.herokuapp.com/register_by_idcard";
$context  = stream_context_create( $options );
$result = file_get_contents( $url, false, $context );
$response = json_decode( $result );




$jsonFlex = [
  
  
    "type"=> "flex",
    "altText"=> "Flex Message",
    "contents"=> [
      "type"=> "carousel",
      "contents"=> [
        [
          "type"=> "bubble",
          "hero"=> [
            "type"=> "image",
            "url"=> "https://raw.githubusercontent.com/aicit2015/picture/master/85040573_618997342220590_2508326321805852672_o.jpg",
            "size"=> "full",
            "aspectRatio"=> "20:13",
            "aspectMode"=> "cover"
          ],
          "body"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "box",
                "layout"=> "vertical",
                "contents"=> [
                  [
                    "type"=> "text",
                    "text"=> "ลงทะเบียนสำเร็จ ",
                    "size"=> "xl",
                    "align"=> "center",
                    "weight"=> "bold",
                    "color"=> "#6E9427",
                    "wrap"=> true
                  ]
                ]
              ],
              [
                "type"=> "text",
                "text"=> "_________________",
                "margin"=> "none",
                "size"=> "xl",
                "align"=> "center",
                "color"=> "#6E9427",
                "wrap"=> true
              ],
              [
                "type"=> "box",
                "layout"=> "baseline",
                "contents"=> [
                  [
                    "type"=> "icon",
                    "url"=> "https://developers.line.biz/assets/images/services/bot-designer-icon.png"
                  ],
                  [
                    "type"=> "text",
                    "text"=> "ชื่่อ-สกุล :",
                    "flex"=> 0,
                    "size"=> "md",
                    "align"=> "start",
                    "weight"=> "regular",
                    "wrap"=> true
                  ],
                  [
                    "type"=> "text",
                    "text"=> "hello5555555555",
                    "flex"=> 0,
                    "margin"=> "lg",
                    "size"=> "md",
                    "align"=> "start",
                    "weight"=> "regular",
                    "color"=> "#625858",
                    "wrap"=> true
                  ]
                ]
              ],
              [
                "type"=> "box",
                "layout"=> "baseline",
                "contents"=> [
                  [
                    "type"=> "icon",
                    "url"=> "https://developers.line.biz/assets/images/services/bot-designer-icon.png"
                  ],
                  [
                    "type"=> "text",
                    "text"=> "ID CARD : ",
                    "flex"=> 0,
                    "size"=> "md",
                    "align"=> "start",
                    "weight"=> "regular",
                    "wrap"=> true
                  ],
                  [
                    "type"=> "text",
                    "text"=> "hello5555555555",
                    "flex"=> 0,
                    "margin"=> "md",
                    "size"=> "md",
                    "align"=> "start",
                    "gravity"=> "top",
                    "weight"=> "regular",
                    "color"=> "#514848"
                  ]
                ]
              ],
              [
                "type"=> "box",
                "layout"=> "baseline",
                "contents"=> [
                  [
                    "type"=> "icon",
                    "url"=> "https://developers.line.biz/assets/images/services/bot-designer-icon.png"
                  ],
                  [
                    "type"=> "text",
                    "text"=> "เลขที่บัตร : ",
                    "flex"=> 0,
                    "size"=> "md",
                    "align"=> "start",
                    "weight"=> "regular",
                    "wrap"=> true
                  ],
                  [
                    "type"=> "text",
                    "text"=> "hello5555555555",
                    "flex"=> 0,
                    "margin"=> "xxl",
                    "size"=> "md",
                    "align"=> "start",
                    "gravity"=> "top",
                    "weight"=> "regular",
                    "color"=> "#1941F9"
                  ]
                ]
              ],
              [
                "type"=> "text",
                "text"=> "_________________",
                "margin"=> "none",
                "size"=> "xl",
                "align"=> "center",
                "color"=> "#6E9427",
                "wrap"=> true
              ]
            ]
          ],
          "footer"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "flex"=> 9,
            "spacing"=> "xxl",
            "margin"=> "xxl",
            "contents"=> [
              [
                "type"=> "image",
                "url"=> "https://raw.githubusercontent.com/aicit2015/picture/master/Tick_Mark_Dark-512.png",
                "margin"=> "none",
                "aspectRatio"=> "4:3",
                "aspectMode"=> "fit",
                "backgroundColor"=> "#FFFFFF"
              ]
            ]
          ]
        ],
        [
          "type"=> "bubble",
          "hero"=> [
            "type"=> "image",
            "url"=> "https://raw.githubusercontent.com/aicit2015/picture/master/20140929_4947_1412003472_520885.jpg",
            "size"=> "full",
            "aspectRatio"=> "20:13",
            "aspectMode"=> "cover"
          ],
          "body"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "text",
                "text"=> "คูปองงานเลี้ยงรับรอง",
                "margin"=> "none",
                "size"=> "xl",
                "align"=> "center",
                "weight"=> "bold",
                "color"=> "#443973",
                "wrap"=> true
              ],
              [
                "type"=> "text",
                "text"=> "_________________",
                "margin"=> "none",
                "size"=> "xl",
                "align"=> "center",
                "color"=> "#1F9125",
                "wrap"=> true
              ],
              [
                "type"=> "box",
                "layout"=> "baseline",
                "contents"=> [
                  [
                    "type"=> "icon",
                    "url"=> "https://developers.line.biz/assets/images/services/bot-designer-icon.png"
                  ],
                  [
                    "type"=> "text",
                    "text"=> "ชื่่อ-สกุล :",
                    "flex"=> 0,
                    "size"=> "md",
                    "align"=> "start",
                    "weight"=> "regular",
                    "wrap"=> true
                  ],
                  [
                    "type"=> "text",
                    "text"=> "hello5555555555",
                    "flex"=> 0,
                    "margin"=> "lg",
                    "size"=> "md",
                    "align"=> "start",
                    "weight"=> "regular",
                    "color"=> "#5D5353",
                    "wrap"=> true
                  ]
                ]
              ],
              [
                "type"=> "box",
                "layout"=> "baseline",
                "contents"=> [
                  [
                    "type"=> "icon",
                    "url"=> "https://developers.line.biz/assets/images/services/bot-designer-icon.png"
                  ],
                  [
                    "type"=> "text",
                    "text"=> "วันที่ ",
                    "flex"=> 0,
                    "size"=> "md",
                    "align"=> "start",
                    "weight"=> "regular",
                    "wrap"=> true
                  ],
                  [
                    "type"=> "text",
                    "text"=> "28 มีนาคม 2563  18.00 น.",
                    "flex"=> 0,
                    "margin"=> "lg",
                    "size"=> "md",
                    "align"=> "start",
                    "weight"=> "regular",
                    "color"=> "#3E3838",
                    "wrap"=> true
                  ]
                ]
              ],
              [
                "type"=> "box",
                "layout"=> "baseline",
                "spacing"=> "none",
                "margin"=> "none",
                "contents"=> [
                  [
                    "type"=> "icon",
                    "url"=> "https://developers.line.biz/assets/images/services/bot-designer-icon.png"
                  ],
                  [
                    "type"=> "text",
                    "text"=> "ณ   โรงแรมบีพีสมิหลาบีช สงขลา",
                    "margin"=> "none",
                    "size"=> "md",
                    "align"=> "start",
                    "color"=> "#110E0E",
                    "wrap"=> true
                  ]
                ]
              ],
              [
                "type"=> "box",
                "layout"=> "baseline",
                "contents"=> [
                  [
                    "type"=> "icon",
                    "url"=> "https://developers.line.biz/assets/images/services/bot-designer-icon.png"
                  ],
                  [
                    "type"=> "text",
                    "text"=> "เลขที่คูปอง :",
                    "flex"=> 0,
                    "size"=> "md",
                    "align"=> "start",
                    "weight"=> "regular",
                    "wrap"=> true
                  ],
                  [
                    "type"=> "text",
                    "text"=> "hello5555555555",
                    "flex"=> 0,
                    "margin"=> "lg",
                    "size"=> "md",
                    "align"=> "start",
                    "weight"=> "regular",
                    "color"=> "#0E5AE4",
                    "wrap"=> true
                  ]
                ]
              ],
              [
                "type"=> "text",
                "text"=> "(ใช้สำหรับลุ้นหางบัตรของขวัญ)",
                "flex"=> 0,
                "margin"=> "none",
                "size"=> "xxs",
                "align"=> "end",
                "gravity"=> "center",
                "color"=> "#FF5551",
                "wrap"=> true
              ],
              [
                "type"=> "text",
                "text"=> "_________________",
                "margin"=> "none",
                "size"=> "xl",
                "align"=> "center",
                "color"=> "#1F9125",
                "wrap"=> true
              ]
            ]
          ],
          "footer"=> [
            "type"=> "box",
            "layout"=> "vertical",
            "spacing"=> "sm",
            "contents"=> [
              [
                "type"=> "button",
                "action"=> [
                  "type"=> "uri",
                  "label"=> "คลิกดูสถานที่จัดงาน",
                  "uri"=> "https://www.google.co.th/maps/place/BP+Samila+Beach+Hotel/@7.2142789,100.5940489,17z/data=!4m8!3m7!1s0x304d3369b9810b35:0xe3e28a4d93d7902a!5m2!4m1!1i2!8m2!3d7.214279!4d100.5962377"
                ],
                "flex"=> 2,
                "color"=> "#BF693B",
                "style"=> "primary"
              ]
            ]
          ]
        ]
      ]
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