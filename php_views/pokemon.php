<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<body>
    <form action="" method="POST">
        <label for="number">Número</label>
        <input type="text" size="3">
        <br>
        <label for="name">Name</label>
        <input type="text">
        <br>
        <label for="region">Region</label>
        <select name="region" id="pokemonRegion">
            <option value="kanto">Kanto</option>
        </select>
        <br>
        <label for="type">Type</label>
        <input type="checkbox" id="plant" name="plant">
        <label for="plant">Plant</label>
        <input type="checkbox" id="poison" name="plant">
        <label for="poison">Poison</label>
        <input type="checkbox" id="flyer" name="plant">
        <label for="flyer">Flyer</label>
        <input type="checkbox" id="water" name="plant">
        <label for="water">Water</label>
        <input type="checkbox" id="electric" name="plant">
        <label for="electric">Electric</label>
        <input type="checkbox" id="fairy" name="plant">
        <label for="fairy">Fairy</label>
        <input type="checkbox" id="bug" name="plant">
        <label for="bug">Bug</label>
        <input type="checkbox" id="fight" name="plant">
        <label for="fight">Fight</label>
        <input type="checkbox" id="psychic" name="plant">
        <label for="psychic">Psychic</label>
        <br>
        <label for="height">Height</label>
        <input type="number">
        <br>
        <label for="weight">Weight</label>
        <input type="number">
        <br>
        <label for="evolution">Evolution</label>
        <input type="radio" id="No evolution" name="evolution">
        <label for="No evolution">No evolution</label>
        <input type="radio" id="First evolution" name="evolution">
        <label for="First evolution">First evolution</label>
        <input type="radio" id="Other evolutions" name="evolution">
        <label for="Other evolutions">Other evolutions</label>
        <br>
        <label for="image">Image</label>

        <br>
        <input type="submit" value="Accept">
        <a href="">Cancel</a>
    </form>
</body>