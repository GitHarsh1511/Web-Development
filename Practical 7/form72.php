<?php if (isset($_POST['submit'])) {
    $name = $_POST['name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical_7_2 | PHP</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .flex {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .hw {
            height: 100vh;
            width: 100vw;
        }

        .container {
            background: #e2e2e2;
            height: 200px;
            width: 25rem;
            padding: 10px;
        }

        .btn {
            padding: 10px;
        }
    </style>
</head>

<body class="flex hw">
    <h3>This is form.php</h3>
    <div class="container flex">
        <form action="" method="POST">
            <label for="name">Name : </label> <input type="text" name="name" id="name" value="<?php echo $name ?>">
            <button class="btn" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>