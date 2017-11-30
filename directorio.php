<?php
$listar = null;
$directorio = opendir ("files/");
while($elemento = readdir($directorio))
{
	if($elemento != '.' && $elemento !='..')
	{
	if (is_dir("files/".$elemento))
	{
	  $listar .= "<li><a href='files/$elemento' target='_blank'>$elemento/</a></li>";
	}
	else
	{
	  $listar .= "<li><a href='files/$elemento' target='_blank'>$elemento</a></li>";
	}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>listar</h1>
<h3> lsitado de "files/"</h3>
<ul>
	<?php echo $listar ?>
</ul>
</body>
</html>