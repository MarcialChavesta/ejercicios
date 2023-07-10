<?php
$frutas=array("m"=>"mango", "p"=>"pera","n"=>"níspero");
//print_r($frutas);
foreach($frutas as $indice=>&$valor){ // se utiliza & para crear una referencia del valor del array, mas no una copia
    echo $indice."<br/>";
}