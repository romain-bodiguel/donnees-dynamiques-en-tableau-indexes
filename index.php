<?php

$a = [
[
'name' => 'iPhone',
'releaseYear' => '2007',
'picture' => '2007.jpg'
],
[
'name' => 'iPhone 3G',
'releaseYear' => '2008',
'picture' => '2008.jpg'
],
[
'name' => 'iPhone 3GS',
'releaseYear' => '2009',
'picture' => '2009.jpg'
],
[
'name' => 'iPhone 4',
'releaseYear' => '2010',
'picture' => 'iphone4.jpg'
],
[
'name' => 'iPhone 4S',
'releaseYear' => '2011',
'picture' => 'iphone4s.jpg'
],
[
'name' => 'iPhone 5',
'releaseYear' => '2012',
'picture' => 'iphone5.jpg'
],
[
'name' => 'iPhone 5s',
'releaseYear' => '2013',
'picture' => 'iphone5s.jpg'
],
[
'name' => 'iPhone 5c',
'releaseYear' => '2013',
'picture' => 'iphone5c.jpg'
],
[
'name' => 'iPhone 6',
'releaseYear' => '2014',
'picture' => 'iphone6.jpg'
],
[
'name' => 'iPhone 6 Plus',
'releaseYear'=>'2014',                                                     'picture' => 'iphone6plus.jpg'
],
[
'name' => 'iPhone 6S',
'releaseYear' => '2015',
'picture' => 'iphone6.jpg'
],
['name' => 'iPhone 6S Plus',
'releaseYear' => '2015',
'picture' => 'iphone6plus.jpg'
]
];

// On crée la variable utilisée dans la template
// et on considère que par défaut on voulait afficher tous les iPhone
$dataForTemplate = $a;

// Filtre par année
// $f = 0; // pour afficher tous les iPhone
$f = 2014; // pour afficher les iPhone de 2014
// Si on ne veut qu'une seule année
if ($f = 0) {
    $dataForTemplate = [];
    foreach ($a as $iphon) {
        if ($iphon['releaseYear'] == $f) {
            $dataForTpl[] = $iphon;
        }
    }
}

// On inclut la template
include 'templates/home.tpl.php';