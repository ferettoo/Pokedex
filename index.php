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
    /** 
        foreach ($pokedex[0] as $key => $value) {
            echo $key. " = " . "$value" . "<br/>";
            foreach ($pokedex[0]["type"] as $key => $value) {
                echo $value . "<br>";
            }
            
        }

        for ($i = 0; $i < count($pokedex); $i++) {
        foreach ($pokedex[$i] as $key => $value) {
            if (array_keys($pokedex[$i], ["type"])) {
            }
            echo $key . " = " . "$value" . "<br/>";
        }
    }
     */

    foreach ($pokedex as $type => $value) {
        echo $value;
    }


    //https://www.php.net/manual/en/function.key.php
    //showPokemon($pokedex,001);
    ?>
</body>

</html>