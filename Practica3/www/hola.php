<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$id_votante = $_REQUEST['id']; 
$enlace = mysqli_connect( "db", "root" , "root", "dbname");

$Consulta = "SELECT * FROM Alumno WHERE Candidato = 1";

$resultado = mysqli_query($enlace, $Consulta);

while ($Fila = mysqli_fetch_array($resultado)){
	echo $Fila['Nombre'].' '.$Fila['Apellido1'].' '.$Fila['Apellido2'];
	
	?>
	<form action="votar.php" method="GET">
 <input type="hidden" value="<?php echo $Fila['ID']; ?>" name="id">
 <input type="hidden" value="<?php echo $id_votante; ?>" name="id2">
 <input type="submit" value="votar">
</form>
<?php
}

mysqli_close($enlace);
?>


</body>
</html>
