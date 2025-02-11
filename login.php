<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
</head>
<body>
    <h1>Prijava u sustav</h1>

    <?php
    
       $username = $_POST ["username"];
       $password = $_POST ["password"];

       if ($password == 1234) {

        echo "<h2>Pristup dozvoljen</h2>";

        echo "<p>Dobro došao/la $username ! </p>";

    } else {

        echo "<h2>Netočna lozinka";
        echo "<h2>Pristub zabranjen</h2>";
    }

     ?>
</body>
</html>