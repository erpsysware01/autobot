<?php

//--------------ส่งต่อ QRC ----------------
$ref1=$_REQUEST["ref1"]; //use
$ref2=$_REQUEST["ref2"];
$price=$_REQUEST["price"]; //use
// ---------------- BG -----------------------

$payment_type_name=$_REQUEST["payment_type_name"];
$student_name=$_REQUEST["student_name"];
$class_name=$_REQUEST["class_name"];
$school_name=$_REQUEST["school_name"];

// ---------------- BG -----------------------
$payment_type_name1 = urldecode($payment_type_name); // url ตัวเปลี่ยนภาษาไทย
$student_name1 = urldecode($student_name);  // url ตัวเปลี่ยนภาษาไทย
$class_name1 = urldecode($class_name); // url ตัวเปลี่ยนภาษาไทย
$school_name1 = urldecode($school_name);  // url ตัวเปลี่ยนภาษาไทย



$image = imagecreatetruecolor(1792,2800);
$black = imagecolorallocate($image,0,0,0);
imagefill($image,0,0,$black);

// load image from file and draw it onto black image;


// for loading PNG, use imagecreatefrompng()   001011010001

   // $a = substr($ref2, 0 ,3);
   // $b = substr($ref2, 8 ,11);
   // $filename = $a.$b;
   
   // $png = '.png';
   // $BG  = 'BG/';
   // $BG_picture = $BG.$filename.$png;
   $overlayImage_bg = imagecreatefrompng('BG/0010000.png');

//    $overlayImage_bg = imagecreatefrompng('0010000.png');

// $src = "https://ff8c0a85c27f.ngrok.io/LineQrcode/phpqrcode/QRC/bg_member.png";
// $overlayImage_bg = imagecreatefromstring(file_get_contents($src));


$src = "https://select2web-autobot-bantan.herokuapp.com/LineQrcode/phpqrcode/QRC/QRcode.php?ref1=$ref1&&ref2=$ref2&&price=$price";
$overlayImage_qr_code = imagecreatefromstring(file_get_contents($src));

$overlayImage_qr_code= imagescale($overlayImage_qr_code , 650, 650); 

//$overlayImage_qr_code = imagecreatefromfile('https://ff8c0a85c27f.ngrok.io/LineQrcode/phpqrcode/QRC/bg_member.png');
#imagecopy($image, $overlayImage, 10, 10, 0, 0, imagesx($overlayImage), imagesy($overlayImage));
imagecopy($image, $overlayImage_bg, 0, 0, 0, 0, imagesx($overlayImage_bg), imagesy($overlayImage_bg)); 
imagecopy($image, $overlayImage_qr_code, 580, 1000, 0, 0, 650, 650); 
$font = imageloadfont('./Hollow_8x16_LE.gdf'); 
$black = imagecolorallocate($image, 0, 0, 0);
//imagestring ($image , 5 , 0, 0 , 'HelloWorld999999999999999999999999999999999' , $black  ) ;

// $text = 'Testing...66666666666666666666666666666666666666666666666666';
// Replace path by your own font path
$font = '/font/Anakotmai-Light.otf';
$grey = imagecolorallocate($im, 128, 128, 128);
imagettftext($image, 63, 0,350,1750, $grey, $font,"$student_name1");   //student_name
imagettftext($image, 50, 0,350,1880, $grey, $font,"$class_name1");         // class_name
imagettftext($image, 50, 0,750,1880, $grey, $font,"$payment_type_name1");  //payment_type_name
// imagettftext($image, 66, 0,900,2025, $grey, $font,"ปีการศึกษา 2563"); // no data base
imagettftext($image, 50, 0,610,2000, $grey, $font,"$school_name1"); //school_name
imagettftext($image, 70, 0,720,2230, $grey, $font,"$price"); //price

imagettftext($image, 30, 0,650,2350, $grey, $font,"สามารถบันทึกเก็บไว้ใช้ในครั้งต่อไป"); 





//imagettftext ( $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text ) : array
// imagecopy ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h ) : bool
// Copy a part of src_im onto dst_im starting at the x,y coordinates src_x, src_y with a width of src_w and a height of src_h. The portion defined will be copied onto the x,y coordinates, dst_x and dst_y.





header("Content-Type: image/png");
imagepng($image);

?>
