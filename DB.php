<?php
$pdo = new PDO("mysql:host=localhost;dbname=projet_appart_hotel;charset=utf8","root","",[
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

$erreur = null;
try {
    $statementClients = $pdo->query("SELECT * from clients");
    $client = $statementClients->fetchAll();

    $statementReservation = $pdo->query("SELECT * from reservation");
    $client = $statementReservation->fetchAll();
} catch (PDOException $error) {
    echo $erreur =$error->getMessage();
}
?>