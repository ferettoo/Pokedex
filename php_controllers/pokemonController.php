<?php
require("../php_librarys/function.php");

//Sesiones que vera el Usuario 
$pokedex = array();

//Mensajes de errores si no va algun post
//Variables donde se guardan los datos del pokemon
$numPokemon = $_POST['numberForm'];
$namePokemon = $_POST['nameForm'];
$regionPokemon = $_POST['region'];
$typesPokemon = $_POST['type'];
$heightPokemon = $_POST['heightForm'];
$weightPokemon = $_POST['weightForm'];
$evolutionPokemon = $_POST['evolution'];


//Recuperar datos imagen
$path = "/Applications/MAMP/htdocs/pokedex/media/"; //Donde se guardaran los archivos que suba el usuario
$userFile = $path . basename($_FILES['imageForm']['name']); // Archivo del usuario
$confirmUpload = 1;
$typeFile = strtolower(pathinfo($userFile, PATHINFO_EXTENSION)); //Tipo de archivo

//Comprobar si la imagen es veridica
if (isset($_POST['submitForm'])) {
    $check = getimagesize($_FILES['imageForm']['tmp_name']);
    if ($check !== false) { //Si es veridica
        echo 'The file is an image: ' . $check['mime'] . '.';
        $confirmUpload = 1;
    } else { // Si no es veridica
        echo 'The file is not an image.';
    }
}

//Comprobar si la imagen existe
if (file_exists($userFile)) {
    echo 'The file alredy exist.';
    $confirmUpload = 0;
}

//Confirmamos que todo este bien
if ($confirmUpload == 0) { //Si no esta bien
    echo 'Sorry, your file was not uploaded.';
} else { //Si esta bien
    if (move_uploaded_file($_FILES['imageForm']['tmp_name'], $userFile)) {
        echo 'The file ' . htmlspecialchars(basename($_FILES['imageForm']['name'])) . ' has been uploaded.';
    } else {
        echo 'Sorry there was an error uploading your file.';
    }
}

//Creamos al pokemon
if (isset($_POST['submitForm'])) {
    $newPokemon = createPokemon($numPokemon, $namePokemon, $regionPokemon, $typesPokemon, $heightPokemon, $weightPokemon, $evolutionPokemon, $userFile);
    insertPokemon($pokedex, $newPokemon);
    header('Location: ../php_views/pokemon.php');
    // $_SESSION['pokedex'] = $pokedex; //Guardamos la pokedex
}
