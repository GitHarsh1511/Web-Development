<?php
if (isset($_POST['submit'])) {
    $file = $_FILES["file"];
    $destination = "upload/";
    $fileName = $file['name'];
    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = ["jpg", "jpeg", "png", "txt"];
    if (in_array($fileActualExt, $allowed)) {
        if (!file_exists($destination . $fileName)) {
            if (move_uploaded_file($file['tmp_name'], $destination . $fileName)) {
                echo "UPLOADED";
            } else {
                echo "NOT UPLOADED";
            }
        } else {
            echo "File Already Exists";
        }
    } else {
        echo "File Extention Does Not Match";
    }
}
