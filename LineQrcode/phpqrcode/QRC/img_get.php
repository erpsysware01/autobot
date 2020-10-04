<?php

// $ref1 = $_POST['ref1'];
// $ref2 = $_POST['ref2'];
//$flg = $_POST['flg'];    // 1 = เงินฝาก ,2 = หุุ้้น ,3 = สินเชื่อ
$MEM_ID=$_REQUEST["ref1"];
$hun=$_REQUEST["ref2"];
$acc_name=$_REQUEST["name"];

$var = urldecode($acc_name); // url ตัวเปลี่ยนภาษาไทย


$image = imagecreatetruecolor(1792,2800);
$black = imagecolorallocate($image,0,0,0);
imagefill($image,0,0,$black);

// load image from file and draw it onto black image;
// for loading PNG, use imagecreatefrompng()
$overlayImage_bg = imagecreatefrompng('BG_QR01.png');


// $src = "https://ff8c0a85c27f.ngrok.io/LineQrcode/phpqrcode/QRC/bg_member.png";
// $overlayImage_bg = imagecreatefromstring(file_get_contents($src));


$src = "https://ff8c0a85c27f.ngrok.io/LineQrcode/phpqrcode/QRC/gen_qrcode.php?ref1=$MEM_ID&&ref2=$hun";
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
imagettftext($image, 65, 0,900,1950, $grey, $font,"$var");     //name
imagettftext($image, 48, 0,900,2025, $grey, $font,"$MEM_ID");  //REF1
// imagettftext($image, 48, 0,1000,2100, $grey, $font,"005-01-3846");  //REF2   






//imagettftext ( $image , float $size , float $angle , int $x , int $y , int $color , string $fontfile , string $text ) : array
// imagecopy ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h ) : bool
// Copy a part of src_im onto dst_im starting at the x,y coordinates src_x, src_y with a width of src_w and a height of src_h. The portion defined will be copied onto the x,y coordinates, dst_x and dst_y.





header("Content-Type: image/png");
imagepng($image);


?>