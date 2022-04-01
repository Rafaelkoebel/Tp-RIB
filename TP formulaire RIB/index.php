<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="http://localhost/Tp-RIB/Tp%20formulaire%20RIB/traitement.php" method="POST">

       <p><input type="number" name="banque" placeholder="banque"></p>
       <p><input type="number" name="guichet" placeholder="guichet"></p>
       <p><input type="number" name="compte" placeholder="compte"></p>
       <p><input type="number" name="cléf" placeholder="cléf"></p>
       <p><input type="submit" name="submit" value="Envoyer"></p>

    </form>

    <?php
    if (isset($_GET['succes'])) {
        echo "<script>alert(\"valide\")</script>";
    }
    if (isset($_GET['error'])) {
        echo "<script>alert(\"non valide\")</script>";
    }
    ?>

</body>
</html>