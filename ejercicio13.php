<?php

if ($_POST) {
    $boton = $_POST['btnEnviar'];
    switch ($boton) {
        case 1:
            echo "Presionó el botón 1";
            break;
        case 2:
            echo "Presionó el botón 2";
            break;
        case 3:
            echo "Presionó el botón 3";
            break;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio13.php" method="post">
        <input type="submit" name="btnEnviar" value="1">
        <br />
        <input type="submit" name="btnEnviar" value="2">
        <br />
        <input type="submit" name="btnEnviar" value="3">

    </form>
</body>

</html>