<?php require "bd.php";
    $client = $statementClients->fetchAll();
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
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat&family=Raleway:wght@100;400&display=swap"
        rel="stylesheet">
    <!-- FONT AWESOME ICONES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- PAGES NAV -->
    <link rel="stylesheet" href="./assets/css/contact.css">
    <script src="./assets/js/contact.js" defer></script>
    <script src="./assets/js/reservation.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/reservation.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">

</head>

<body>

       <?php  include "header.php"   ?>
 
<!-- partie RESERVATION !!!!!!!!!!!!-->
   <div class="reservation">
        <br><br><br>
        <h2>RESERVATION</h2>
        <div class="container">
            <div class="form-group">
                <label for="start">Date d'arrivée</label>
                <input type="date" id="start" name="trip-start" value="2022-07-01" min="2022-07-01" max="2023-12-31">
                <label class="col-form-label mt-4" for="inputDefault"></label>
                <input type="time" class="form-control" placeholder="time" id="time">
            </div>

            <div class="form-group">
                <label for="start">Date de depart</label>
                <input type="date" id="start" name="trip-start" value="2022-07-01" min="2022-07-01" max="2023-12-31">
                <label class="col-form-label mt-4" for="inputDefault"></label>
                
                <input type="time" class="form-control" placeholder="" id="time">
            </div>

            <div class="form-group">
                <label for="exampleSelect1" class="form-label mt-4">Nombre de personnes adultes</label>
                <select class="form-select" id="exampleSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleSelect1" class="form-label mt-4">Nombre d'enfants</label>
                <select class="form-select" id="exampleSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
  

    </div>
   
    <?php include "footer.php" ?>
   
</body>

</html>