<?php
    // Número fijo para adivinar
    $numero_fijo = 50;

    if (isset($_GET["numero"])) {
        // Obtener el número introducido por el usuario
        $numero_usuario = (int)$_GET["numero"];

        // Comprobar si el usuario ha acertado
        if ($numero_usuario == $numero_fijo) {
            echo "¡Has acertado!";
        } elseif ($numero_usuario > $numero_fijo) {
            echo "El número introducido es más grande.";
        } else {
            echo "El número introducido es más pequeño.";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini juego</title>
</head>
<body>

<h1>Adivina el numero fijo</h1>

<p>Pista esta entre el 1 y el 50</p>

<form method="get" action="."> 
        <input type="number" name="numero">
        <input type="submit" value="Comprueba este numero">
    </form>

</body>
</html>