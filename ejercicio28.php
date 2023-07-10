<?php
// nos conectamos a la base de datos MySql / MariaDB

$servidor = "localhost"; //127.0.0.1
$usuario = "root";
$contrasenia = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con mis hijos', 'fotito.jpg')";
    $conexion->exec($sql);

    echo "Conexión establecida";
} catch (PDOException $error) {
    echo "Conexión errónea" . $error;
}
