<?php

function openDB()
{
    $servername = "127.0.0.1";
    $username = "root";
    $password = "root";

    $conn = new PDO("mysql:host=$servername;dbname=pokedex", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec('set names utf8');

    return $conn;
}

function closeDB()
{
    return null;
}

function selectPokemons()
{
    $conn = openDB();
    $sentenciaText = 'SELECT * FROM pokemons';
    $sentencia = $conn->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();

    $conn = closeDB();

    return $resultado;
}

function selectType()
{
    $conn = openDB();
    $sentenciaText = 'SELECT * FROM tipos';
    $sentencia = $conn->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();

    $conn = closeDB();

    return $resultado;
}

function selectRegion()
{
    $conn = openDB();
    $sentenciaText = 'SELECT * FROM regiones';
    $sentencia = $conn->prepare($sentenciaText);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();

    $conn = closeDB();

    return $resultado;
}

function selectOnePokemon($idPokemon)
{
    $conn = openDB();
    $sentenciaText = 'SELECT * FROM pokemons WHERE numero = :idPokemon';
    $sentencia = $conn->prepare($sentenciaText);
    $sentencia->bindParam(':idPokemon', $idPokemon);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();

    $conn = closeDB();

    return $resultado;
}

function selectOnePokemonByType($idPokemon)
{
    $conn = openDB();
    $sentenciaText = 'SELECT * FROM tipos JOIN pokemons ON pokemons.numero = :idPokemon';
    $sentencia = $conn->prepare($sentenciaText);
    $sentencia->bindParam(':idPokemon', $idPokemon);
    $sentencia->execute();
    $resultado = $sentencia->fetchAll();

    $conn = closeDB();

    return $resultado;
}
