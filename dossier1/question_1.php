<?php 
header('Content-Type: text/xml');
echo  '<?xml version="1.0"?>' ;
echo  '<listesatellites>';
try {
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];
    $link =  new PDO("mysql:host=localhost;dbname=satellite_db", "root", "", $options);
} catch (PDOException $e) {
    die("erreur de connexion  " . $e->getMessage());
}

$rp=$link->prepare("select * from t_satellite");
$rp->execute();
$satellites=$rp->fetchAll(PDO::FETCH_OBJ);
foreach($satellites as $s){

    echo "<satellite>";

    echo "<satellite_name>".$s->name_satellite."</satellite_name>";
    echo "<name_satellite>".$s->nom_pays."</name_satellite>";
    echo "<operator_pays>".$s->operator_pays."</operator_pays>";
    echo "<owner>".$s->owner."</owner>";
    echo "<user>".$s->user."</user>";
    echo "<purpose>".$s->purpose."</purpose>";

    echo "</satellite>";
}

echo  '</listesatellites>';




?>