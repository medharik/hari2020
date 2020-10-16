<?php 
 header('Content-Type: application/json');

try {
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];
    $link =  new PDO("mysql:host=localhost;dbname=satellite_db", "root", "", $options);
} catch (PDOException $e) {
    die("erreur de connexion  " . $e->getMessage());
}

$rp=$link->prepare("select * from t_satellite where purpose = ?");
$rp->execute(['communications']);
$satellites=$rp->fetchAll(PDO::FETCH_OBJ);
$t=[];
foreach($satellites as $s){

   $t[]=['Name of satellite, alternate names'=>$s->name_satellite,
        'country/org of UN registry'=>$s->nom_pays,
        'country of operator/owner'=>$s->operator_pays,
        'operator/owner'=>$s->owner,
        'users'=>$s->user,
        'purpose'=>$s->purpose


];

   

}

echo json_encode($t);




?>