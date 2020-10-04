<?php

//--------------ส่งต่อ QRC ----------------
$ref1=$_REQUEST["ref1"]; //use
$ref2=$_REQUEST["ref2"];
$price=$_REQUEST["price"]; //use
// ---------------- BG -----------------------

$payment_type_name=$_REQUEST["payment_type_name"];
$student_name=$_REQUEST["student_name"];

// ---------------- BG -----------------------
$payment_type_name1 = urldecode($payment_type_name); // url ตัวเปลี่ยนภาษาไทย
$student_name1 = urldecode($student_name);  // url ตัวเปลี่ยนภาษาไทย



$image = imagecreatetruecolor(1792,2800);
$black = imagecolorallocate($image,0,0,0);
imagefill($image,0,0,$black);

// load image from file and draw it onto black image;
// for loading PNG, use imagecreatefrompng()
$overlayImage_bg = imagecreatefrompng('01.png');


// $src = "https://ff8c0a85c27f.ngrok.io/LineQrcode/phpqrcode/QRC/bg_member.png";
// $overlayImage_bg = imagecreatefromstring(file_get_contents($src));


$src = "https://select2web-autobot-bantan.herokuapp.com/LineQrcode/phpqrcode/QRC/QR_Code.php";
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
$font = '/opt/lampp/htdocs/class/securimage/ttf/TATSana Chon-Reg.otf';
$grey = imagecolorallocate($im, 128, 128, 128);
imagettftext($image, 65, 0,900,1950, $grey, $font,"นาย อาลีฟ กะมูนิง");   //student_name
imagettftext($image, 48, 0,900,2025, $grey, $font,"ม.101");         // class_name
imagettftext($image, 48, 0,900,2025, $grey, $font,"ค่าธรรมเนียมเทอม 1");  //payment_type_name
imagettftext($image, 48, 0,900,2025, $grey, $font,"ปีการศึกษา 2563"); // no data base
imagettftext($image, 40, 0,900,2025, $grey, $font,"โรงเรียนประทีปศาสน์"); //school_name
imagettftext($image, 35, 0,900,2025, $grey, $font,"520.00"); //price







//imagettftext ( $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text ) : array
// imagecopy ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h ) : bool
// Copy a part of src_im onto dst_im starting at the x,y coordinates src_x, src_y with a width of src_w and a height of src_h. The portion defined will be copied onto the x,y coordinates, dst_x and dst_y.





header("Content-Type: image/png");
imagepng($image);

?>