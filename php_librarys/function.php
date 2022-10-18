
<?php

/**
 * Utilizamos las variables para poder crear un nuevo pokemon,
 * añadiendole informacion en otra funcion.
 */
function createPokemon($number, $name, $region, $type, $height, $width, $evolution, $image)
{
    $pokemon = [
        "number" => $number,
        "name" => $name,
        "region" => $region,
        "type" => $type,
        "height" => $height,
        "width" => $width,
        "evolution" => $evolution,
        "image" => $image
    ];
    return $pokemon;
}

function insertPokemon(&$pokedex, $pokemon)
{
    $pokemonNumber = $pokemon["number"];

    $existPokemon = searchPokemon($pokedex, $pokemonNumber);

    if ($existPokemon == -1) {
        array_push($pokedex, $pokemon);
    } else {
        echo 'The pokemon ' . $pokemonNumber . ' alredy exist.' . '<br>';
    }
}

function showPokemon($pokemon)
{
    $type = ""; // Creamos esta variable para poder mostrar los tipos.

    echo "Number: " . $pokemon["number"] . "<br>";
    echo "Name: " . $pokemon["name"] . "<br>";
    echo "Region: " . $pokemon["region"] . "<br>";

    for ($i = 0; $i < count($pokemon["type"]); $i++) {
        $type .= $pokemon["type"][$i] . " ";
    }

    echo "Type Pokemon: " . $type . "<br>";
    echo "Height: " . $pokemon["height"] . "<br>";
    echo "Width: " . $pokemon["width"] . "<br>";
    echo "Evolution: " . $pokemon["evolution"] . "<br>";
    echo "Image: " . $pokemon["image"] . "<br>";
    echo "<br>";
}

function showPokedex($pokedex)
{
    for ($i = 0; $i < count($pokedex); $i++) {
        showPokemon($pokedex[$i]);
    }

    // $i = 0;
    // $type = "";

    // foreach ($pokedex[$i] as $key => $value) {

    //     if ($key != "type") {
    //         echo $key . ' = ' . $value . '<br>';
    //     } else {
    //         for ($x = 0; $x < count($i["type"]); $x++) {
    //             $type .= $i["type"][$x] . " ";
    //         }
    //         echo $key . " = " . $type . '<br>';
    //     }
    // }
}

function searchPokemon($pokedex, $infoPokemon)
{
    $i = 0;
    $stop = false;
    $position = -1;

    while ($i < count($pokedex) && !$stop) {
        if ($pokedex[$i]["number"] == $infoPokemon) {
            $stop = true;
            $position = $i;
        } else {
            $i++;
        }
    }
    return $position;
}

function deletePokemon(&$pokedex, $numPokemon)
{
    $positionDelete = searchPokemon($pokedex, $numPokemon);

    if ($positionDelete != -1) {
        array_splice($pokedex, $positionDelete, 1);
    } else {
        echo "Pokemon not found";
    }
}

function modifyPokemon(&$pokedex, $number, $name, $region, $type, $height, $width, $evolution, $image)
{
    $position = searchPokemon($pokedex, $number);

    if ($position != -1) {
        $pokemon = createPokemon($number, $name, $region, $type, $height, $width, $evolution, $image);
        $pokedex[$position] = $pokemon;
    } else {
        echo "Pokemon doesn't exist.";
    }
}
