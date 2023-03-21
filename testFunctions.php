<?php
require("./php_librarys/function.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>

<body>
    <?php

    $pokedex = array();

    /**
     * CREATE POKEDEX | INSERT POKEMON
     */
    $pokemon = createPokemon("001", "Bulbasaur", "Kanto", ["Plant", "Poison"], "70", "6.9", "Unvolved", "media/001.png",);
    insertPokemon($pokedex, $pokemon);

    $pokemon = createPokemon("002", "Ivysaur", "Hoen", ["Plant", "Poison"], "100", "13", "First evolution", "media/002.pang",);
    insertPokemon($pokedex, $pokemon);

    $pokemon = createPokemon("003", "Charmander", "Jotho", ["Fire"], "60", "8.5", "Unvolved", "media/004.png",);
    insertPokemon($pokedex, $pokemon);

    /**
     * SHOW POKEDEX
     */
    showPokedex($pokedex);
    echo "<br/>";
    /**
     * DELETE IVYSAUR
     */
    deletePokemon($pokedex, 002);
    /**
     * SHOW POKEDEX
     */
    showPokedex($pokedex);
    ?>
</body>

</html>
