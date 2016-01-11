<?php

$secret = ""; // check your app info at cpawild.com

$userid = isset($_GET['userid']) ? $_GET['userid'] : 0;
$name = isset($_GET['name']) ? $_GET['name'] : '';
$transactionid = isset($_GET['idtrans']) ? $_GET['idtrans'] : '';
$points = isset($_GET['reward']) ? $_GET['reward'] : null;
$signature = isset($_GET['signature']) ? $_GET['signature'] : null;
$ipuser = isset($_GET['userip']) ? $_GET['userip'] : "0.0.0.0";
if (md5($secret . $transactionid . $userid . $points) == $signature && $transactionid != '') {
    //Insert here your actions or queries
    echo 'OK';
} else {
    echo 'KO';
}


