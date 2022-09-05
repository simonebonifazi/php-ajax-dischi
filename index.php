<?php

    include 'includes/discs.php';

    // $discs = [
    //     [
    //         'title' => 'New Jersey',
    //         'author' => 'Bon Jovi',
    //         'year' => 1988,
    //         'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
    //         'genre' => 'Rock'
    //     ],
    //     [
    //         'title' => 'Live at Wembley 86',
    //         'author' => 'Queen',
    //         'year' => 1992,
    //         'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
    //         'genre' => 'Pop'
    //     ],
    //     [
    //         'title' => 'Ten\'s Summoner\'s Tales',
    //         'author' => 'Sting',
    //         'year' => 1993,
    //         'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
    //         'genre' => 'Pop'
    //     ],
    //     [
    //         'title' => 'Steve Gadd band',
    //         'author' => 'Steve Gadd Band',
    //         'year' => 2018,
    //         'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
    //         'genre' => 'Jazz'
    //     ],
    //     [
    //         'title' => 'Brave new World',
    //         'author' => 'Iron Maiden',
    //         'year' => 2000,
    //         'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
    //         'genre' => 'Metal'
    //     ],
    //     [
    //         'title' => 'One more car, one more rider',
    //         'author' => 'Eric Clapton',
    //         'year' => 2002,
    //         'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
    //         'genre' => 'Rock'
    //     ]
    // ];
?>

<!-- markup -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dischi php</title>
</head>

<header>
    <figure>
        <img src="https://th.bing.com/th/id/R.57dd160d1e8f82b1113ca3f73393621c?rik=EHp%2bG6a6uyaHaA&amp;pid=ImgRaw&amp;r=0"
            alt="logo">
    </figure><select name="search-for-genre" id="search-for-genre">
        <option value="">--Seleziona un Genere--</option>
        <option value="Rock">Rock</option>
        <option value="Pop">Pop</option>
        <option value="Jazz">Jazz</option>
        <option value="Metal">Metal</option>
    </select>
</header>
<main>
    <div class="container deck">
        <?php if(isset($discs)) : ?>
        <?php foreach ($discs as $disc) : ?>
        <div class="card">
            <figure>
                <img src="<?=$disc['poster'] ?>" alt="<?= $disc['title'] ?>">
                <figcaption>
                    <h3><?=$disc['title'] ?></h3>
                    <h6><?=$disc['author'] ?></h6>
                    <h6><?=$disc['year'] ?></h6>
                </figcaption>
            </figure>
        </div>
        <?php endforeach ?>
        <?php else : ?>
        <h3>Errore nel caricamento della pagina. Riiprovare più tardi</h3>
        <?php endif ?>
    </div>
</main>

</html>