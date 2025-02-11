<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="spremiizmjenu.css">
    <title>Spremi izmjenu</title>
</head>
<body>
<div class="container">
<?php

$id = $_POST["id"];
$ime = $_POST["ime"];
$prezime = $_POST["prezime"];
$adresa = $_POST["adresa"];
$mobitel = $_POST["mobitel"];
$email = $_POST["email"];
$webstranica = $_POST["webstranica"];

$veza = OtvoriVezu();

$sql = "UPDATE kontakti SET Ime='$ime' , Prezime='$prezime' , Adresa='$adresa' , Mobitel='$mobitel' , Email='$email' ,  Webstranica='$webstranica' WHERE Id=$id" ;

if($veza->query($sql) === TRUE) {
    echo "<p>Zapis je uspješno spremljen.</p>";
   } else {
    echo " Greška: " . $veza->error;
   }

   $veza->close();

?>
 <button onclick="document.location='http://localhost/app/PregledKontakta.php'">Pregled kontakt </button>
 </div>
</body>
</html>