<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>06 - function and filters</h1>

    <?php
    // associative array is object in javascript
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
        ],
        [
            'name' => 'The martian',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com',
            'releaseYear' => '2011'
        ]
    ];

    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book; // add item to array
            }
        }
        return $filteredBooks;
    }

    ?>

    <p>
        <?php foreach (filterByAuthor($books, "Andy Weir") as $book) : ?>
            <li>
                <a href="<?= $book["purchaseUrl"] ?>">
                    <span><?= "{$book["name"]} ({$book["releaseYear"]}) by {$book["author"]}" ?></span>
                </a>
            </li>
        <?php endforeach; ?>
    </p>
</body>

</html>