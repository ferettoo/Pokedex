<?php

    $pokedex = array(
        [
        "number" => "001",
        "name" => "Bulbasaur",
        "region" => "Kanto",
        "type" => ["plant","poison"],
        "height" => "70",
        "width" => "6.9",
        "evolution" => "Unevolved",
        "image" => "media/001.png"
        ],
        [
        "number" => "002",
        "name" => "Ivysaur",
        "region" => "Hoen",
        "type" => ["plant","poison"],
        "height" => "100",
        "width" => "13",
        "evolution" => "First evolution",
        "image" => "media/002.png"
        ],
        [
        "number" => "004",
        "name" => "Charmander",
        "region" => "Jotho",
        "type" => "Fire",
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
    function createPokemon($number,$name,$region,$type,$height,$width,$evolution,$image){
        $pokemon =[
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

    function addPokemon($pokedex,$pokemon){
        
    }

    function showPokemon($pokedex,$numPokemon){
        
        /**for ($i=0; $i < count($pokedex); $i++) { 
            
        }
        */
    }

    function deletePokemon($pokedex,$numPokemon){

    }

    function modifyPokemon(){
        
    }

?>