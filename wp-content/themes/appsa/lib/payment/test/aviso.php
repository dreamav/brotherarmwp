<?php
define('DR',rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/');
include DR.'payment/config.php';
// require rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/' . 'lib/functions.php';
// include('../phpmailer/PHPMailerAutoload.php');

$hash = md5($_POST['action'] . ';' . $_POST['orderSumAmount'] . ';' . $_POST['orderSumCurrencyPaycash'] . ';' . $_POST['orderSumBankPaycash'] . ';' . $configs['shopId'] . ';' . $_POST['invoiceId'] . ';' . $_POST['customerNumber'] . ';' . $configs['ShopPassword']);
if (strtolower($hash) != strtolower($_POST['md5'])) {
    $code = 1;
} else {
    $code = 0;


}
print '<?xml version="1.0" encoding="UTF-8"?>';
print '<paymentAvisoResponse performedDatetime="' . $_POST['requestDatetime'] . '" code="' . $code . '" invoiceId="' . $_POST['invoiceId'] . '" shopId="' . $configs['shopId'] . '"/>';

?>