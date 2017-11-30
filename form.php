<html>
<head> Datos </head>
<title> Enviar datos </title>
</head>
<body>
<form action = "procesar.php" method="post" enctype="multipart/form-data"  >
       	
	<input type="file" name="foto" /> <br/><br/>
         	
	<input type="submit" value="upload" /> <br/><br/>
	
        
</form>

<br/><br/>
<br/><br/>
<br/><br/>

<form class="form-horizontal" action = "procesar.php" method="post" enctype="multipart/form-data"  >
    
   <div class ="form-group">
	<label for="archivo" class="col-sm-2 control-label">Archivo
	</label>	

	<input type="file" class="form-control" id="archivo" name="archivo" /> <br/><br/>
         
         <input type="submit" value="upload" /> 	
	
	
        
</form>
</body>
</html>
<input type="text" value="Nombre" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'nombre';}" required="">	
												<input type="text" value="Matricula" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'matricula';}" required="">	
							