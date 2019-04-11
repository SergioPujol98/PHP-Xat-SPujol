<?php
if (empty ($_POST['nom']) || empty ($_POST['miss']) ) {
	echo 'No han sido introducidos todos los valores necesarios.';
} else {
	echo "Nombre: "; 
	echo htmlspecialchars($_POST['nom']); 
	echo "<br>";
	echo "Mensaje: "; 
	echo htmlspecialchars($_POST['miss']); 
	date_default_timezone_set('Europe/Madrid');

$nombre = mysqli_real_escape_string($conn, $_POST['nom']);
$missatge = mysqli_real_escape_string($conn, $_POST['miss']);
$hora = date("H:i:s");
include 'Conexion.php';

$sql = "INSERT INTO missatges (usuari, text, hora)
VALUES ('$nombre', '$missatge', '$hora')";

if ($conn -> query($sql) === TRUE) {
	echo "<br>";
    echo "Informacion guardada";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>

<p><a href="index.php" alt="ERROR">Volver a Index </a></p>

