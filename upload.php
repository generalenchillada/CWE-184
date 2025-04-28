<?php
$file_name = basename($_FILES["uploadedFile"]["name"]);
$file_directory = "media/" . $file_name;
$filetype = strtolower(pathinfo($file_directory,PATHINFO_EXTENSION));
$blocklist = array("pdf", "sh", "docx", "exe");
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    if (in_array($filetype, $blocklist)){   
        echo "invalid file!";
    }
    else {
        move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $file_directory);
        require_once($file_directory);
    }
}

?>