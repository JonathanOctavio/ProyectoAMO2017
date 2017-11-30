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
 if(isset($_POST['titulo']) && !empty($_POST['titulo']) && isset($_POST['codigo']) && !empty($_POST['codigo']) && isset($_POST['profesor']) && !empty($_POST['profesor']) && isset($_POST['periodo']) && !empty($_POST['periodo']))
{
  $con=mysqli_connect("localhost","root","");
  mysqli_select_db($con,"multiapp");
  mysqli_query($con,"INSERT INTO cursos (titulo,periodo,profesor,codigo) values('$_POST[titulo]','$_POST[periodo]','$_POST[profesor]',$_POST[codigo])");
  echo'datos insertados';
  
}


?>
<form action = "index.php" method="post" name="form"  >
        
      
	<input type="submit" value="VOLVER" /> 
</form>
</body>
</html>