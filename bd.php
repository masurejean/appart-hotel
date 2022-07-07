<?php
$pdo = new PDO("mysql:host=localhost;dbname=projet_appart_hotel;charset=utf8","root","Baptiste24",[
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

$erreur = null;
try {
    $statementClients = $pdo->query("SELECT * from clients");
    $client = $statementClients->fetchAll();
} catch (PDOException $error) {
    echo $erreur =$error->getMessage();
}
?>