<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
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
    <!-- PAGES NAV (PAGE SERVICES) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/services.css">
</head>

<body>
    <!-- HEADER -->
    <?php include "header.php" ?>
    <main>
        <br>
        <div class="allServices">
            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fa-solid fa-mug-saucer"></i> Equipements</h4>
                    <p class="card-text">
                        ??? Serviettes et draps <br>
                        ??? TV <br>
                        ??? Cuisine <br>
                        ??? S??che-cheveux <br>
                        ??? Porte-manteaux <br>
                        ??? Ustensiles de cuisine <br>
                        ??? Machine ?? caf?? <br>
                        ??? Micro-onde <br>
                        ??? Papier toilette, savon <br>
                        ??? Radiateur <br>
                        ??? Wi-Fi <br>
                        ??? Machine ?? laver <br>
                        ??? Non-fumeur <br>
                        ??? Bureau <br>
                        ??? Bouilloire <br>
                        ??? Lave-vaisselle <br>
                    </p>
                </div>
            </div>

            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fa-solid fa-circle-info"></i> Informations importantes</h4>
                    <p class="card-text">
                        ??? Arriv??e ?? partir de 15h et D??part au plus tard 11h. <br>
                        ??? La plage et le centre ville sont ?? 3mn ?? pied. <br>
                        ??? Parkings s??curis?? et gratuit <br>
                        ??? Nombreux commerces et supermarch?? ?? proximit?? dans un rayon de 200m <br>
                        ??? Non fumeur <br>
                        ??? Animaux non admis <br>
                        ??? Les d??t??riorations seront factur??es <br>
                    </p>
                </div>
            </div>

            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fa-solid fa-train-subway"></i> Moyens de transports</h4>
                    <p class="card-text">Gare SNCF ?? proximit??, environ 10 minutes ?? pied. <br> Parkings payants et gratuit sur la plage de Dieppe. Le plus proche est le Parking De La Barre ?? 4 minutes ?? pied.</p>
                </div>
            </div>

            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fa-solid fa-user-tie"></i> Pour les Professionnels</h4>
                    <p class="card-text">
                        ??? Le forfait nuit + Salle de R??union, avec pause s??minaire offerte (boissons) <br>
                        ??? Les diff??rentes capacit??s des salles et leur facilit?? d???am??nagement (de 10 ?? 100 personnes) <br>
                        ??? Le mat??riel audiovisuel ?? disposition <br>
                        ??? Le wifi gratuit et illimit?? <br>
                        ??? Les patios et coins d??tentes pour les pauses <br>
                        ??? Nos diff??rentes solutions de restauration sur place ou ?? proximit?? <br>
                        ??? Nos possibilit??s de compl??ter vos r??unions par des activit??s de groupe personnalis??es : golf, karting??? <br>
                    </p>
                </div>
            </div>

            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fa-solid fa-briefcase"></i> Conventions d'entreprises</h4>
                    <p class="card-text">Pour des d??placements professionnels d???une nuit, une semaine ou plusieurs mois, Appart H??tel vous propose des tarifs personnalis??s en fonction de vos besoins. Un acc??s personnel vous permettra de faciliter vos r??servations et pour les suivantes, de les r??aliser encore plus rapidement.
                    </p>
                </div>
            </div>

            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fa-solid fa-users"></i> Soir??es commerciales</h4>
                    <p class="card-text">Vous organisez un d??placement professionnel avec vos collaborateurs sur plusieurs jours ? Cette offre va vous int??resser ! D??couvrez nos forfaits ?? Soir??es commerciales ??. Ces derniers vous faciliteront l???organisation et la gestion de votre voyage d???affaires tout en am??liorant le confort et la satisfaction de vos collaborateurs.
                    </p>
                </div>
            </div>

            <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fa-solid fa-person-breastfeeding"></i> Pour les familles</h4>
                    <p class="card-text">
                        ??? Petit d??jeuner <br>
                        ??? Room service <br>
                        ??? Spa / hammam <br>
                        ??? Pour les enfants : un petit coffre avec des jouets <br>
                        ??? Pour les b??b??s : offrir des produits de toilettes pour nouveaux-n??s <br>
                        ??? Pour les couples : coupe de champagne offerte au bar, ou une bouteille dans leur chambre ?? leur arriv??e. <br>
                        une coupe de fruits frais de saison. <br>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <?php include "footer.php" ?>
</body>

</html>