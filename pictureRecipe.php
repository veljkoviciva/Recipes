<?php

// echo "<pre>";
// var_dump($_POST);
// var_dump($_FILES);
// echo "</pre>";

// print "O slici:<br>";
// print "Ime: " . $_FILES["recipe"]["name"];  //iz var_dump-a

if($_FILES["recipe"]["type"]=="image/png"){
    $pocetna = $_FILES["recipe"]["tmp_name"];
    $krajnja = "pictures/" . $_FILES["recipe"]["name"];
    move_uploaded_file($pocetna, $krajnja);
}
echo "<br>";

// echo "<pre>";
// var_dump(getimagesize($krajnja));
// echo "</pre>";

$maksimalnaVisina = 400;
$maksimalnaDuzina = 400;

$dimenzije = getimagesize($krajnja);

$tacnaDuzina = $dimenzije[0];
$tacnaVisina = $dimenzije[1];

if($tacnaDuzina<=$maksimalnaDuzina && $tacnaVisina<=$maksimalnaVisina){
    echo "<img src=\"$krajnja\" alt='Greska'>";
}
else
    echo "<img src=\"$krajnja\" alt='Greska' width=50% height=50%>";
