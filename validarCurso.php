<?php session_start(); 
 
$titulo=$_REQUEST['titulo']; 
$codigo=$_REQUEST['codigo']; 


  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"multiapp");
$result = mysqli_query($link,
'SELECT titulo,codigo,id_alumno FROM cursos WHERE titulo=\''.$titulo.'\'');

   if($row = mysqli_fetch_array($result))
      {
        if($row["codigo"] == $codigo)
           {
            $_SESSION["k_username"] = $row['titulo'];  
             if ($row['id_alumno']>=1) header("Location: curso.php");
             else header("Location: indexactu.php");         
           }
        else {
              print("Password incorrecto");
	      echo '<a href="login.php"> Regresar</a></p>';
             } 
      }
   else {
         print("Login incorrecto");
	 echo '<a href="login.php"> Regresar</a></p>';
        }

?>