<?php
session_start();
$pokemon = $_SESSION['pokemon'];
?>
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

    <?php
    if (isset($_SESSION['dataPokemonForm'])) { //Sale la informacion que puso anteriormente el usuario
        $dataPokemonForm = $_SESSION['dataPokemonForm'];
        unset($_SESSION['dataPokemonForm']);
    } else { //Si no hay error, los valores del formulario saldran vacios 
        $dataPokemonForm = [
            'numPokemon' => '',
            'namePokemon' => '',
            'regionPokemon' => '',
            'typesPokemon' => '',
            'heightPokemon' => '',
            'weightPokemon' => '',
            'evolutionPokemon' => '',
        ];
    }
    ?>

    <div class="container ">
        <?php
        if (isset($_SESSION['errores'])) {
            $errores = $_SESSION['errores'];
            for ($i = 0; $i < count($errores); $i++) { ?>
                <div class="d-flex justify-content-center m-3">
                    <div class="alert alert-danger d-flex justify-content-center col-6" role="alert">
                        <?php
                        echo $errores[$i];
                        unset($_SESSION['errores']);
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" />
                    </div>
                </div>
        <?php
            }
        } ?>
        <div class="card">
            <div class="card-header ">
                <img class="img-fluid" src="../media/pokeball.png" alt="pokeballForm" height="50px" width="50px"> Pokemon Editor
            </div>
            <div class="card-body">
                <!-- Formulario -->
                <form action="../php_controllers/pokemonController.php" enctype="multipart/form-data" method="POST">
                    <div class="row mb-2">
                        <label for="number" class="col-3 col-form-label">Number</label>
                        <div class="col-9">
                            <input type="text" maxlength="3" name="numberForm" class="form-control" placeholder="Number of pokemon" value="<?php echo $pokemon['number'] ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="name" class="col-3 col-form-label">Name</label>
                        <div class="col-9">
                            <input type="text" name="nameForm" class="form-control" autofocus placeholder="Name of pokemon" value="<?php echo $pokemon['name'] ?>">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="region" class="col-3 col-form-label" name="regionPokemon">Region</label>
                        <div class="col-9">
                            <!-- Poner los valores del from anterior, si se ha equivocado. -->
                            <select name="region" id="regionForm" class="form-select">
                                <!-- Se comprueba lo que hay dentro del array
                                     si es igual a la seleccion del ususario, se añade el atributo
                                     selected al input. (Igual con todos) -->
                                <option value="kanto" <?php if ($pokemon['region'] == 'kanto') {
                                                            echo "selected";
                                                        } ?>>Kanto</option>
                                <option value="jotho" <?php if ($pokemon['region'] == 'jotho') {
                                                            echo "selected";
                                                        } ?>>Jotho</option>
                                <option value="hoenn" <?php if ($pokemon['region'] == 'hoenn') {
                                                            echo "selected";
                                                        } ?>>Hoenn</option>
                                <option value="sinnoh" <?php if ($pokemon['region'] == 'sinnoh') {
                                                            echo "selected";
                                                        } ?>>Sinnoh</option>
                                <option value="teselia" <?php if ($pokemon['region'] == 'teselia') {
                                                            echo "selected";
                                                        } ?>>Teselia</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="type" name="typePokemon" class="col-3 col-form-label">Type</label>
                        <div class="col-9 ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="plant" name="type[]" value="plant" <?php
                                                                                                                        // Si no esta vacio el array entra en el if y comprueba que esta el value
                                                                                                                        // en este caso planta y si esta, añadimos en el input un atributo checked, sino
                                                                                                                        //no mostrara nada (Igual con todos).                   
                                                                                                                        if (!empty($pokemon['type'])) {
                                                                                                                            if (in_array('plant', $pokemon['type'])) {
                                                                                                                                echo "checked = 'checked'";
                                                                                                                            }
                                                                                                                        }
                                                                                                                        ?>>
                                <label for="plant" name="typePlant">Plant</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="poison" name="type[]" value="poison" <?php
                                                                                                                            if (!empty($pokemon['type'])) {
                                                                                                                                if (in_array('poison', $pokemon['type'])) {
                                                                                                                                    echo "checked = 'checked'";
                                                                                                                                }
                                                                                                                            }
                                                                                                                            ?>>
                                <label for="poison" name="typePoison">Poison</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="fire" name="type[]" value="fire" <?php
                                                                                                                        if (!empty($pokemon['type'])) {
                                                                                                                            if (in_array('fire', $pokemon['type'])) {
                                                                                                                                echo "checked = 'checked'";
                                                                                                                            }
                                                                                                                        }
                                                                                                                        ?>>
                                <label for="fire" name="typeFire">Fire</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="flyer" name="type[]" value="flyer" <?php
                                                                                                                        if (!empty($pokemon['type'])) {
                                                                                                                            if (in_array('flyer', $pokemon['type'])) {
                                                                                                                                echo "checked = 'checked'";
                                                                                                                            }
                                                                                                                        }
                                                                                                                        ?>>
                                <label for="flyer" name="typeFlyer">Flyer</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="water" name="type[]" value="water" <?php
                                                                                                                        if (!empty($pokemon['type'])) {
                                                                                                                            if (in_array('water', $pokemon['type'])) {
                                                                                                                                echo "checked = 'checked'";
                                                                                                                            }
                                                                                                                        }
                                                                                                                        ?>>
                                <label for="water" name="typeWater">Water</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="electric" name="type[]" value="electric" <?php
                                                                                                                                if (!empty($pokemon['type'])) {
                                                                                                                                    if (in_array('electric', $pokemon['type'])) {
                                                                                                                                        echo "checked = 'checked'";
                                                                                                                                    }
                                                                                                                                }
                                                                                                                                ?>>
                                <label for="electric" name="typeElectric">Electric</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="fairy" name="type[]" value="fairy" <?php
                                                                                                                        if (!empty($pokemon['type'])) {
                                                                                                                            if (in_array('fairy', $pokemon['type'])) {
                                                                                                                                echo "checked = 'checked'";
                                                                                                                            }
                                                                                                                        }
                                                                                                                        ?>>
                                <label for="fairy" name="nameFairy">Fairy</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="bug" name="type[]" value="bug" <?php
                                                                                                                    if (!empty($pokemon['type'])) {
                                                                                                                        if (in_array('bug', $pokemon['type'])) {
                                                                                                                            echo "checked = 'checked'";
                                                                                                                        }
                                                                                                                    }
                                                                                                                    ?>>
                                <label for="bug" name="typeBug">Bug</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="fight" name="type[]" value="fight" <?php
                                                                                                                        if (!empty($pokemon['type'])) {
                                                                                                                            if (in_array('fight', $pokemon['type'])) {
                                                                                                                                echo "checked = 'checked'";
                                                                                                                            }
                                                                                                                        }
                                                                                                                        ?>>
                                <label for="fight" name="typeFight">Fight</label>
                            </div>
                            <div class="form-check  form-check-inline">
                                <input class="form-check-input" type="checkbox" id="psychic" name="type[]" value="psychic" <?php
                                                                                                                            if (!empty($pokemon['type'])) {
                                                                                                                                if (in_array('psychic', $pokemon['type'])) {
                                                                                                                                    echo "checked = 'checked'";
                                                                                                                                }
                                                                                                                            }
                                                                                                                            ?>>
                                <label for="psychic" name="typePsychic">Psychic</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="height" class="col-3 col-form-label" name="heightPokemon">Height</label>
                        <div class="col-9">
                            <div class="input-group">
                                <input type="number" min="1" name="heightForm" class="form-control" value="<?php echo $pokemon['height'] ?>">
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <label for="weight" class="col-3 col-form-label" name="weightPokemon">Weight</label>
                        <div class="col-9">
                            <div class="input-group">
                                <input type="number" min="0" step="0.01" name="weightForm" class="form-control" value="<?php echo $pokemon['width'] ?>">
                                <span class="input-group-text">kg</span>
                            </div>
                        </div>
                    </div>

                    <!-- Poner los valores del from anterior, si se ha equivocado -->
                    <div class="row mb-2">
                        <label for="evolution" class="col-3 col-form-label" name="evolutionForm">Evolution</label>
                        <div class="col-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="No evolution" name="evolution" value="no evolution" <?php
                                                                                                                                        // Comprobamos que haya un valor en el array evolutionPokemon 
                                                                                                                                        // y comprobamos que se llame igual que el value, si es igual,
                                                                                                                                        // añadir al input un atributo checked. (Igual con todos)
                                                                                                                                        if (isset($pokemon['evolution']) && $pokemon['evolution'] == 'no evolution') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                <label for="No evolution">No evolution</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="First evolution" name="evolution" value="first evolution" <?php if (isset($pokemon['evolution']) && $pokemon['evolution'] == 'first evolution') {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?>>
                                <label for="First evolution">First evolution</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="Other evolutions" name="evolution" value="other evolution" <?php if (isset($pokemon['evolution']) && $pokemon['evolution'] == 'other evolution') {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?>>
                                <label for="Other evolutions">Other evolutions</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="image" class="col-3 col-form-label" name="imagePokemon">Image</label>
                        <div class="col-9">
                            <input type="file" name="imageForm" id="imageForm"> <span><?php echo $pokemon['image'] ?></span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href=" pokemon_list.php" class="btn btn-secondary me-1">Cancel</a>
                        <input type="hidden" value="AcceptModify" name="submitModify">
                        <input type="submit" value="Accept" name="submitForm" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src=" ../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>

</html>