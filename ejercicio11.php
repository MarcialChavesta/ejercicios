<?php

if ($_POST) {
    $valorA = $_POST['txtvalorA'];
    $valorB = $_POST['txtvalorB'];
    $suma = $valorA + $valorB;
    $resta = $valorA - $valorB;
    $multiplicacion = $valorA * $valorB;
    $division = $valorA / $valorB;
    echo "Suma  " . $suma . "<br/>" . "Multiplicación " . $multiplicacion . "<br/>" . "Resta " . $resta . "<br/>" . "División " . $division;
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
    <form action="ejercicio11.php" method="post">
        Valor de A:
        <input type="text" name="txtvalorA" id="">
        Valor de B:
        <input type="text" name="txtvalorB" id="">
        <input type="submit" name="Enviacscs" value="12">


    </form>

</body>

</html>