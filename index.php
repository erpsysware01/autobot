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


//**********************************************************ลงทะเบียน****************************************** */
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

//**********************************************************ค่ายืนยันสิทธิ์นักเรียนใหม่******************************* */

}else if($arrJson['events'][0]['message']['text']=="ค่ายืนยันสิทธิ์นักเรียนใหม่"){ 

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line
  );

  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => json_encode( $data_api ),
      'header'=>  "Content-Type: application/json\r\n" .
                  "Accept: application/json\r\n"
      )
  );
  $url = "https://ff8c0a85c27f.ngrok.io/PHP-Slim-Restful/api/qrcodememberdata";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );

  
    if($response->flg_response == 1){
      
    $tank="";
    $arrPostData = array();
     $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
     $arrPostData['messages'][0]['type'] = "image";
     $arrPostData['messages'][0]['originalContentUrl'] = $tank;
     $arrPostData['messages'][0]['previewImageUrl'] =  $tank;
      
     
      
    }
    else if($response->flg_response == 0){
  
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = $response->text_respons; 

    }
//**********************************************************เลขบัตรประชาชน******************************* */

// $arrJson['events'][0]['message']['text'] == $arrJson['events'][0]['message']['text'] 
}else if(ctype_digit ( $arrJson['events'][0]['message']['text'] ) && strlen($arrJson['events'][0]['message']['text'])== "13"){
 
  // $data=$arrJson['events'][0]['message']['text'];   
  
  
  // $data_api = array(
  //   'id_card'      => $data
  // );

  // $options = array(
  //   'http' => array(
  //     'method'  => 'POST',
  //     'content' => json_encode( $data_api ),
  //     'header'=>  "Content-Type: application/json\r\n" .
  //                 "Accept: application/json\r\n"
  //     )
  // );
  
  // $url = "https://aiconline.assiddeek.net/PHP-Slim-Restful/api/register_by_idcard";
  // $context  = stream_context_create( $options );
  // $result = file_get_contents( $url, false, $context );
  // $response = json_decode( $result );
  
  
  
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "รหัสบัตรประชาชน คือ 1959900506758";    //รหัสบัตรประชาชน********
  $arrPostData['messages'][1]['type'] = "text";
  $arrPostData['messages'][1]['text'] = "HELLO WORD";



  
  // $arrPostData['messages'][0]['type'] = "text";
  // $arrPostData['messages'][0]['text'] = $response->text_respons; 

  
  // $arrPostData['messages'][1]['type'] = "text";
  // $arrPostData['messages'][1]['text'] = $response->member_no; 

  // $arrPostData['messages'][2]['type'] = "text";
  // $arrPostData['messages'][2]['text'] = $response->text_status; 





//**********************************************************ลูบสุดท้าย******************************************* */
}else{

  // $tank="https://raw.githubusercontent.com/aicit2015/picture/master/Aic%20sticker%20line%2024%20pose-15.png";
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรอกข้อมูลไม่ถูกต้อง!!!กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักอีกครั้งนะครับ";
 
  // $arrPostData['messages'][1]['type'] = "image";
  // $arrPostData['messages'][1]['originalContentUrl'] = $tank;
  // $arrPostData['messages'][1]['previewImageUrl'] = $tank;
}
  //random ข้อความ
  // $a=array("ขอโทษครับ บอทยังไม่เข้าใจคำถาม","ไม่แน่ใจว่าถูกมั๊ย","ลองพิมพ์ใหม่อีกครั้ง หรือเลือกเมนูด้านล่างได้นะครับ 🙇","yellow","brown");
  // $random_keys=array_rand($a,3);
  // $arrPostData = array();
  // $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  // $arrPostData['messages'][0]['type'] = "text";
  // $arrPostData['messages'][0]['text'] =  $a[$random_keys[0]];

//**********************************************************ลูบสุดท้าย********************************************** */
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