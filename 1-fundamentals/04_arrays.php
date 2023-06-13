<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>04 - arrays</h1>

    <?php
    $books = ["Do androids dream of electric sheep", "The langoliers", "Hail mary"];
    ?>

    <ul>
        <?php
        foreach ($books as $book) {
            echo "<li>$book</li>";
        }
        ?>

        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>