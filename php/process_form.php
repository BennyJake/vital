<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 1/30/14
 * Time: 10:15 PM
 */

if ($_POST) {

    require_once( '../vendor/autoload.php' );

    $mail = new PHPMailer;

    /*$mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup server
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'jswan';                            // SMTP username
    $mail->Password = 'secret';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    */

    $mail->isMail();

    $mail->From = 'server@vital.us.com';
    $mail->FromName = 'Website Estimate Request';
    $mail->addAddress('ben.chrisman.87@gmail.com', 'Ben Chrisman');  // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($_POST['email'], $_POST['name']);
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

}