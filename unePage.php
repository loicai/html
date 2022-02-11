

<!DOCTYPE html>
<html>
<head>
<?php
    include 'pdo.php';
?>
</head>
<body>
<?php

$nomService = '';

if (isset($_GET['nomService'])) {
    $nomService = $_GET['nomService'];
}

$bdd = connexionBDD();
$resServ = $bdd->query("SELECT num_serv FROM serv WHERE nom_serv = '$nomService'", PDO::FETCH_NUM);
$numServ = $resServ->fetch()[0];
$resPers = $bdd->query("SELECT * FROM pers WHERE num_serv = '$numServ'");
?>

<?php while ($ligne = $resPers->fetch()): ?>
    <option><?php echo $ligne['nom_pers']; ?></option>
<?php endwhile ?>
</body>
</html>