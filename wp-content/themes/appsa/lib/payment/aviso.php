<?php
define('DR',rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/');
include DR.'ru/payment/config.php';
include DR."ru/includes/phpmailer/PHPMailerAutoload.php";

### ПРОВЕРКА POST
$f = @fopen("post.txt", "a+") or die("error");
foreach ($_POST as $key => $value) {
    # code...
    fputs($f, $key . ': ' . $value . "\n");
}
fclose($f);
### END ПРОВЕРКА POST

$hash = md5($_POST['action'] . ';' . $_POST['orderSumAmount'] . ';' . $_POST['orderSumCurrencyPaycash'] . ';' . $_POST['orderSumBankPaycash'] . ';' . $configs['shopId'] . ';' . $_POST['invoiceId'] . ';' . $_POST['customerNumber'] . ';' . $configs['ShopPassword']);
if (strtolower($hash) != strtolower($_POST['md5'])) {
    $code = 1;
} else {
    $code = 0;

    ### базовые настройки мейлера
    $mail = new PHPMailer;

    $mail->CharSet  = 'UTF-8';
    $mail->isSMTP();                                // Set mailer to use SMTP
    $mail->Host     = 'smtp.timeweb.ru';            // Specify main and backup SMTP servers
    $mail->Port     = 2525;                         // TCP port to connect to
    $mail->SMTPAuth = true;                         // Enable SMTP authentication

    $mail->Username = "noreply@streetadventure.ru";
    $mail->Password = "T2iCkm2q";

    // создать новую почту на sa.com
    $mail->setFrom('noreply@streetadventure.ru', 'ru'); // от кого в заголовке письма
    $mail->isHTML(true);                            // Set email format to HTML

    if ( $_POST["Shp_formtype"] == '25' ) {
        $mail->Subject = 'Письмо с ru: Оплачена подарочная карта за ('.$_POST['orderSumAmount'].')';
    } else {
        $mail->Subject = 'Письмо с ru: Оплачен квест '.$_POST["Shp_questName"].' за ('.$_POST['orderSumAmount'].')';
    }

$mail->Body    = <<<MEVINSIDE
<table>
    <tbody>
        <tr>
            <td style="text-align:left; padding:3px 7px;"><strong>Имя</strong></td>
            <td style="text-align:left; padding:3px 7px;"><strong>Email</strong></td>
            <td style="text-align:left; padding:3px 7px;"><strong>Телефон</strong></td>
            <td style="text-align:left; padding:3px 7px;"><strong>Квест</strong></td>
        </tr>
        <tr>
            <td style="text-align:left; padding:3px 7px;">{$_POST["Shp_name"]}</td>
            <td style="text-align:left; padding:3px 7px;">{$_POST["Shp_mail"]}</td>
            <td style="text-align:left; padding:3px 7px;">{$_POST["Shp_phone"]}</td>
            <td style="text-align:left; padding:3px 7px;">{$_POST["Shp_questName"]}</td>
        </tr>
    </tbody>
</table>
MEVINSIDE;
    $mail->addAddress('streetadventuremsk@gmail.com');     // Add a recipient

    if(!$mail->send()) {
        $data["error"] = 'Message could not be sent.';
        $data["error"] .= 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $data["error"] = 'Message has been sent';
    }

}
print '<?xml version="1.0" encoding="UTF-8"?>';
print '<paymentAvisoResponse performedDatetime="' . $_POST['requestDatetime'] . '" code="' . $code . '" invoiceId="' . $_POST['invoiceId'] . '" shopId="' . $configs['shopId'] . '"/>';
?>