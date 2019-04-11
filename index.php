<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8"/>
<title>xateja-ho!</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body id="body">
<section id="titol">
<h1>Xateja-ho!</h1>
<br>
</section>
<section id="missatges">
<p><span>10:40PM - Homer: </span>I'll look it up.</p>
<p><span>10:39PM - Homer: </span>Fine.</p>
<p><span>10:39PM - Marge: </span>I really think that was the character's
name, Don Quixote.</p>
<p><span>10:38PM - Homer: </span>No!</p>
<p><span>10:37PM - Marge: </span>Don Quixote</p>
<?php
include 'Conexion.php';
$sql = "select usuari,text,hora from missatges";
$result = mysqli_query($conn, $sql);
?>

Xat

<?php while ($row = mysqli_fetch_assoc($result)) {?>
<p><span><?php echo $row['hora']; ?> - <?php echo $row['usuari']; ?>: </span><?php echo $row['text']; ?></p>
<?php } ?>
</section>
<section id="formulari">
<form method="post" action="insertar.php">

<input type="text" name="nom" size="80" placeholder="el teu nom"><br>
<input type="text" name="miss" size="80" placeholder="el teu missatge"><br>

<h1 style = "text-align:center;"><input type="submit" name="botton" value="Xateja-ho"></h1>

</form>
</section>
<section id="errors">
<br>
<p>
<?php
echo 'Lista de errores <br>';
$Error = ($_GET['ERROR']);
?>
</p>
</section>
</body>
</html>
