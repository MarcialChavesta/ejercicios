<?php

class UnaClase{
    public static function unMetodo(){
        echo "Hola, soy un método estático"."<br/>";
    }
}

$obj=new UnaClase(); // primera forma de llamar un método
$obj->unMetodo();

UnaClase::unMetodo(); // 2da forma para llamar un método estático
