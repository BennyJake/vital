<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 1/30/14
 * Time: 10:15 PM
 */

if ($_POST) {

    require_once( 'class/DropboxUploader.php' );
    require_once( 'vendor/autoload.php' );

    $body_html = '';
    $body_alt  = '';

    foreach($_POST as $key => $val){
        if(substr($key,0,6) == 'vital_'){

            $body .= ucwords(str_replace('_',' ',substr($key,6))).': '.$val;
            $body_html .= $body."<br/><br/>";
            $body_alt  .= $body."\n\n";
        }
    }

    if(strlen($body_html) > 0 && strlen($body_alt) > 0){

        if ($_FILES){
            try {
                // Rename uploaded file to reflect original name
                if ($_FILES['file']['error'] !== UPLOAD_ERR_OK)
                    throw new Exception('File was not successfully uploaded from your computer.');

                if ($_FILES['file']['name'] === "")
                    throw new Exception('File name not supplied by the browser.');

                $tmpFile = 'vital_signs_upload/'.str_replace("/\0", '_', $_FILES['file']['name']);
                if (!move_uploaded_file($_FILES['file']['tmp_name'], $tmpFile))
                    throw new Exception('Cannot rename uploaded file!');
            } catch(Exception $e) {
                //echo '<span style="color: red;font-weight:bold;margin-left:393px;">Error: ' . htmlspecialchars($e->getMessage()) . '</span>';
            }
        }

        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.vitalsigns.us.com';               // Specify main and backup server
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'noreply@vitalsigns.us.com';        // SMTP username
        $mail->Password = 'Vital216!';                        // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted


        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        if(isset($tmpFile)){
            $mail->addAttachment($tmpFile);                   // Add attachments
        }
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Vital Signs Estimate Request';
        $mail->Body    = $body_html;
        $mail->AltBody = $body_alt;


        $mail->From = 'noreply@vital.us.com';
        $mail->FromName = 'Vital Signs Website Form';
        $mail->addAddress('ben.chrisman.87@gmail.com', 'Ben Chrisman');  // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($_POST['email'], $_POST['name']);
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            exit;
        }

        try {
            // Enter your Dropbox account credentials here
            $uploader = new DropboxUploader('ben.chrisman.87@gmail.com', 'quietracket22');
            $uploader->upload($tmpFile, 'Vital Signs Upload');

        } catch(Exception $e) {
            //echo '<span style="color: red;font-weight:bold;margin-left:393px;">Error: ' . htmlspecialchars($e->getMessage()) . '</span>';
        }

        // Clean up
        /*if (isset($tmpFile) && file_exists($tmpFile))
            unlink($tmpFile);

        if (isset($tmpDir) && file_exists($tmpDir))
            rmdir($tmpDir);
        */
    }
}