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

//**********************************************************ค่าเทอม****************************************** */
}else if($arrJson['events'][0]['message']['text'] == "ค่าธรรมเนียมการเรียน" ){
  
   require "fleax_masage/card.php";


  }else if($arrJson['events'][0]['message']['text'] == "ค่าใช้จ่ายอื่นๆ." ){
  
    require "fleax_masage/card1.php";



  }else if($arrJson['events'][0]['message']['text'] == "วากัฟ/ซากาต/ซอดาเกาะฮ" ){
  
    require "fleax_masage/card2.php";



  }else if($arrJson['events'][0]['message']['text'] == "สนับสนุนองค์กรในสังกัดปอเนาะบ้านตาล" ){
  
    require "fleax_masage/card3.php";

   


//**********************************************************ค่ายืนยันสิทธิ์นักเรียนใหม่****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "ค่ายืนยันสิทธิ์นักเรียนใหม่"){

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line,
    'payment_type' => 1
  );

  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => json_encode( $data_api ),
      'header'=>  "Content-Type: application/json\r\n" .
                  "Accept: application/json\r\n"
      )
  );
  $url = "http://103.80.49.95:82/postchkupdateinsert/";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );

  
  $image_url = "https://mokmoon.com/images/LINEDevelopers.png"; 
  $image_url = "https://raw.githubusercontent.com/aicit2015/picture-/master/assalam.png";
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

   $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างค่ายืนยันสิทธิ์นักเรียนใหม่";

  
    
/**********************************************************ค่าธรรมเนียมเทอม 1****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "ค่าธรรมเนียมเทอม 1"){

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line,
    'payment_type' => 2
  );

  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => json_encode( $data_api ),
      'header'=>  "Content-Type: application/json\r\n" .
                  "Accept: application/json\r\n"
      )
  );
  $url = "http://103.80.49.95:82/postchkupdateinsert/";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );

  
  $image_url = "https://mokmoon.com/images/LINEDevelopers.png"; 
  $image_url = "https://raw.githubusercontent.com/aicit2015/picture-/master/assalam.png";
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

   $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างค่าธรรมเนียมเทอม 1";

 
       
/**********************************************************ค่าธรรมเนียมเทอม 2****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "ค่าธรรมเนียมเทอม 2"){

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line,
    'payment_type' => 3
  );

  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => json_encode( $data_api ),
      'header'=>  "Content-Type: application/json\r\n" .
                  "Accept: application/json\r\n"
      )
  );
  $url = "http://103.80.49.95:82/postchkupdateinsert/";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );

  
  $image_url = "https://mokmoon.com/images/LINEDevelopers.png"; 
  $image_url = "https://raw.githubusercontent.com/aicit2015/picture-/master/assalam.png";
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

   $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างค่าธรรมเนียมเทอม 2";

/**********************************************************ค่าธรรมเนียมรายเดือน****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "ค่าธรรมเนียมรายเดือน"){

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line,
    'payment_type' => 4
  );

  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => json_encode( $data_api ),
      'header'=>  "Content-Type: application/json\r\n" .
                  "Accept: application/json\r\n"
      )
  );
  $url = "http://103.80.49.95:82/postchkupdateinsert/";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );

  
  $image_url = "https://mokmoon.com/images/LINEDevelopers.png"; 
  $image_url = "https://raw.githubusercontent.com/aicit2015/picture-/master/assalam.png";
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

   $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างค่าธรรมเนียมรายเดือน";


   /**********************************************************ค่าเรียนหลักสูตร IP****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "ค่าเรียนหลักสูตร IP"){

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line,
    'payment_type' => 5
  );

  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => json_encode( $data_api ),
      'header'=>  "Content-Type: application/json\r\n" .
                  "Accept: application/json\r\n"
      )
  );
  $url = "http://103.80.49.95:82/postchkupdateinsert/";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );

  
  $image_url = "https://mokmoon.com/images/LINEDevelopers.png"; 
  $image_url = "https://raw.githubusercontent.com/aicit2015/picture-/master/assalam.png";
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

   $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างค่าเรียนหลักสูตร IP";


   /**********************************************************ค่าใช้จ่ายส่วนตัวรายวัน****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "ค่าใช้จ่ายส่วนตัวรายวัน"){

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line,
    'payment_type' => 6
  );

  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => json_encode( $data_api ),
      'header'=>  "Content-Type: application/json\r\n" .
                  "Accept: application/json\r\n"
      )
  );
  $url = "http://103.80.49.95:82/postchkupdateinsert/";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );

  
  $image_url = "https://mokmoon.com/images/LINEDevelopers.png"; 
  $image_url = "https://raw.githubusercontent.com/aicit2015/picture-/master/assalam.png";
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

   $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างค่าใช้จ่ายส่วนตัวรายวัน";

   /**********************************************************ค่าใช้จ่ายอื่นๆ****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "ค่าใช้จ่ายอื่นๆ"){

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line,
    'payment_type' => 7
  );

  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => json_encode( $data_api ),
      'header'=>  "Content-Type: application/json\r\n" .
                  "Accept: application/json\r\n"
      )
  );
  $url = "http://103.80.49.95:82/postchkupdateinsert/";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );

  
  $image_url = "https://mokmoon.com/images/LINEDevelopers.png"; 
  $image_url = "https://raw.githubusercontent.com/aicit2015/picture-/master/assalam.png";
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

   $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างค่าใช้จ่ายอื่นๆ";


 //**********************************************************เลขบัตรประชาชน******************************* */


}else if(ctype_digit ( $arrJson['events'][0]['message']['text'] ) && strlen($arrJson['events'][0]['message']['text'])== "13"){
  
  $data=$arrJson['events'][0]['message']['text']; 
  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_card'      => $data,
    'id_line'  => $id_line
  );

  $options = array(
    'http' => array(
      'method'  => 'POST',
      'content' => json_encode( $data_api ),
      'header'=>  "Content-Type: application/json\r\n" .
                  "Accept: application/json\r\n"
      )
  );
  
  $url = "http://103.80.49.95:82/postchkprice/";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );

  // $_SESSION['myName'] = "Johnm";
  // require "fleax_masage/card.php";


  // $arrPostData = array();
  // $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  // $arrPostData['messages'][0]['type'] = "text";
  // $arrPostData['messages'][0]['text'] = "รหัสบัตรประชาชน คือ 1959900506758"; 
  // $arrPostData['messages'][1]['type'] = "text";
  // $arrPostData['messages'][1]['text'] = "HELLO WORD";
 
  
    // ค่าที่ต้องส่งไป
      // $response->ref1//QRC //BG
      // $response->ref2//QRC
      // $response->price//QRC //BG

      // $response->payment_type_name// BG 
      // $response->student_name// BG 


  $payment_type_name1 =urlencode($response->payment_type_name);
  $student_name1 =urlencode($response->student_name);
  // https://ff8c0a85c27f.ngrok.io/LineQrcode/phpqrcode/QRC/img_get.php?ref1=$response->text_ref1&&ref2=$response->text_ref2&&name=$name
  $QRC_PNG="https://select2web-autobot-bantan.herokuapp.com/LineQrcode/phpqrcode/QRC/bg_loan.png";
   $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = $QRC_PNG;
  $arrPostData['messages'][0]['previewImageUrl'] =  $QRC_PNG;

  


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