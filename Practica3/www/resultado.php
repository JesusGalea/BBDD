<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$enlace = mysqli_connect( "db", "root" , "root", "dbname");

$Consulta = "select b.Nombre, b.Apellido1, count(votado) as votados from votos a JOIN Alumno b ON (a.votado = b.ID) GROUP BY b.Nombre, b.Apellido1";

$resultado = mysqli_query($enlace, $Consulta);

while ($Fila = mysqli_fetch_array($resultado)){
	echo $Fila['Nombre'].' '.$Fila['Apellido1'].':  '.$Fila['votados'].'<br>';



}

mysqli_close($enlace);
?>

<a href="index.php"> volver al inicio </a>

</body>
</html>
