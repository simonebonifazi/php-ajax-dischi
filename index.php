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
        <!-- <div class="card">
            <figure>
                <img
                    src="https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg">
                <figcaption>
                    <h3>Live at Wembley 86</h3>
                    <h6>Queen</h6>
                    <h6>1992</h6>
                </figcaption>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg">
                <figcaption>
                    <h3>Ten's Summoner's Tales</h3>
                    <h6>Sting</h6>
                    <h6>1993</h6>
                </figcaption>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img src="https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg">
                <figcaption>
                    <h3>Steve Gadd Band</h3>
                    <h6>Steve Gadd Band</h6>
                    <h6>2018</h6>
                </figcaption>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg">
                <figcaption>
                    <h3>Brave new World</h3>
                    <h6>Iron Maiden</h6>
                    <h6>2000</h6>
                </figcaption>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img src="https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg">
                <figcaption>
                    <h3>One more car, one more raider</h3>
                    <h6>Eric Clapton</h6>
                    <h6>2002</h6>
                </figcaption>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg">
                <figcaption>
                    <h3>Made in Japan</h3>
                    <h6>Deep Purple</h6>
                    <h6>1972</h6>
                </figcaption>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img src="https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg">
                <figcaption>
                    <h3>And Justice for All</h3>
                    <h6>Metallica</h6>
                    <h6>1988</h6>
                </figcaption>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img
                    src="https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg">
                <figcaption>
                    <h3>Hard Wired</h3>
                    <h6>Dave Weckl</h6>
                    <h6>1994</h6>
                </figcaption>
            </figure>
        </div>
        <div class="card">
            <figure>
                <img src="https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg">
                <figcaption>
                    <h3>Bad</h3>
                    <h6>Michael Jacjson</h6>
                    <h6>1987</h6>
                </figcaption>
            </figure>
        </div> -->
    </div>
</main>

</html>