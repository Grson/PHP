<?php


$Total = 0;
$Numero = 0;
 
while ($Numero <= 10)
{
    if ($Numero % 2 == 0)
    {
        $Total = $Total + $Numero;
    }
    $Numero++;
}
 
echo $Total;
 
?>