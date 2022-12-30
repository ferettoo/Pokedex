<?php
require("../php_librarys/function.php");

//Si no existe lo creo
if (!isset($_SESSION['pokedex'])) {
    $pokedex = array();
} else {
    // Actualiza el array 
    $pokedex = $_SESSION['pokedex'];
}

$errores = array();
$sendDataPokemon = true;

// Comprobar las variables de los pokemon
if (isset($_POST['submitForm'])) {
    //Numero Pokemon
    if (!empty($_POST['numberForm'])) {
        $numPokemon = $_POST['numberForm'];
    } else {
        array_push($errores, 'You have not assigned a number to the pokemon.');
        $sendDataPokemon = false;
    }

    //Nombre Pokemon
    if (!empty($_POST['nameForm'])) {
        $namePokemon = $_POST['nameForm'];
    } else {
        array_push($errores, 'You have not assigned a name to the pokemon.');
        $sendDataPokemon = false;
    }

    //Region Pokemon
    $regionPokemon = $_POST['region'];

    //Tipo de Pokemon
    if (!empty($_POST['type'])) {
        $typesPokemon = $_POST['type'];
    } else {
        array_push($errores, 'You have not assigned a type to the pokemon.');
        $sendDataPokemon = false;
    }

    //Altura Pokemon
    if (!empty($_POST['heightForm'])) {
        $heightPokemon = $_POST['heightForm'];
    } else {
        array_push($errores, 'You have not assigned a height to the pokemon.');
        $sendDataPokemon = false;
    }

    //Peso Pokemon
    if (!empty($_POST['weightForm'])) {
        $weightPokemon = $_POST['weightForm'];
    } else {
        array_push($errores, 'You have not assigned a weight to the pokemon.');
        $sendDataPokemon = false;
    }

    //Evolution Pokemon
    if (!empty($_POST['evolution'])) {
        $evolutionPokemon = $_POST['evolution'];
    } else {
        array_push($errores, 'You have not assigned an evolution to the pokemon.');
        $sendDataPokemon = false;
    }

    // $path = "/Applications/MAMP/htdocs/pokedex/media/"; //Donde se guardaran los archivos que suba el usuario
    $path = "../media/"; //Donde se guardaran los archivos que suba el usuario
    $userFile = $path . basename($_FILES['imageForm']['name']); // Archivo del usuario
    $confirmUpload = 1;
    $typeFile = strtolower(pathinfo($userFile, PATHINFO_EXTENSION)); //Tipo de archivo

    //Recuperar datos imagen
    if (($_FILES['imageForm']['error'] == 4)) {
        array_push($errores, 'You have not uploaded any images.');
        $confirmUpload = 0;
    } else {

        $check = getimagesize($_FILES['imageForm']['tmp_name']);
        if ($check !== false) { //Si es veridica
            $confirmUpload = 1;
        } else { // Si no es veridica
            array_push($errores, 'The file is not an image.');
        }
    }

    //Confirma la subida de la imagen del usuario
    if ($confirmUpload == 0) { //Si no esta bien
        array_push($errores, 'Sorry, your file was not uploaded.');
        $sendDataPokemon = false;
        // $_SESSION['error'] = 'Sorry, your file was not uploaded.';
    } else { //Si esta bien
        if (move_uploaded_file($_FILES['imageForm']['tmp_name'], $userFile)) {
            echo 'The file ' . htmlspecialchars(basename($_FILES['imageForm']['name'])) . ' has been uploaded.';
        } else {
            array_push($errores, 'Sorry there was an error uploading your file.');
            // $_SESSION['error'] = 'Sorry there was an error uploading your file.';
        }
    }

    //Crear al Pokemon | Insertar Pokemon | Redireccionar Usuario
    if ($sendDataPokemon) { // == true

        if (isset($_POST['submitModify'])) {
            modifyPokemon($pokedex, $numPokemon, $namePokemon, $regionPokemon, $typesPokemon, $heightPokemon, $weightPokemon, $evolutionPokemon, $userFile);
            $_SESSION['pokedex'] = $pokedex;
            header('Location: ../php_views/pokemon_list.php');
        } else {
            //Si son el mismo nombre sobreescribe al pokemon
            $newPokemon = createPokemon($numPokemon, $namePokemon, $regionPokemon, $typesPokemon, $heightPokemon, $weightPokemon, $evolutionPokemon, $userFile);
            insertPokemon($pokedex, $newPokemon);
            $_SESSION['pokedex'] = $pokedex;
            header('Location: ../php_views/pokemon_list.php');
        }
    } else {

        $dataPokemonForm['numPokemon'] = $numPokemon;
        $dataPokemonForm['namePokemon'] = $namePokemon;
        $dataPokemonForm['regionPokemon'] = $regionPokemon;
        $dataPokemonForm['typesPokemon'] = $typesPokemon;
        $dataPokemonForm['heightPokemon'] = $heightPokemon;
        $dataPokemonForm['weightPokemon'] = $weightPokemon;
        $dataPokemonForm['evolutionPokemon'] = $evolutionPokemon;
        $_SESSION['dataPokemonForm'] = $dataPokemonForm;

        $_SESSION['errores'] = $errores;

        if (isset($_POST['submitModify'])) {
            header('Location: ../php_views/pokemon_edit.php');
        } else {
            header('Location: ../php_views/pokemon.php');
        }
    }
} else if (isset($_POST['deletePokemon'])) { //Borrar un Pokemon
    $deletedPokemon = $_POST['hiddenDelete'];

    $i = 0;
    $found = false;
    while ($i < count($pokedex) && !$found) {
        if ($pokedex[$i]['number'] == $deletedPokemon) {
            $found = true;
            if (unlink($pokedex[$i]['image'])) {
                deletePokemon($pokedex, $deletedPokemon);
                $_SESSION['pokedex'] = $pokedex;
                header('Location: ../php_views/pokemon_list.php');
            } else {
                $_SESSION['error'] = 'The pokemon has not been deleted. Problems deleting the image.';
            }
        } else {
            $i++;
        }
    };
} else if (isset($_POST['modifyPokemon'])) {
    $modifiedPokemon = $_POST['hiddenModify'];

    $i = 0;
    $found = false;
    while ($i < count($pokedex) && !$found) {
        if ($pokedex[$i]['number'] == $modifiedPokemon) {
            $found = true;
            $_SESSION['pokemon'] = $pokedex[$i];
            header('Location: ../php_views/pokemon_edit.php');
        } else {
            $i++;
        }
    };
};
