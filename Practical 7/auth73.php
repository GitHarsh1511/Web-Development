<?php
$file = fopen("loginDetail.txt", 'r');
$file_content = fread($file, filesize('loginDetail.txt'));
$login_credentials = explode(" ", $file_content);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!($username == $login_credentials[0] && $password == $login_credentials[1])) {
        echo "<h3>Login Credentials Does Not Match!<br>Please Try Again After Some times.</h3>";
    } else {
        echo "<h3>Login Successfully</h3>";
    }
    fclose($file);
}
?>