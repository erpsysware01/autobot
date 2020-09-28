<?php
$account_no=$_REQUEST["account_no"];
$ID_no=$_REQUEST["ID_no"];

 $AIC="|099400065753600";
//  $MEM_ID="0050103846";
//  $gg="02";
 $stutus="0";


include('../qrlib.php'); 
QRcode::png($AIC."\n".$ID_no."\n".$account_no."\n".$stutus);

?>