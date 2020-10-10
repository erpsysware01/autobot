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
if($arrJson['events'][0]['message']['text'] == "ID" | $arrJson['events'][0]['message']['text'] == "id"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
// --------------------------------------------ส่ง user id---------------------------------------------------------------------------------------------

//********************************************************** CARD ******************************************************* */
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

  
  
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

   $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างค่าใช้จ่ายอื่นๆ";

/**********************************************************สนับสนุนทุนการศึกษา****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "สนับสนุนทุนการศึกษา"){

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line,
    'payment_type' => 8
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

  
  require "fleax_masage/confirm_card.php";
  // $arrPostData = array();
  // $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

  //  $arrPostData['messages'][0]['type'] = "text";
  //  $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างสนับสนุนทุนการศึกษา";

/**********************************************************สนับสนุนกองทุนวากัฟ****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "สนับสนุนกองทุนวากัฟ"){

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line,
    'payment_type' => 9
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

  
  require "fleax_masage/confirm_card.php";
  // $arrPostData = array();
  // $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

  //  $arrPostData['messages'][0]['type'] = "text";
  //  $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างสนับสนุนกองทุนวากัฟ";

  /**********************************************************ค่าบำรุงสมาคมศิษย์เก่า****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "ค่าบำรุงสมาคมศิษย์เก่า"){

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line,
    'payment_type' => 10
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

  
  require "fleax_masage/confirm_card.php";
  // $arrPostData = array();
  // $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

  //  $arrPostData['messages'][0]['type'] = "text";
  //  $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างค่าบำรุงสมาคมศิษย์เก่า";

  /**********************************************************สนับสนุนภารกิจ สถาบันสุรินทร์ พิศสุวรรณ****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "สนับสนุนภารกิจ สถาบันสุรินทร์ พิศสุวรรณ"){

  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  

  $data_api = array(
    'id_line' => $id_line,
    'payment_type' => 11
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

  
  require "fleax_masage/confirm_card.php";
  // $arrPostData = array();
  // $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

  //  $arrPostData['messages'][0]['type'] = "text";
  //  $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลักของนักเรียน เพื่อสร้างค่าสนับสนุนภารกิจ สถาบันสุรินทร์ พิศสุวรรณ";

/**********************************************************yes****************************************** */

}else if($arrJson['events'][0]['message']['text'] == "Yes"){


  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

   $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "กรุณากรอกข้อมูลเลขบัตรประชาชน 13 หลัก";

/**********************************************************NO******************************************** */

}else if($arrJson['events'][0]['message']['text'] == "No"){

 
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

   $arrPostData['messages'][0]['type'] = "text";
   $arrPostData['messages'][0]['text'] = "กรุณากรอกเบอร์โทรของท่าน 10 หลัก";

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
  
  $url = "http://103.80.49.95:82/postchkid_pament_type/";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );


 
  if($response->pament_type == 8 | $response->pament_type == 9 | $response->pament_type == 10 | $response->pament_type == 11 ){

    
    
  
    // $data_api = array(
    //   'id_card'      => $data,
    //   'id_line'  => $id_line
    // );
  
    // $options = array(
    //   'http' => array(
    //     'method'  => 'POST',
    //     'content' => json_encode( $data_api ),
    //     'header'=>  "Content-Type: application/json\r\n" .
    //                 "Accept: application/json\r\n"
    //     )
    // );
    
    $url = "http://103.80.49.95:82/postchkprice_name/";
    $context  = stream_context_create( $options );
    $result = file_get_contents( $url, false, $context );
    $response = json_decode( $result );
  
  
    
    if($response->student_name !=null){
  
      $payment_type_name1 =urlencode($response->payment_type_name);
      $student_name1 =urlencode($response->student_name);
      $class_name1 =urlencode($response->class_name);
      $school_name1 =urlencode($response->school_name);
       
    
      $QRC_PNG="https://select2web-autobot-bantan.herokuapp.com/LineQrcode/phpqrcode/QRC/BG_QRcode2.php?ref1=$response->ref1&&ref2=$response->ref2&&price=$response->price&&payment_type_name=$payment_type_name1&&student_name=$student_name1&&class_name=$class_name1&&school_name=$school_name1";
      $arrPostData = array();
      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
      $arrPostData['messages'][0]['type'] = "image";
      $arrPostData['messages'][0]['originalContentUrl'] = $QRC_PNG;
      $arrPostData['messages'][0]['previewImageUrl'] =  $QRC_PNG;
  
    
    // $arrPostData = array();
    // $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    // $arrPostData['messages'][0]['type'] = "text";
    // $arrPostData['messages'][0]['text'] = "OK"; 
  
    }
  
    else if($response->student_name == null | $response->ref2 == "NOT FOUND"){
    
      $arrPostData = array();
      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
      $arrPostData['messages'][0]['type'] = "text";
      $arrPostData['messages'][0]['text'] = "ไม่พบข้อมูลของท่านในฐานข้อมูล กรุณาเลือก ไม่ประสงค์ออกนาม / กรุณาระบุเบอร์โทร 10 หลัก"; 
      }
  

/**************************************************************เลขบัตรประชาชน ไม่่ต้อง check pament_type 1-7********************************************* */
  } else {

    
    
  
    // $data_api = array(
    //   'id_card'      => $data,
    //   'id_line'  => $id_line
    // );
  
    // $options = array(
    //   'http' => array(
    //     'method'  => 'POST',
    //     'content' => json_encode( $data_api ),
    //     'header'=>  "Content-Type: application/json\r\n" .
    //                 "Accept: application/json\r\n"
    //     )
    // );
    
    $url = "http://103.80.49.95:82/postchkprice/";
    $context  = stream_context_create( $options );
    $result = file_get_contents( $url, false, $context );
    $response = json_decode( $result );
  
  
      // ค่าที่ต้องส่งไป
        // $response->ref1//QRC 
        // $response->ref2//QRC
        // $response->price//QRC //BG
          
        // $response->payment_type_name// BG 
        // $response->student_name// BG 
        // $response->class_name// BG 
        // $response->school_name// BG 
    
    if($response->student_name !=null){
  
    $payment_type_name1 =urlencode($response->payment_type_name);
    $student_name1 =urlencode($response->student_name);
    $class_name1 =urlencode($response->class_name);
    $school_name1 =urlencode($response->school_name);
       
    
    $QRC_PNG="https://select2web-autobot-bantan.herokuapp.com/LineQrcode/phpqrcode/QRC/BG_QRcode1.php?ref1=$response->ref1&&ref2=$response->ref2&&price=$response->price&&payment_type_name=$payment_type_name1&&student_name=$student_name1&&class_name=$class_name1&&school_name=$school_name1";
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "image";
    $arrPostData['messages'][0]['originalContentUrl'] = $QRC_PNG;
    $arrPostData['messages'][0]['previewImageUrl'] =  $QRC_PNG;
  
    }
  
    else if($response->student_name == null | $response->ref2 == "NOT FOUND"){
    
      $arrPostData = array();
      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
      $arrPostData['messages'][0]['type'] = "text";
      $arrPostData['messages'][0]['text'] = "เลขประชาชนไม่ถูกต้อง หรือ ไม่มีในระบบ / หรือเลขประชาชนนี้ ไม่ต้องชำระค่าใช้จ่ายรายการนี้ โปรดตรวจสอบอีกครั้ง"; 
      }
  


  }
  
  
 


    
