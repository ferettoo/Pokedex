<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://kit.fontawesome.com/8bd77272c3.js" crossorigin="anonymous"></script>
    <title>Pokemon List</title>
</head>

<body>
    <?php include_once('../php_partials/menu.php');
    if (isset($_SESSION['error'])) { ?>
        <div class="d-flex justify-content-center m-3">
            <div class="alert alert-danger d-flex justify-content-center col-6" role="alert">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" />
            </div>
        </div>
    <?php } elseif (isset($_SESSION['message'])) { ?>
        <div class="d-flex justify-content-center m-3">
            <div class="alert alert-success alert-dismissible fade show d-flex justify-content-center col-6" role="alert">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" />
            </div>
        </div>
    <?php } ?>

    <div class="container-fluid ">
        <div class="row row-cols-1 row-cols-md-5  g-4 my-1">
            <!-- Una carta -->
            <div class="col">
                <div class="card h-100 border border-secondary">
                    <img src="../media/001.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">001-Bulbasaur</h5>
                        <span class="badge text-bg-warning">Planta</span>
                        <span class="badge text-bg-warning">Veneno</span>
                    </div>
                    <div class="card-footer">
                        <!-- | BORRAR | MODIFICAR | -->
                        <form action="../php_controllers/pokemonController.php" method="POST" enctype="multipart/form-data" class="d-flex justify-content-end">
                            <button type="submit" name="deletePokemon" class="btn btn-outline-danger me-1">
                                <i class="fa-regular fa-trash-can"></i>
                                <input id="hiddenInput" name="hiddenInput" type="hidden" value="001">
                            </button>
                            <button type="submit" name="modifyPokemon" class="btn btn-outline-primary">
                                <i class=" fa-regular fa-pen-to-square"></i>
                                <input id="hiddenInput" name="hiddenInput" type="hidden" value="001">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_SESSION['pokedex'])) {
                $pokedex = $_SESSION['pokedex'];
                foreach ($pokedex as $pokemon) { ?>
                    <div class="col">
                        <div class="card h-100 border border-secondary">
                            <img src="<?php echo $pokemon['image'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $pokemon['number'] . '-' . $pokemon['name'] ?></h5>
                                <?php
                                $type = "";
                                for ($i = 0; $i < count($pokemon["type"]); $i++) { ?>
                                    <span class="badge text-bg-warning"><?php echo $type = $pokemon['type'][$i] ?></span>
                                <?php } ?>

                            </div>
                            <div class="card-footer">
                                <!-- | BORRAR | MODIFICAR | -->
                                <form action="../php_controllers/pokemonController.php" method="POST" enctype="multipart/form-data" class="d-flex justify-content-end">
                                    <button type="submit" name="deletePokemon" class="btn btn-outline-danger me-1">
                                        <i class="fa-regular fa-trash-can"></i>
                                        <input id="hiddenInput" name="hiddenDelete" type="hidden" value="<?php echo $pokemon['number'] ?>">
                                    </button>
                                    <button type="submit" name="modifyPokemon" class="btn btn-outline-primary">
                                        <i class=" fa-regular fa-pen-to-square"></i>
                                        <input id="hiddenInput" name="hiddenModify" type="hidden" value="<?php echo $pokemon['number'] ?>">
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>

        <div class="d-flex justify-content-end sticky-bottom" style="z-index: 100;">
            <a class="btn btn-mi btn-warning " href=" pokemon.php" style="border-radius:100% ;">
                <img src="../media/plus.svg" class="d-flex justify-content-center" alt="plusButton" height="30px" width="20px">
            </a>
        </div>
    </div>
</body>
<script src=" ../bootstrap-5.2.2-dist/js/bootstrap.bundle.min.js"></script>

</html>