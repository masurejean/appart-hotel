<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarifs</title>
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
    <!-- PAGES NAV (PAGE TARIFS) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/tarifs.css">
</head>

<body>
    <!-- HEADER -->
    <?php include "header.php" ?>
    <main>
        <br>
        <div class="alltarifs">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">SALLE DE REUNION</h5>
                </div>
                <img class="salleCo" src="./assets/img/tarifs_espace.png" alt="">
                <rect width="100%" height="100%" fill="#868e96"></rect>
                </svg>
                <div class="card-body">
                    <p class="card-text">160€/journée</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa-solid fa-check"></i> Wifi, Café, Espace partagé</li>
                    <li class="list-group-item"> <i class="fa-solid fa-check"></i> Box Phone (Accès libre suivant disponibilité)</li>
                    <li class="list-group-item"> <i class="fa-solid fa-check"></i> Impression : Facturation à la page selon tarif en vigueur</li>
                    <a href="./reservation.php">
                        <button type="submit" class="btn btn-primary btnTarifs" name="send">Je réserve</button>
                    </a>
                </ul>
            </div>





            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">CHAMBRE DOUBLE</h5>
                    <h6 class="card-subtitle text-muted">1 lit double</h6>
                </div>
                <img class="chambre1" src="./assets/img/chambre_double.jpeg" alt="">
                <rect width="100%" height="100%" fill="#868e96"></rect>
                </svg>
                <div class="card-body">
                    <p class="card-text">90€/nuit</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa-solid fa-check"></i> Petit déjeuné</li>
                    <li class="list-group-item"> <i class="fa-solid fa-check"></i> Room Service</li>
                    <li class="list-group-item"> <i class="fa-solid fa-check"></i> Pour les couples : Une coupe de champagne offerte <br> au bar, ou une bouteille dans leur chambre à leur arrivée.</li>
                    <a href="./reservation.php">
                        <button type="submit" class="btn btn-primary" name="send">Je réserve</button>
                    </a>
                </ul>
            </div>

            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">CHAMBRE TRIPLE</h5>
                    <h6 class="card-subtitle text-muted">1 lit simple et 1 lit double</h6>
                </div>
                <img class="chambre2" src="./assets/img/chambre _triple.jpeg" alt="">
                <rect width="100%" height="100%" fill="#868e96"></rect>
                </svg>
                <div class="card-body">
                    <p class="card-text">110€/nuit</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fa-solid fa-check"></i> Petit déjeuné</li>
                    <li class="list-group-item"> <i class="fa-solid fa-check"></i> Room Service</li>
                    <li class="list-group-item"> <i class="fa-solid fa-check"></i> Pour les enfants : un petit coffre avec des jouets.</li>
                    <a href="./reservation.php">
                        <button type="submit" class="btn btn-primary" name="send">Je réserve</button>
                    </a>
                </ul>
            </div>
    </main>
    <!-- FOOTER -->
    <?php include "footer.php" ?>
</body>