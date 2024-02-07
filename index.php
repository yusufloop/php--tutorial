<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <h1>Recommend books</h1>

    <?php
    $books = [
        [
            'name' => 'ikan',
            'author' => 'ayam',
            'releaseYear' => 1992,
            'url' => 'google.com',
        ],
        [
            'name' => '1 ikan',
            'author' => '2 ayam',
            'releaseYear' => 1990,
            'url' => 'google.com',
        ],
        [
            'name' => '2 ikan',
            'author' => '2 ayam',
            'releaseYear' => 1993,
            'url' => 'google.com',
        ],
    ];

    function filterByAuthor($books, $author)
    {
        $filterBooks = [];

        foreach($books as $book){
            if($book['author'] === $author){
                $filteredBooks[] = $book;
            }
        }

        return $filteredBooks;
    }


    ?>
    <ul>
        <?php foreach (filterByAuthor($books,'ayam') as $book) : ?>

            <li>
                <a href="<?= $book['url']  ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>


        <?php endforeach; ?>
    </ul>


</body>

</html>