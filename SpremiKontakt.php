<?php

include("OtvoriVezu.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="spremikon.css">
    <title>Document</title>
</head>
<body>
    
<div class="container">

     <h1>Podaci:</h1>

          <?php

               $ime = $_POST["ime"];
               $prezime = $_POST["prezime"];
               $adresa = $_POST["adresa"];
               $mobitel = $_POST["mobitel"];
               $email = $_POST["email"];
               $webstranica = $_POST["webstranica"];
               /*
               $grad = $_POST["grad"];
               $spol = $_POST["spol"];
               $prijatelji = $_POST["prijatelji"];
               */


               echo "<p>$ime</p>";
               echo "<p>$prezime</p>";
               echo "<p>$adresa</p>";
               echo "<p>$mobitel</p>";
               echo "<p>$email</p>";
               echo "<p>$webstranica</p>";
               /*
               echo "<p>$grad</p>";
               echo "<p>$spol</p>";
               echo "<p>$prijatelji</p>";
               */

               //spremanje podataka u datoteku:
               /*
               $myfile = fopen("datoteka.txt", "a") or die("Nije moguće otvoriti datoteku!");
               $txt = "$ime, $prezime, $adresa, $broj, $grad, $spol, $prijatelji\n";
               fwrite($myfile, $txt);
               fclose($myfile);
                */

               //Spremanje u bazu podataka
               $veza = OtvoriVezu();

               $sql = "INSERT INTO kontakti (Ime, Prezime, adresa, Mobitel, email, webstranica) VALUES('$ime', '$prezime', '$adresa', '$mobitel', '$email','$webstranica')";

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