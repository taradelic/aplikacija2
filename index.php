<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aplikcija </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">

<h1> Unos kontakta:</h1>

<form action="SpremiKontakt.php" method="POST">

     ime: <input type="text" name="ime"> <br><br>
     prezime: <input type="text" name="prezime"> <br><br>
     adresa: <textarea name="adresa" rows="3" cols="25"></textarea><br><br>
     mobitel: <input type="text" name=" mobitel"><br><br>
     email: <input type="email" id="email" name="email">
     webstranica: <input type="text" name="webstranica"> <br><br>
       <!--
     grad: <label for="grad"></label>

     <select name="grad" id="grad"><br><br>
    <option value="Split">Split</option>
    <option value="Rijeka">Rijeka</option>
    <option value="Osijek">Osijek</option>
    <option value="Zagreb">Zagreb</option>
  </select><br><br>
     spol: <label for="spol"></label><br>
       <input type="radio" id="muški" name="spol" value="muški">
        <label for="spol">Muški</label><br>
       <input type="radio" id="ženski" name="spol" value="ženski">
       <label for="spol">Ženski</label><br><br>
     prijatelji: <label for="prijatelji"></label><br>
        <input type="checkbox" id="prijatelji" name="prijatelji" value="prijartelji">
        <label for="prijatelji"> Prijatelji</label><br><br>
-->
     <button type="submit">Pošalji</button> 
     <button type="reset" value="Reset">Reset</button><br><br>

</forma>

</div>
</body>
</html>