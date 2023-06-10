<<<<<<< HEAD
<?php

function urutanAngka($angka)
{
    $mulai = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $mulai . " ";
            $mulai++;
        }
        echo "<br>";
    }
}

// gunakan nilai parameter = 5, maka jumlah baris mengikuti 5 baris 
=======
<?php

function urutanAngka($angka)
{
    $mulai = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $mulai . " ";
            $mulai++;
        }
        echo "<br>";
    }
}

// gunakan nilai parameter = 5, maka jumlah baris mengikuti 5 baris 
>>>>>>> f327e519a49df2bfd446fb810f73f9a43233d5f2
urutanAngka(5);