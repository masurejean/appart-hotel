<?php
require "DB.php";
$reservationOk = null;
if (isset($_POST['reserver'])) {
// var_dump($_POST);

$date_arrivee = strip_tags($_POST['date_arrivee']);
$date_depart = strip_tags($_POST['date_depart']);
$nbr_adultes = strip_tags($_POST['nbr_adultes']);
$nbr_enfants = strip_tags($_POST['nbr_enfants']);



    $insertionR = $pdo->prepare("INSERT INTO reservation(date_arrivee,date_depart,nbr_adultes,nbr_enfants) values(:date_arrivee,:date_depart,:nbr_adultes,:nbr_enfants)");
    $insertionR->execute(
        [
            "date_arrivee" => $_POST["date_arrivee"],
            "date_depart" => $_POST["date_depart"],
            "nbr_adultes" => $_POST["nbr_adultes"],
            "nbr_enfants" => $_POST["nbr_enfants"],
        ]
    );
    $reservationOk="<strong>Super !</strong> Votre réservation est validée.";
    ?>
  
  <?php
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--  GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat&family=Raleway:wght@100;400&display=swap" rel="stylesheet">
    <!-- FONT AWESOME ICONES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- PAGES NAV -->
    <link rel="stylesheet" href="./assets/css/contact.css">
    <script src="./assets/js/contact.js" defer></script>
    <script src="./assets/js/reservation.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/reservation.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">

</head>

<body>

    <?php include "header.php"   ?>

    <!-- partie RESERVATION !!!!!!!!!!!!-->
    <div class="reservation">
        <br><br><br><br><br>

        <div class="container">
            <h2>Réserver votre prochain séjour</h2>
            <br>
            <h3>"Chaque logement est une destination en soi."</h3>
<form action="" method="post">
            <div class="input">

                <div class="dateArr">
                    <label for="start">Date d'arrivée</label><br>
                    <input type="date" id="start" name="date_arrivee" value="2022-07-01" min="2022-07-01" max="2023-12-31">
                    <label class="col-form-label mt-4" for="inputDefault"></label>

                </div>

                <div class="dateDep">
                    <label for="start">Date de depart</label><br>
                    <input type="date" id="start" name="date_depart" value="2022-07-01" min="2022-07-01" max="2023-12-31">
                    <label class="col-form-label mt-4" for="inputDefault"></label>


                </div>

                <div class="nombPersA">
                    <label for="exampleSelect1" class="form-label mt-4">Nombre de personnes adultes</label>
                    <select class="form-select"  name="nbr_adultes"  id="exampleSelect1"><br>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>

                    </select>
                </div>
                <div class="nombEnf">
                    <label for="exampleSelect1"  class="form-label mt-4">Nombre d'enfants</label>
                    <select class="form-select"  name="nbr_enfants" id="exampleSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="btnResa">
                    <button class="btn btn-lg btn-primary" type="submit" name="reserver">je reserve</button><br>
                    <?php if(!empty($reservationOk)){
                    echo " <div class='alert alert-dismissible alert-primary'>";
                                 echo $reservationOk;
                                 echo "</div>";
                            } ?>
                </div>
                
                </form>
               
                
   
  
                          

                <div class="imgresa">
                    <img src="./assets/img/resa.jpg" alt="">
                </div>
            </div>

        </div>


    </div>

    <?php include "footer.php" ?>

</body>

</html>