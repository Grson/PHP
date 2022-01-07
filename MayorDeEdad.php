<?php
function mayor_edad() 
{

    $Nom = "Alvarado. ";
    $edad = 25;
    if ($edad >= 18) {
        echo $Nom . " Eres mayor de edad";
    } else {
        echo $Nom . " No eres mayor de edad ";
    }
}
mayor_edad();

?>