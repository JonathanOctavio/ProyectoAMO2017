<?php
$carpeta = "files/";
opendir($carpeta);
$destino = $carpeta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'],$destino);
echo "Archivo subido";
$nombre=$_FILES['foto']['name'];
echo "<img src=\"files/$nombre\">";
echo $_FILES['foto']['name']."<br>";
echo $_FILES['foto']['size']."BYTES<br>";
echo $_FILES['foto']['type'];

?>

