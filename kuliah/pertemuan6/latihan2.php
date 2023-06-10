<?php 
// Array Associative (array yang indexnya adalah string yang kita buat sendiri)
$mahasiswa = [
['nama' => 'Dila', 
'binatang' => '🐹', 
'makanan' =>['🍞', '🍰']
], 
['nama' => 'Lahya', 
'binatang' => '🐤', 
'makanan' => ['🍔', '🍿', '🍩']
], 
['nama' => 'Olga', 
'binatang' => '🐢', 
'makanan' => ['🍣', '🍜']
], 
['nama' => 'Intan', 
'binatang' => '🐱', 
'makanan' => ['🍓','🥟', '🍮']
], 
['nama' => 'Dhea', 
'binatang' => '🐠', 
'makanan' => ['🍗', '🍝']
]
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
            <li>Nama: <?= $mhs['nama'] ?></li>
            <li>Makanan Favorit: 
                <?php foreach($mhs['makanan'] as $mkn) {
                echo $mkn;
                }?>
            </li>
            <li>Binatang Peliharaan: <?= $mhs['binatang'] ?></li>
        </ul>
    <?php } ?>


</body>
</html>