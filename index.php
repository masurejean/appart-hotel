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
    <!-- PAGES NAV (CONTACT ET RESERVATION) -->
    <link rel="stylesheet" href="./assets/css/contact.css">
    <script src="./assets/js/contact.js" defer></script>
    <link rel="stylesheet" href="./assets/css/reservation.css">
    <script src="./assets/js/reservation.js"></script>
    <!--  LINK CSS  ET SCRIPT JS PAGE ACCUEIL-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/script.js" defer></script>
</head>

<body>
    <?php require "bd.php";
    $client = $statementClients->fetchAll();
    ?>

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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, consequuntur corporis itaque
                    excepturi at voluptate tenetur neque facere mollitia earum voluptatem cumque minima accusantium
                    culpa molestiae, aspernatur consequatur natus. Consectetur. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Explicabo praesentium laborum harum repellendus, incidunt eligendi sint voluptatum
                    excepturi doloremque magnam, placeat dolor ullam commodi earum veritatis expedita porro mollitia
                    impedit! Lorem ipsum, dolor sit amet consectetur adipisicing elit. In quibusdam unde accusamus modi
                    neque facere hic aliquid, quas repellendus voluptatibus impedit voluptate vero rem? Quasi alias
                    tenetur cumque consequatur! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit
                    veritatis ipsa, consectetur cum nostrum exercitationem minus! Temporibus illum perferendis deserunt.
                    Placeat dicta velit eaque accusamus praesentium dolore sint iure odit!</fuga>
                </p>
                <div class="savoirPlus">
                    <!-- <a href="page service"> -->
                    <button>En savoir plus</button>
                    <!-- </a> -->
                </div>
            </div>
            <div class="imgAbout">
                <img src="./assets/img/section_plusquunbureau.jpg" alt="about">
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