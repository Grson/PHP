
<center>

<html>
<head>


   <title>Mostrar el nombre</title>
   </head>
   <body>
   <form method='POST'>
  <center> <h1>Ingrese su nombre: </h1>
 <input type="text" name="name">
 <input type="submit" value="Ingresar">
 </form>
 
<?php

$name = $_POST['name'];
echo "<h2> Bienvenido $name </h2>";

?>
</body>
</html>
</center>