<?php session_start(); 
 
$usuario=$_REQUEST['nombre']; 
$password=$_REQUEST['password'];

  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"multiapp");
$result = mysqli_query($link,
'SELECT matricula,usuario,id_alumno FROM alumno WHERE usuario=\''.$usuario.'\'');

   if($row = mysqli_fetch_array($result))
      {
        if($row["matricula"] == $password)
           {
            $_SESSION["k_username"] = $row['usuario'];  
             if ($row['id_alumno']==0) header("Location: indexADM.php");
             else header("Location: courses.html");         
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