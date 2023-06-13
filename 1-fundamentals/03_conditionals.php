<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            place-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h1>03 - conditionals and booleans</h1>

    <?php
    $name = "Dark Matter";
    $isRead = false;
    $message = "";

    if ($isRead) {
        $message = "You have read $name";
    } else {
        $message = "You have not read $name";
    }
    ?>

    <p><?= $message ?></p>
</body>

</html>