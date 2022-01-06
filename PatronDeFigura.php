
<center><h3>Patrón de figuras</h3></center>

<?php


$NumFig=15;
for($p=1; $p<=$NumFig; $p++)
{
for($s=1; $s<=$p; $s++)
{
echo " ^  ";
}
echo "<br/> ";
}
for($p=$NumFig; $p>=1; $p--)
{
for($s=1; $s<=$p; $s++)
{
echo " = ";
}
echo "<br/> ";
}


?>