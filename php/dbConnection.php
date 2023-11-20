<?php
    $mysqli = new mysqli("localhost", "root", "", "recipesblog");

    if($mysqli->connect_error){
        die("Something's got wrong: " . $mysqli->errno);
    }
?>