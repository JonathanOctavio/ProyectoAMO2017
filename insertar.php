<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(images/pic4.jpg);
}
-->
</style> BASE </head>
<title> Insertar datos </title>
</head>
<body>
<?PHP
 if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['matricula']) && !empty($_POST['matricula']) && isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['contraseña']) && !empty($_POST['contraseña']) && isset($_POST['correo']) && !empty($_POST['correo']))
{
  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,"multiapp");
  mysqli_query($con,"INSERT INTO alumno (nombre,matricula,usuario,contraseña,correo) values('$_POST[nombre]',$_POST[matricula],'$_POST[usuario]','$_POST[contraseña]','$_POST[correo]')");
  echo'datos insertados';
  
}


?>
<form action = "index.php" method="post" name="form"  >
        
      
	<input type="submit" value="VOLVER" /> 
</form>
</body>
</html>