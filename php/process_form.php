<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 1/30/14
 * Time: 10:15 PM
 */

require_once( 'class/DropboxUploader.php' );
//require_once( 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php');
require_once( 'vendor/autoload.php' );

use \PHPMailer as PHPMailer;

if ($_POST) {

    try {
        // Rename uploaded file to reflect original name
        if ($_FILES['file']['error'] !== UPLOAD_ERR_OK)
            throw new Exception('File was not successfully uploaded from your computer.');

        if ($_FILES['file']['name'] === "")
            throw new Exception('File name not supplied by the browser.');

        $tmpFile = 'temp/'.str_replace("/\0", '_', $_FILES['file']['name']);
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $tmpFile))
            throw new Exception('Cannot rename uploaded file!');
    } catch(Exception $e) {
        //echo '<span style="color: red;font-weight:bold;margin-left:393px;">Error: ' . htmlspecialchars($e->getMessage()) . '</span>';
    }

    //PHPMAILER

    $mail = new PHPMailer;


    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.vitalsigns.us.com';  // Specify main and backup server
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    //$mail->Username = 'maggie';
    $mail->Username = 'noreply@vitalsigns.us.com';           // SMTP username
    //$mail->Username = 'server@vitalsigns.us.com';           // SMTP username
    $mail->Password = 'Vital216!';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted


    $alt_body = '';
    $html_body = '';

    foreach($_POST as $key => $val){
        echo substr($key,6)."<br/>";
        if(substr($key,0,6) == 'vital_'){

            $key = ucwords(str_replace('_',' ',substr($key,6)));

            $alt_body .= $key . ': '.$val."\n\n";
            $html_body .= $key . ': '.$val."<br/><br/>";
        }
    }

    //$mail->isMail();

    $mail->From = 'noreply@vital.us.com';
    $mail->FromName = 'Website Estimate Request';
    $mail->addAddress('ben.chrisman.87@gmail.com', 'Ben Chrisman');  // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($_POST['email'], $_POST['name']);
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    $mail->addAttachment($tmpFile);

    $mail->Subject = 'Here is the subject';
    $mail->Body    = $html_body;
    $mail->AltBody = $alt_body;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
    }

    //DROPBOX


    try{
        // Enter your Dropbox account credentials here
        $uploader = new DropboxUploader('ben.chrisman.87@gmail.com', 'quietracket22');
        $uploader->upload($tmpFile, 'vital_signs_upload');

    } catch(Exception $e) {
        //echo '<span style="color: red;font-weight:bold;margin-left:393px;">Error: ' . htmlspecialchars($e->getMessage()) . '</span>';
    }

    // Clean up
    if (isset($tmpFile) && file_exists($tmpFile))
        unlink($tmpFile);

    }