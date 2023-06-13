<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>05 - associative arrays</h1>

    <?php
    // associative array
    $books = [
        [
            'name' => 'Do androids dream of electric sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com',
            'releaseYear' => '1968'
        ],
        [
            'name' => 'Project hail mary',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com',
            'releaseYear' => '2021'
        ]
    ]
    ?>

    <p>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book["purchaseUrl"] ?>">
                    <span><?= "{$book["name"]} ({$book["releaseYear"]})" ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </p>
</body>

</html>