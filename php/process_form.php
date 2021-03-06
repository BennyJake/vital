<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 1/30/14
 * Time: 10:15 PM
 */

if ($_POST) {

    require_once( 'class/Dzip.php' );
    require_once( 'class/DropboxUploader.php' );
    require_once( 'vendor/autoload.php' );

    //PHPMAILER

    $body_alt = '';
    $body_html = '';

    foreach($_POST as $key => $val){

        if(substr($key,0,6) == 'vital_'){

            $form[$key] = $val;

            $key = ucwords(str_replace('_',' ',substr($key,6)));

            $body_alt .= $key . ': '.$val."\n\n";
            $body_html .= $key . ': '.$val."<br/><br/>";

        }
    }

    if(strlen($body_html) > 0 && strlen($body_alt) > 0){

        if ($_FILES){

            $zip_loc = "uploads/".date('Y-m-d_h-i-a')."_".$form['vital_name'].".zip";

            $zip = new dZip($zip_loc);

            for($i=0;$i<count($_FILES["file"]["name"]);$i++)
            {
                // Rename uploaded file to reflect original name
                //if ($_FILES['file']['error'][$i] !== UPLOAD_ERR_OK)
                //    throw new Exception($_FILES['file']['error'][$i]);

                if ($_FILES['file']['name'][$i] !== "")
                $zip->addFile($_FILES["file"]["tmp_name"][$i],$_FILES["file"]["name"][$i]);            }
        }

        $zip->save();

        $body_html .= "<a href='".WEBSITE_ROOT.$zip_loc."'>Link to uploaded files</a>";
        $body_alt .= "Copy and paste the URL into a web browser to download client files: ".WEBSITE_ROOT.$zip_loc;

        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.vitalsigns.us.com';  // Specify main and backup server
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'noreply@vitalsigns.us.com';           // SMTP username
        //$mail->Username = 'server@vitalsigns.us.com';           // SMTP username
        $mail->Password = 'Vital216!';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Vital Signs Estimate Request';
        $mail->Body    = $body_html;
        $mail->AltBody = $body_alt;


        $mail->From = 'noreply@vital.us.com';
        $mail->FromName = 'Vital Signs Website Form';
        $mail->addAddress('ben.chrisman.87@gmail.com', 'Ben Chrisman');  // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($form['vital_email'], $form['vital_name']);
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
            $uploader->upload($zip_loc, 'Vital Signs Upload');

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
