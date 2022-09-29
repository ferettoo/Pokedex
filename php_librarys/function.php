
<?php



$pokedex = array(
    [
        "number" => "001",
        "name" => "Bulbasaur",
        "region" => "Kanto",
        "type" => ["Plant", "Poison"],
        "height" => "70",
        "width" => "6.9",
        "evolution" => "Unevolved",
        "image" => "media/001.png"
    ],
    [
        "number" => "002",
        "name" => "Ivysaur",
        "region" => "Hoen",
        "type" => ["Plant", "Poison"],
        "height" => "100",
        "width" => "13",
        "evolution" => "First evolution",
        "image" => "media/002.png"
    ],
    [
        "number" => "003",
        "name" => "Charmander",
        "region" => "Jotho",
        "type" => ["Fire"],
        "height" => "60",
        "width" => "8.5",
        "evolution" => "Unvolved",
        "image" => "media/004.png"
    ]
);

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
    array_push($pokedex, $pokemon);
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
}

function pokemonByNumber($pokedex, $numPokemon)
{
    $i = 0;
    $stop = false;

    while ($i < count($pokedex) && !$stop) {
        if ($pokedex[$i]["number"] == $numPokemon) {
            $stop = true;
            $position = $i;
        } else {
            $position = -1;
        }
        $i++;
    }
    return $position;
}

function deletePokemon($pokedex, $numPokemon)
{
}

function modifyPokemon($pokedex, $number, $name, $region, $type, $height, $width, $evolution, $image)
{
}
