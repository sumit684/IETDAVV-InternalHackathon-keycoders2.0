<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// All variables descirbed below
//add emails in this array to those we want to send files and message
foreach ($pending as $key => $value) {
    # code...
  $address = $value->email_id;  
  $sendname = $value->fname;
}

// body
$body1 = 'Dear '.$sendname.' your application has been verified and succesfully Registered, Kindly Login with your mob. No. And password on Alumni portal.<br>Thanks and Regards<br> University of GOA ';
//Subject
$subject1 = 'Sucessfully Registered';


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;
    // $mail->Username = 'ravindrakushwahanwg@gmail.com';
    // $mail->Password = 'Ravindra@12345';
    $mail->Username = 'doc.governmentofgoa@gmail.com';                 // SMTP username
    $mail->Password = 'SIH@2020';                                // Enable SMTP authentication
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('doc.governmentofgoa@gmail.com', 'Government OF GOA');
// below code will select all the mails from array 

    $mail->addAddress($address,$sendname);
     

//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('sales.pdf');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject1;
    $mail->Body    = $body1;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   echo "<script type='text/javascript'>alert('Email Send');</script>";
} catch (Exception $e) {
    echo "<script type='text/javascript'>alert('Message could not be sent. Mailer Error: ', $mail->ErrorInfo;);</script>";

}
