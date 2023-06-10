<?php 
// Array Multidimensi (array didalam array)
$mahasiswa = [
['Dila', '🐹', '🍞'], 
['Lahya', '🐤','🍔'], 
['Olga', '🐢', '🍣'], 
['Intan', '🐱', '🍓'], 
['Dhea', '🐠', '🍗']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs) { ?>
        <ul>
            <li>Nama: <?= $mhs[0] ?></li>
            <li>Makanan Favorit: <?= $mhs[2] ?></li>
            <li>Binatang Peliharaan: <?= $mhs[1] ?></li>
        </ul>
    <?php } ?>


</body>
</html>