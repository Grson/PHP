
<html>
<head>
   <title>Tablas de multiplicar.</title> 
</head>
<body>
<h1>Tablas de multiplicar del 1 a al 999</h1>
<h3>Escribir un número del 1 al 999</h3>
<form action="#" method="post">
   <p>Número a multiplicar: <input type="text" name="num" maxlength="3" size="10" /></p>
   <p><input type="submit" value="Calcular" /></p>
</form>


<?php  
$D=$_POST['num'];
if ($D<1 or $D>999) {
    echo "No se ha escrito un número entre el rango del 1 al 999";
    }
else {
     echo "<h5>Tabla del $D:</h5>";
     $i=1;
     while ($i<=10) {
           echo "$D x $i = ".$D*$i."<br/>";
           $i++;
           } 
     }
?>



</body>
</html>
