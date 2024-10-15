<?php session_start();
if (!isset($_SESSION["counter"])) {
    $_SESSION["counter"] = 1;
} else {
    $_SESSION["counter"] += 1;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P09 | PHP</title>
</head>

<body>
    <div class="container">
        <h1>Page View Count :
            <?php echo $_SESSION["counter"] ?>
        </h1>
    </div>
</body>

</html>