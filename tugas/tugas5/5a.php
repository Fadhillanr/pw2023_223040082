<?php 
$mahasiswa = [

[
    'foto'=> 'Fadhilla.jpeg',
    'nama' =>'Fadhilla Nur Islami', 
    'nrp' =>'223040082',
    'jurusan'=> 'Teknik Informatika',
    'email' => 'fadhilla.223040082@mail.unpas.ac.id',
], 

[
    'foto'=> 'Syerly.jpeg',
    'nama' =>'Syerly Ariyanti Nurafifa', 
    'nrp' =>'223040100',
    'jurusan'=> 'Teknik Informatika',
    'email' => 'Syerly.223040100@mail.unpas.ac.id',
],

[
    'foto'=> 'Danu.jpeg',
    'nama' =>'Lisvindanu', 
    'nrp' =>'223040038',
    'jurusan'=> 'Teknik Informatika',
    'email' => 'lisvindanu.223040038@mail.unpas.ac.id',
],

[
    'foto'=> 'Angga.jpeg',
    'nama' =>'Angga Nugraha Sofyan', 
    'nrp' =>'223040052',
    'jurusan'=> 'Teknik Informatika',
    'email' => 'angga.223040052@mail.unpas.ac.id',
],

[
    'foto'=> 'Melinda.jpeg',
    'nama' =>'Melinda Sulaeman', 
    'nrp' =>'223040091',
    'jurusan'=> 'Teknik Informatika',
    'email' => 'melinda.223040091@mail.unpas.ac.id',
],
[
    'foto'=> 'Jita.jpeg',
    'nama' =>'Jita Bilhaq ', 
    'nrp' =>'223040055',
    'jurusan'=> 'Teknik Informatika',
    'email' => 'bita.223040055@mail.unpas.ac.id',
],
[
    'foto'=> 'Bima.jpeg',
    'nama' =>'Bima Hafit Prakoso', 
    'nrp' =>'223040088',
    'jurusan'=> 'Teknik Informatika',
    'email' => 'bima.223040088@mail.unpas.ac.id',
],
[
    'foto'=> 'Feby.jpeg',
    'nama' =>'Febi Alia Rahman', 
    'nrp' =>'223040059',
    'jurusan'=> 'Teknik Informatika',
    'email' => 'febi.223040059@mail.unpas.ac.id',
],
[
    'foto'=> 'Lolyn.jpeg',
    'nama' =>'Maria Oa Paulina Memen Loly', 
    'nrp' =>'223040099',
    'jurusan'=> 'Teknik Informatika',
    'email' => 'Maria.223040099@mail.unpas.ac.id',
],
[
    'foto'=> 'Syahbrina.jpeg',
    'nama' =>'Syahbrina Dinova', 
    'nrp' =>'223040074',
    'jurusan'=> 'Teknik Informatika',
    'email' => 'syahbrina.223040074@mail.unpas.ac.id',
],

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <img src="img/<?= $mhs ['foto']; ?>" width=150>
        <li>Nama: <?= $mhs['nama']; ?></li>
        <li>NRP: <?= $mhs['nrp']; ?></li>
        <li>Jurusan: <?= $mhs['jurusan']; ?></li>
        <li>E-mail: <?= $mhs['email']; ?></li>
    </ul>
    <?php } ?>
        