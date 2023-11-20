<?php
    include("dbConnection.php");

    // $stmt = $mysqli->prepare("insert into recipes (title, shortDescription, ingredients, preparation,
    // type, subtype, numberOfPeople) values(?,?,?,?,?,?,?)");

    // $stmt->bind_param("ssssssi", $title, $shortDescription, $ingredients, $preparation, $type,
    //     $subtype, $numberOfPeople);


        
    $title = $_POST['title'];
    $shortDescription = $_POST['shortDescription'];
    $ingredients = $_POST['ingredients'];
    $preparation = $_POST['longDescription'];
    $type = $_POST['selectType'];
    $subtype = $_POST['selectSubtype'];
    $numberOfPeople = $_POST['numberPerson'];

        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

    // if($stmt->execute()){
    //     header("Location:../index.html");
    // }
    // else
    // header("Location:../createRecipe.html");
?>

<!-- Osposobiti  recipePicture  $recipePicture-->