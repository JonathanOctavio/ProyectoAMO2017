<?php session_start(); 
 
$usuario=$_REQUEST['nombre']; 
$password=$_REQUEST['password'];

  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"multiapp");
$result = mysqli_query($link,
'SELECT pass,usuario,tipo FROM alumnos WHERE usuario=\''.$usuario.'\'');

   if($row = mysqli_fetch_array($result))
      {
        if($row["pass"] == $password)
           {
            $_SESSION["k_username"] = $row['usuario'];  
             if ($row['tipo']==2) header("Location: acceprofe.php");
             else header("Location: accealumno.php");         
           }
        else {
              print("Password incorrecto");
	      echo '<a href="index.php"> Regresar</a></p>';
             } 
      }
   else {
         print("Login incorrecto");
	 echo '<a href="index.php"> Regresar</a></p>';
        }

?>