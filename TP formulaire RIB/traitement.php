<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>
    <?php
    $banque = $_POST['banque'];
    $guichet = $_POST['guichet'];
    $compte = $_POST['compte'];
    $cléf = $_POST['cléf'];
    
    /* var_dump($banque, $guichet, $compte, $cléf);
    echo "<br/>"; */

    include_once("rib.class.php");
    $rib = new RibValidator($banque, $guichet, $compte, $cléf);

    //var_dump($rib);
    //echo "<br/>";

    if ($rib->isValid()){
        header('Location: index.php?succes');
        exit;
    }
    else{
        header('Location: index.php?error');
        exit;
    };
?>
</body>
</html>