//**********************************************************เบอร์โทร******************************* */


}else if(ctype_digit ( $arrJson['events'][0]['message']['text'] ) && strlen($arrJson['events'][0]['message']['text'])== "10"){
  


  $data=$arrJson['events'][0]['message']['text']; 
  $id_line =$arrJson['events'][0]['source']['userId']; //รับ id line
  
  $data_api = array(
    'phone'      => $data,
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
  
  $url = "http://103.80.49.95:82/postchkid_pament_type/";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );

  if($response->pament_type == 8 | $response->pament_type == 9 | $response->pament_type == 10 | $response->pament_type == 11 ){


  $url = "http://103.80.49.95:82/postchkprice_not_name/";
  $context  = stream_context_create( $options );
  $result = file_get_contents( $url, false, $context );
  $response = json_decode( $result );


  


    $payment_type_name1 =urlencode($response->payment_type_name);
    $student_name1 =urlencode($response->student_name);
    $class_name1 =urlencode($response->class_name);
    $school_name1 =urlencode($response->school_name);
     
  
    

   $QRC_PNG="https://select2web-autobot-bantan.herokuapp.com/LineQrcode/phpqrcode/QRC/BG_QRcode2.php?ref1=$response->ref1&&ref2=$response->ref2&&price=$response->price&&payment_type_name=$payment_type_name1&&student_name=$student_name1&&class_name=$class_name1&&school_name=$school_name1";
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "image";
    $arrPostData['messages'][0]['originalContentUrl'] = $QRC_PNG;
    $arrPostData['messages'][0]['previewImageUrl'] =  $QRC_PNG;
    
  } 
  else {
  
    $arrPostData = array();
    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
    $arrPostData['messages'][0]['type'] = "text";
    $arrPostData['messages'][0]['text'] = "เลขประชาชนไม่ถูกต้อง หรือ ไม่มีในระบบ / หรือเลขประชาชนนี้ ไม่ต้องชำระค่าใช้จ่ายรายการนี้ โปรดตรวจสอบอีกครั้ง"; 
    

  }

//**********************************************************ลูบสุดท้าย******************************************* */
}else{

  // $tank="https://raw.githubusercontent.com/aicit2015/picture/master/Aic%20sticker%20line%2024%20pose-15.png";
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรอกข้อมูลไม่ถูกต้อง❌❌ กรุณาเลือกเมนูรายการหน้าหลัก เเล้วทำรายการใหม่อีกครั้งครับ";
 
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