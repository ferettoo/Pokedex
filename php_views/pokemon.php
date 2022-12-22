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

    <div class="container  ">
        <div class="card">
            <div class="card-header ">
                <img class="img-fluid" src="../media/pokeball.png" alt="pokeballForm" height="50px" width="50px"> Pokemon
            </div>

            <div class="card-body">
                <!-- Formulario -->
                <form action="../php_controllers/pokemonController.php" enctype="multipart/form-data" method="POST">
                    <div class="row mb-2">
                        <label for="number" class="col-3 col-form-label" name="numberPokemon">Number</label>
                        <div class="col-9">
                            <input type="text" maxlength="3" name="numberForm" class="form-control" autofocus placeholder="Number of pokemon">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="name" class="col-3 col-form-label" name="namePokemon">Name</label>
                        <div class="col-9">
                            <input type="text" name="nameForm" class="form-control" placeholder="Name of pokemon">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="region" class="col-3 col-form-label" name="regionPokemon">Region</label>
                        <div class="col-9">
                            <select name="region" id="regionForm" class="form-select">
                                <option value="kanto">Kanto</option>
                                <option value="jotho">Jotho</option>
                                <option value="hoenn">Hoenn</option>
                                <option value="sinnoh">Sinnoh</option>
                                <option value="teselia">Teselia</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="type" name="typePokemon" class="col-3 col-form-label">Type</label>
                        <div class="col-9 ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="plant" name="type[]" value="plant">
                                <label for="plant" name="typePlant">Plant</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="poison" name="type[]" value="poison">
                                <label for="poison" name="typePoison">Poison</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="fire" name="type[]" value="fire">
                                <label for="fire" name="typeFire">Fire</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="flyer" name="type[]" value="flyer">
                                <label for="flyer" name="typeFlyer">Flyer</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="water" name="type[]" value="water">
                                <label for="water" name="typeWater">Water</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="electric" name="type[]" value="electric">
                                <label for="electric" name="typeElectric">Electric</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="fairy" name="type[]" value="fairy">
                                <label for="fairy" name="nameFairy">Fairy</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="bug" name="type[]" value="bug">
                                <label for="bug" name="typeBug">Bug</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="fight" name="type[]" value="fight">
                                <label for="fight" name="typeFight">Fight</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="psychic" name="type[]" value="psychic">
                                <label for="psychic" name="typePsychic">Psychic</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="height" class="col-3 col-form-label" name="heightPokemon">Height</label>
                        <div class="col-9">
                            <div class="input-group">
                                <input type="number" min="1" name="heightForm" class="form-control">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="weight" class="col-3 col-form-label" name="weightPokemon">Weight</label>
                        <div class="col-9">
                            <div class="input-group">
                                <input type="number" min="0" step="0.01" name="weightForm" class="form-control">
                                <span class="input-group-text">kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="evolution" class="col-3 col-form-label" name="evolutionForm">Evolution</label>
                        <div class="col-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="No evolution" name="evolution" value="no evolution">
                                <label for="No evolution">No evolution</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="First evolution" name="evolution" value="first evolution">
                                <label for="First evolution">First evolution</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="Other evolutions" name="evolution" value="other evolution">
                                <label for="Other evolutions">Other evolutions</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="image" class="col-3 col-form-label" name="imagePokemon">Image</label>
                        <div class="col-9">
                            <input type="file" name="imageForm" id="imageForm">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href=" pokemon_list.php" class="btn btn-secondary me-1">Cancel</a>
                        <input type="submit" value="Accept" name="submitForm" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src=" ../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>

</html>