<?php
session_start();
require "DB.php";
$client = $statementClients->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'Appart</title>
    <!--  GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat&family=Raleway:wght@100;400&display=swap" rel="stylesheet">
    <!-- FONT AWESOME ICONES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- PAGES NAV (CONTACT, RESERVATION, SERVICES ET CONNEXION) -->
    <link rel="stylesheet" href="./assets/css/contact.css">
    <script src="./assets/js/contact.js" defer></script>
    <link rel="stylesheet" href="./assets/css/reservation.css">
    <script src="./assets/js/reservation.js"></script>
    <link rel="stylesheet" href="./assets/css/services.css">
    <link rel="stylesheet" href="./assets/css/connexion.css">
    <!--  LINK CSS  ET SCRIPT JS PAGE ACCUEIL-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js" defer></script>
</head>

<body>

    <?php include "header.php" ?>

    <main>
        <div id="imgHeader">
            <h1>" PROFITEZ DE LA LIBERTÉ D'UN APPARTEMENT ET DES SERVICES <br> D'UN HÔTEL POUR TRAVAILLER EN TOUTE
                SÉRÉNITÉ ! "</h1>
            <a href="./reservation.php">
                <button class="reserver">Réserver</button>
            </a>

        </div>
        <section id="about">
            <div class="aboutLeft">
                <h2>Plus qu'un bureau !</h2>
                <p>De passage en Normandie, une des plus belles régions françaises ! Voici ou vous loger à Dieppe "
                    L'Appart" station balnéaire historique de la Côte d’Albâtre ! <br><br>
                    Surnommée « La ville aux quatre ports », Dieppe est une commune de 30 000 habitants située dans le pays de Caux,
                    et nichée dans la profonde vallée de l’Arques. Cette station balnéaire, dont la renommée
                    débuta au 19° siècle (oui : la ville de Dieppe fut la première ville balnéaire de France ! ), est cajolée par un climat océanique marqué :
                    les hivers y sont doux, et les étés agréables. <br><br>
                    Dieppe propose de nombreux points d’intérêts historiques, culturels et touristiques : de sa
                    promenade splendide qui longe le littoral normand, aux animations estivales quotidiennes en passant par ses activités nautiques et son.
                    Festival International de cerf-volants, qui a lieu tous les deux ans, cette charmante commune typiquement normande n’a pas fini de vous
                    surprendre ! Alors, désireux de venir prendre un grand bol d’air marin ? Aucun problème, on vous a préparé les logements de vos rêves pour
                    un séjour idéal à Dieppe. (L'Appart). <br><br>
                    Le quartier historique, les ruelles étroites qui serpentent à travers la cité et l’ambiance « port de pêche » confèrent au centre-ville un
                    charme unique ! Il y est très agréable de s’y balader à pied ou en vélo afin d’y découvrir, sur le front de mer, l’Hôtel royal et quelques
                    maisons historiques comme l’impressionnante Maison Miffant et ses colombages stupéfiants, son Château Musée et le Pont Colbert Tournant! <br><br>
                    Et N'oublions pas, Le Marché du Samedi ( Élu Meilleur Marché de France ) !... <br><br>
                    Pour qui aime la mer et le poisson, allez donc au musée de
                    l’Estran – Cité de la mer - , puis partez vous faire un petit restaurant de produits du terroir ( Terre et Mer ) qui saura vous conseiller
                    les mets les plus savoureux !
                </p>

            </div>
            <div class="imgAbout">
                <br><br><br><br><br>
                <img src="./assets/img/section_plusquunbureau.jpg" alt="about">
                <br><br><br>
                <div class="savoirPlus">
                    <a href="services.php">
                        <button>En savoir plus</button>
                    </a>
                </div>
            </div>
        </section>

        <div id="slider">
            <div id="prev1"> <i class="fa-solid fa-circle-left"></i> </div>
            <div id="next1"> <i class="fa-solid fa-circle-right"></i> </div>
            <img src="" alt="">
        </div>

        <section id="contact">
            <div class="map">
                <img src="./assets/img/map.png" alt="map">
            </div>
            <div class="infosContact">
                <p class="adresse"><img src="./assets/img/adress.png" alt="adresse">123 rue des champs, 76200 DIEPPE</p>
                <p class="phone"><img src="./assets/img/phone.png" alt="phone">02 35 83 00 00</p>
                <p class="mail"><img src="./assets/img/mail.png" alt="mail">lappart@gmail.com</p>
                <form action="" method="post">
                    <div class="name">
                        <input type="text" placeholder="Name" name="name" required>
                    </div>
                    <div class="email">
                        <input type="email" placeholder="Email" name="mail">
                    </div>
                    <div class="message">
                        <input type="text" placeholder="Message" name="message">
                    </div>
                </form>
                <div>
                    <input type="submit" value="Envoyer" name="submited" id="send">
                </div>
            </div>
        </section>

        <div id="sliderAvisClient">
            <div id="prev"> <i class="fa-solid fa-circle-left"></i> </div>
            <div id="next"> <i class="fa-solid fa-circle-right"></i> </div>
            <img src="" alt="">
        </div>

    </main>



    <?php include "footer.php" ?>
</body>

</html>