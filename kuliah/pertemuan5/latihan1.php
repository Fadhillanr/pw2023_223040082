<?php 
// ARRAY
// Membuat array

$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Fadhilla', 18, false];
$binatang = ['🐻', '🦕', '🦢', '🐧', '🦒'];


// Mencetak Array
// mencetak 1 elemen di dalam array menggunakan echo
echo $hari[2];
echo "<hr>";

// mencetak semua isi array
// var_dump, print_r
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";
print_r($binatang);
echo "<hr>";

// Manipulasi array
// menambahkan  elemen menggunakkan index
$hari[3] = "Kamis";
print_r($hari);
echo "<br>";

// menambahkann elemen di akhir array menggunakan []
$hari[] = "Jum'at";
$hari[] = 'Sabtu';
$hari[] = 'Minggu';
print_r($hari);
echo "<hr>";

// menambah elemen di akhir array menggunakan array_push
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);
echo "<br>";

// menambah elemen di awal array menggunakan array_unshift
array_unshift($binatang, '🐎');
print_r($binatang);
echo "<hr>";

// menghapus elemen di belakang array dengan array_pop
array_pop($hari);
print_r($hari);
echo "<hr>";

// menghapus elemen di depan array dengan array_shift
array_shift($bulan);
print_r($bulan);


?>