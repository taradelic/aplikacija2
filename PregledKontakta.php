<?php

include("OtvoriVezu.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pregled kontakta:</title>

</head>
<body>
    
<div class="container">

     <h1>Pregled kontakta:</h1>

     <table border="1">    
        <thead> 
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Adresa</th>
                <th>Mobitel</th>
                <th>Email</th>
                <th>Webstranica</th>
                <th>Brisanje</th>
                <th>Uređivanje</th>
            </tr>
        </thead>
<tbody>
     

          <?php
          //spajanje na bazu

          $veza = OtvoriVezu();

          //sql upit 
          $sql = "SELECT * FROM kontakti";

          $result = $veza->query($sql);

          if($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {

                $id = $row["Id"];
                $ime = $row["Ime"];
                $prezime = $row["Prezime"];
                $adresa = $row["Adresa"];
                $mobitel = $row["Mobitel"];
                $email = $row["Email"];
                $webstranica = $row["Webstranica"];

                echo "<tr>";
                echo "<td>$ime</td>";
                echo "<td>$prezime</td>";
                echo "<td>$adresa</td>";
                echo "<td>$mobitel</td>";
                echo "<td>$email</td>";
                echo "<td>$webstranica</td>";
                echo "<td>   <a href='ObrisiKontakt.php?id=$id'>Obriši</a>  </td>";
                echo "<td>   <a href='UrediKontakt.php?id=$id'>Uredi</a>  </td>";
                echo "</tr>";

            }
          }

           ?>
           </tbody>
           </table>
</div>
</body>
</html>
