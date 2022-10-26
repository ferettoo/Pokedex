<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>FORM</title>
</head>

<body>
    <?php include_once('../php_partials/menu.php'); ?>

    <div class="container">

        <div class="card">
            <div class="card-header ">
                <img class="img-fluid" src="../media/pokeball.png" alt="pokeballForm" height="50px" width="50px"> Pokemon
            </div>
            <div class="card-body">

                <form action="" method="POST">
                    <div class="row g-2 align-items-center">
                        <div class="col-3">
                            <label for="number" name="numberPokemon">Number</label>
                        </div>
                        <div class="col input-group mb-2">
                            <input type="text" maxlength="3" name="numberForm" class="form-control" autofocus placeholder="Number of pokemon">
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-3">
                            <label for="name" name="namePokemon">Name</label>
                        </div>
                        <div class="col input-group mb-2">
                            <input type="text" name="nameForm" class="form-control" placeholder="Name of pokemon">
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-3">
                            <label for="region" name="regionPokemon">Region</label>
                        </div>
                        <div class="col input-group mb-2">
                            <select name="region" id="regionForm" class="form-select">
                                <option value="kanto">Kanto</option>
                                <option value="jotho">Jotho</option>
                                <option value="hoenn">Hoenn</option>
                                <option value="sinnoh">Sinnoh</option>
                                <option value="teselia">Teselia</option>
                            </select>
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-3">
                            <label for="type" name="typePokemon">Type</label>
                        </div>
                        <div class="col input-group mb-2">
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
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-3">
                            <label for="height" name="heightPokemon">Height</label>
                        </div>
                        <div class="col input-group mb-2">
                            <input type="number" min="1" name="heightForm" class="form-control">
                            <span class="input-group-text">cm</span>
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-3">
                            <label for="weight" name="weightPokemon">Weight</label>
                        </div>
                        <div class="col input-group mb-2">
                            <input type="number" min="0" step="0.01" name="weightForm" class="form-control">
                            <span class="input-group-text">kg</span>
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-3">
                            <label for="evolution" name="evolutionForm">Evolution</label>
                        </div>
                        <div class="col input-group mb-2 ">
                            <input type="radio" id="No evolution" name="evolution" value="no evolution">
                            <label for="No evolution">No evolution</label>
                            <input type="radio" id="First evolution" name="evolution" value="first evolution">
                            <label for="First evolution">First evolution</label>
                            <input type="radio" id="Other evolutions" name="evolution" value="other evolution">
                            <label for="Other evolutions">Other evolutions</label>
                        </div>
                    </div>
                    <div class="row g-2 align-items-center">
                        <div class="col-3">
                            <label for="image" name="imagePokemon">Image</label>
                        </div>
                        <div class="col">
                            <input type="file" name="imageForm">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href=" pokemon_list.php" class="btn btn-seconday">Cancel</a>
                        <input type="submit" value="Accept" name="submitForm" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src=" ../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>

</html>