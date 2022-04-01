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

       <p><input type="text" minlength="5" maxlength="5" pattern="[0-9]{5}" name="banque" placeholder="banque" required></p>

       <p><input type="text" minlength="5" maxlength="5" pattern="[0-9]{5}"  name="guichet" placeholder="guichet" required></p>

       <p><input type="text" minlength="11" maxlength="11" pattern="[0-9a-zA-Z]{11}"  name="compte" placeholder="compte" required></p>

       <p><input type="text" minlength="2" maxlength="2" pattern="[0-9]{2}" name="cléf" placeholder="cléf" required></p>

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