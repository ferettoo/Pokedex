<?php
require("./php_librarys/function.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
</head>

<body>
    <?php
    //showPokedex($pokedex);
    echo pokemonByNumber($pokedex, 001);
    ?>
</body>

</html>