<?php 
define('BASE_URL', '/pw2023_223040082/kuliah/pertemuan9/');

function dd($value)
{
    echo "<prev>";
    var_dump($value);
    echo "</pre>";
    die();
}

function uriIs($uri) 
{
    return($_SERVER["REQUEST_URI"] === BASE_URL . $uri) ? 'active': '';
}

?>