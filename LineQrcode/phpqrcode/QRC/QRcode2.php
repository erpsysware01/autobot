<?php
$ref1=$_REQUEST["ref1"];
$ref2=$_REQUEST["ref2"];
$price=$_REQUEST["price"];

$price1 = round($price,0);


 $Bantan="|099400009375600";
//  $ref1="1800801571929";
//  $ref2="001011010001";
//  $price="500";
//  $zero='00';

include('../qrlib.php'); 
QRcode::png($Bantan."\n".$ref1."\n".$ref2."\n".$price1.'00');

?>