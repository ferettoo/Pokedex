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
        <label for="number" name="numberPokemon">Number</label>
        <input type="text" maxlength="3" name="numberForm" autofocus placeholder="Number of pokemon">
        <br>
        <label for="name" name="namePokemon">Name</label>
        <input type="text" name="nameForm" placeholder="Name of pokemon">
        <br>
        <label for="region" name="regionPokemon">Region</label>
        <select name="region" id="regionForm">
            <option value="kanto">Kanto</option>
            <option value="jotho">Jotho</option>
            <option value="hoenn">Hoenn</option>
            <option value="sinnoh">Sinnoh</option>
            <option value="teselia">Teselia</option>
        </select>
        <br>
        <label for="type" name="typePokemon">Type</label>
        <input type="checkbox" id="plant" name="type[]" value="plant">
        <label for="plant" name="typePlant">Plant</label>
        <input type="checkbox" id="poison" name="type[]" value="poison">
        <label for="poison" name="typePoison">Poison</label>
        <input type="checkbox" id="flyer" name="type[]" value="flyer">
        <label for="flyer" name="typeFlyer">Flyer</label>
        <input type="checkbox" id="water" name="type[]" value="water">
        <label for="water" name="typeWater">Water</label>
        <input type="checkbox" id="electric" name="type[]" value="electric">
        <label for="electric" name="typeElectric">Electric</label>
        <input type="checkbox" id="fairy" name="type[]" value="fairy">
        <label for="fairy" name="nameFairy">Fairy</label>
        <input type="checkbox" id="bug" name="type[]" value="bug">
        <label for="bug" name="typeBug">Bug</label>
        <input type="checkbox" id="fight" name="type[]" value="fight">
        <label for="fight" name="typeFight">Fight</label>
        <input type="checkbox" id="psychic" name="type[]" value="psychic">
        <label for="psychic" name="typePsychic">Psychic</label>
        <br>
        <label for="height" name="heightPokemon">Height</label>
        <input type="number" min="1" name="heightForm">
        <br>
        <label for="weight" name="weightPokemon">Weight</label>
        <input type="number" min="0" step="0.01" name="weightForm">
        <br>
        <label for="evolution" name="evolutionForm">Evolution</label>
        <input type="radio" id="No evolution" name="evolution" value="no evolution">
        <label for="No evolution">No evolution</label>
        <input type="radio" id="First evolution" name="evolution" value="first evolution">
        <label for="First evolution">First evolution</label>
        <input type="radio" id="Other evolutions" name="evolution" value="other evolution">
        <label for="Other evolutions">Other evolutions</label>
        <br>
        <label for="image" name="imagePokemon">Image</label>
        <input type="file" name="imageForm">
        <br>
        <input type="submit" value="Accept" name="submitForm">
        <a href="">Cancel</a>
    </form>
</body>