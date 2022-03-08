<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$enlace = mysqli_connect( "db", "root" , "root", "dbname");
$Consulta = "SELECT * FROM Alumno";

$resultado = mysqli_query($enlace, $Consulta);

while ($Fila = mysqli_fetch_array($resultado)){	
?>
<form action="hola.php" method="GET">
 <input type="hidden" value="<?php echo $Fila['ID']; ?>" name="id">
 <input type="submit" value="<?php echo $Fila['Nombre'].' '.$Fila['Apellido1'].' '.$Fila['Apellido2']; ?>">
</form>
<?php
}
mysqli_close($enlace);
?>

</body>
</html>
