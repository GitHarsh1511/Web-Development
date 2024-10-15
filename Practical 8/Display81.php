<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY | PHP</title>
</head>

<body>
    <?php
    $serverName = "localhost";
    $userName = "root";
    $password = "root";
    $dbName = "wd_p8";
    $con = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$con) {
        die("Falied " . mysqli_connect_error());
    } else {
        $query = "select * from user";
        $result = mysqli_query($con, $query);
        echo "<h2>Displaying User Details </h2>";
        echo "<table border=1><tr>"
            . "<th>Name</th>"
            . "<th>Email</th>"
            . "<th>Mobile</th>"
            . "<th>Address</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>"
                . "<td>" . $row['name'] . "</td>"
                . "<td>" . $row['email'] . "</td>"
                . "<td>" . $row['phone'] . "</td>"
                . "<td>" . $row['address'] . "</td></tr>";
        }
    }
    ?>
</body>

</html>