<?php

include("OtvoriVezu.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="uredikon.css">
    <title>Uredi kontakta</title>
</head>
<body>
    
<h1>Uredi kontakta</h1>

<?php

$veza = OtvoriVezu();

$sql ="SELECT * FROM kontakti WHERE Id=" .  $_GET["id"];



$result = $veza->query($sql);

if($result->num_rows > 0) {

    $row = $result->fetch_assoc();


    $id = $row["Id"];
    $ime = $row["Ime"];
    $prezime = $row["Prezime"];
    $adresa = $row["Adresa"];
    $mobitel = $row["Mobitel"];
    $email = $row["Email"];
    $webstranica = $row["Webstranica"];


} else {
    echo "Nema podataka u bazi.";
}

?>

<h1>Uredi podatke za <?php echo $ime . " " . $prezime ?></h1>

<form action="SpremiIzmjenu.php" method="POST">

     ime: <input type="text" name="ime" value="<?php  echo $ime; ?>"> 
     <br><br>
     prezime: <input type="text" name="prezime" value="<?php  echo $prezime; ?>"> 
     <br><br>
     adresa: <textarea name="adresa" rows="3" cols="25" value="<?php  echo $adresa; ?>"></textarea>
     <br><br>
     mobitel: <input type="text" name=" mobitel" value="<?php  echo $mobitel; ?>">
     <br><br>
     email: <input type="email" id="email" name="email" value="<?php  echo $email; ?>">
     <br><br>
     webstranica: <input type="text" name="webstranica" value="<?php  echo $webstranica; ?>"> 
     <br><br>

     <input type="hidden" name="id" value="<?php echo $id; ?>">

     <button type="submit">Spremi izmjene</button> 

</form>

</body>
</html>
