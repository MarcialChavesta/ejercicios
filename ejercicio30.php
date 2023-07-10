<?php

session_start();
$_SESSION["usuario"]="Malufat";
$_SESSION["status"]="Logueado";

echo "Sesión iniciada".":<br/>";
echo "Usuario: ".$_SESSION["usuario"]."<br/>"." Estado: ".$_SESSION["status"];




?>