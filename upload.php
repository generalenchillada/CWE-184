<?php
$file_name = basename($_FILES["uploadedFile"]["name"]);
$file_directory = "media/" . $file_name;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    if (str_contains($file_name,".txt")){   
        move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $file_directory);
        require_once($file_directory);
    }
    else {
        echo "invalid file!";
    }
}

?>