<?php

$channelSecret = '1fff72b7e53cab5f666bf7caacf059f8';
$strAccessToken = "NkNrcU3TLsP3hx2W8TxEMH15/KfQaHLS18n7ewNaPwO7Ngx6fcFhA1cO+QTg7dyFUSk+9XRH6E/wivR5ENkgbbh8FGxx3dge6/ZJYkxdSiDdZkwMaw4zDrSuRnIREOptHFKv/qXmkuSqYbcCbKzcFwdB04t89/1O/w1cDnyilFU=";

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
$strUrl = "https://api.line.me/v2/bot/message/reply";
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";


http_response_code(200);

// --------------------------------------------ส่ง user id---------------------------------------------------------------------------------------------
if($arrJson['events'][0]['message']['text'] == "ID" ){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
// --------------------------------------------ส่ง user id---------------------------------------------------------------------------------------------

}else if($arrJson['events'][0]['message']['text'] == "ลงทะเบียน"){


  $image_url = "https://mokmoon.com/images/LINEDevelopers.png"; 
  $image_url = "https://raw.githubusercontent.com/aicit2015/picture-/master/assalam.png";
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

  //  $arrPostData['messages'][0]['type'] = "text";
  //  $arrPostData['messages'][0]['text'] = "อัสสาลามูอาลัยกุม";

  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = $image_url;
  $arrPostData['messages'][0]['previewImageUrl'] = $image_url;
  // replyMsg($arrHeader,$arrPostData);

  
  $arrPostData['messages'][1]['type'] = "text";
  $arrPostData['messages'][1]['text'] ="กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลัก นะครับ";



// ---------------------------------------------ลูบสุดท้าย-----------------------------------------------------------------------------------------

}else{

  $tank="https://raw.githubusercontent.com/aicit2015/picture/master/Aic%20sticker%20line%2024%20pose-15.png";
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรอกข้อมูลไม่ถูกต้อง!!! 
  กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักอีกครั้งนะครับ";
 
  $arrPostData['messages'][1]['type'] = "image";
  $arrPostData['messages'][1]['originalContentUrl'] = $tank;
  $arrPostData['messages'][1]['previewImageUrl'] = $tank;
}
  //random ข้อความ
  // $a=array("ขอโทษครับ บอทยังไม่เข้าใจคำถาม","ไม่แน่ใจว่าถูกมั๊ย","ลองพิมพ์ใหม่อีกครั้ง หรือเลือกเมนูด้านล่างได้นะครับ 🙇","yellow","brown");
  // $random_keys=array_rand($a,3);
  // $arrPostData = array();
  // $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  // $arrPostData['messages'][0]['type'] = "text";
  // $arrPostData['messages'][0]['text'] =  $a[$random_keys[0]];

// ------------------------------------------------------------------------------------------------------------------------------------------------
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);


?>