<?php
 $nom = $msg ="";
 date_default_timezone_set("Europe/Madrid");
 $date = date('h:i:s'); 

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = test_input($_POST["nom"]);
  $msg = test_input($_POST["mensaje"]);
  }

 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

  include 'connexioBD.php';
  $nom = mysqli_real_escape_string($con, $nom);
  $msg = mysqli_real_escape_string($con, $msg);


  if (empty($nom)){
    $error = "Error: Nombre no introducido";
  }else if (empty($msg)){
    $error = "Error: Mensaje no introducido";
  }else{
      $sql="INSERT INTO missatges (usuari, text, hora) VALUES('$nom','$msg','$date')";
      if ($con->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
      }else{
        $error = "Error: " . $sql . "<br>" . $con->error;
      }
    $con->close();
  }
  header("Location: index.php?error=$error");
?>
