<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSQL | PHP</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .container {
            height: 100vh;
            width: 100vw;
        }

        form {
            background: #e2e2e2;
            padding: 10px;
            margin: 10px auto;
            display: flex;
            flex-direction: column;
            width: 20rem;
            gap: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="Registration.php" method="post">
            <div class="input-box">
                <label for="name">Name : </label>
                <input type="text" id="name" name="name">
            </div>
            <div class="input-box">
                <label for="address">Address : </label>
                <textarea name="address" cols=20" rows="7"></textarea>
            </div>
            <div class="input-box">
                <label for="email">Email : </label>
                <input type="text" id="email" name="email">
            </div>
            <div class="input-box">
                <label for="phone">Mobile Number : </label>
                <input type="number" id="phone" name="phone">
            </div>
            <button name="submit">Submit</button>
        </form>
    </div>
</body>
<?php
if (isset($_POST['submit'])) {
    $serverName = "localhost";
    $userName = "root";
    $password = "root";
    $dbName = "wd_p8";
    $con = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$con) {
        die("Falied " . mysqli_connect_error());
    } else {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $mobile_no = $_POST['phone'];
        $query = "insert into user (name,address,email,phone) values ('$name','$address','$email','$mobile_no')";
        $result = mysqli_query($con, $query);
        if ($result == 1) {
            echo "<h1 style='color:green'>Data Inserted Succeccfully</h1>";
        } else {
            echo "<h1 style='color:red'>Failed</h1>";
        }
    }
    header("location:display.php");
}
?>

</html>