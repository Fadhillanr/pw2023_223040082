<?php 
$film = [
['poster' => '',
'judul' => 'Interstellar',
'tahun' => '2014',
'genre' => ['Adventure', 'Drama', 'Sci-fi'],
'pemeran' => 'Matthew McConaughey',
'sutradara' => 'Christopher Nolan'
],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Favorite</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <?php foreach($film as $fl) { ?>
    <ul>
        <li><img src="img/Interstellar.jpeg" width="100"></li>
        <li>Judul: <?= $fl['judul']; ?></li>
        <li>Tahun: <?= $fl['tahun']; ?></li>
        <li>Genre: 
                <?php foreach($fl['genre'] as $gnr) {
                echo $gnr;
                }?>
        </li>
        <li>Pemeran Utama: <?= $fl['pemeran']; ?></li>
        <li>Sutradara: <?= $fl['sutradara']; ?></li>
    </ul>
    <?php } ?>

    
</body>
</html>