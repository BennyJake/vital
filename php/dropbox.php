<?php
if ($_POST) {



    try {
        // Rename uploaded file to reflect original name
        if ($_FILES['file']['error'] !== UPLOAD_ERR_OK)
            throw new Exception('File was not successfully uploaded from your computer.');

        if ($_FILES['file']['name'] === "")
            throw new Exception('File name not supplied by the browser.');

        $tmpFile = 'vital_signs_upload/'.str_replace("/\0", '_', $_FILES['file']['name']);
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $tmpFile))
            throw new Exception('Cannot rename uploaded file!');

        // Enter your Dropbox account credentials here
		$uploader = new DropboxUploader('ben.chrisman.87@gmail.com', 'quietracket22');
        $uploader->upload($tmpFile, 'Vital Signs Upload');

    } catch(Exception $e) {
        //echo '<span style="color: red;font-weight:bold;margin-left:393px;">Error: ' . htmlspecialchars($e->getMessage()) . '</span>';
    }

    // Clean up
    if (isset($tmpFile) && file_exists($tmpFile))
        unlink($tmpFile);

    if (isset($tmpDir) && file_exists($tmpDir))
        rmdir($tmpDir);
}
