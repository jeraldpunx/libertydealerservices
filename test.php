<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->SMTPDebug = 2;
$mail->IsSMTP();
$mail->Host = "smtp.mail.us-east-1.awsapps.com";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Username = "sales@libertydealerservices.com";
$mail->Password = "hodel$4460";
$mail->Port = "465";



$mail->setFrom('sales@libertydealerservices.com', 'Liberty Dealer Services');
$mail->addReplyTo('sales@libertydealerservices.com', 'Liberty Dealer Services');
$mail->isHTML(true);

$mail->addAddress('jeraldpunx2014@gmail.com');               // Name is optional
$mail->Subject  = "Your Recovered Password | Liberty Dealer Services Portal";
$mail->Body     = getEmailTemplate('email-templates/password-reset.php', [
                    'link' => $_SERVER['SERVER_NAME'] . '/forgot-password.php?token=asdasdasd'
                ]);
try {
	$mail->send();
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


function getEmailTemplate($phpFilePath, $data_ = []) {
    extract($data_, EXTR_SKIP);
    ob_start();
    require($phpFilePath);    
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
}
