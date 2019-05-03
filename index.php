<!DOCTYPE html>
<html lang="ca">
 <head>
 <meta charset="UTF-8" />
 <title class=>Xateja-ho!</title>
 <link rel="stylesheet" type="text/css" href="style.css" />
 </head>
 <body>
 <section id="titol">
 <h1>Xateja-ho!</h1>
 </section>
 <section id="missatges">

 <?php
include 'connexioBD.php';

$sql="SELECT * FROM (SELECT * FROM `missatges` order by id desc LIMIT 20)t1 order by id asc";
$result=mysqli_query($con,$sql);

foreach ($result as $row)
  echo "<p> <span>$row[hora] - $row[usuari]: </span> $row[text]</p>";
mysqli_free_result($result);
mysqli_close($con);
?>

 </section>
 <section id="formulari">
 <form method="post" action="insertar.php" >
  <br>
    <input id="inform" type="text" name="nom" placeholder="nombre">
  <br>
    <input id="inform" type="text" name="mensaje" placeholder="mensaje">
  <br><br>
    <input type="submit" value="Xateja-ho">
  <br><br>
 </form>
 </section>
 <section id="errores">

 <p><?php
  if (empty($_GET['error'])){
    echo "No hay ningun ERROR!";
  }else{
    echo "$_GET[error]";
  }
 ?></p>

 </section>
 </body>
</html>