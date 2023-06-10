<?php
require('functions.php');
$tittle = 'Home' ;
    $students = [
        [
            "nama" => "Fadhilla Nur Islami",
            "npm" => "223040082",
            "email" => "fadhillanr@gmail.com"
        ],
        [
            "nama" => "Syerly Aryanti",
            "npm" => "223040100",
            "email" => "aryantisyerly@gmail.com"
        ],

    ];

    // dd($_SERVER["REQUEST_URI"]);
    // /pw2023_223040082/kuliah/pertemuan9/
    require('views/index.view.php');
?>
