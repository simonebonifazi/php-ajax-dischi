<?php

    include 'includes/discs.php';

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