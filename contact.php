<?php
session_start();
require "DB.php";
if (isset($_POST['submit'])) {

    /* echo var_dump($_POST);  */
    $Statut = strip_tags($_POST['statut']);
    $genre = strip_tags($_POST['genre']);
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $mail = strip_tags($_POST['mail']);
    $tel = strip_tags($_POST['tel']);
    $simpleMessage = strip_tags($_POST['simpleMessage']);
    $newsLetterOption = strip_tags($_POST['newsLetterOption']);
    $newCollect = strip_tags($_POST["newCollect"]);

    $sql ="input into contact ()values ()";
    // TODO envois mail 
}


?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat&family=Raleway:wght@100;400&display=swap" rel="stylesheet">
    <!-- FONT AWESOME ICONES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- PAGES NAV -->

    <script src="./assets/js/contact.js" defer></script>

    <!-- import style de la  page -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/contact.css">
    <!-- fin d'import de style -->

    <script>
        function combo(thelist, theinput) {
            theinput = document.getElementById(theinput);
            let idx = thelist.selectedIndex;
            let content = thelist.options[idx].innerHTML;
            theinput.value = content;
        }
    </script>
</head>

<body>
    <!-- <header>
        <nav>
            <ul>
                <p class="nomDuSite">L'Appart</p>
                <a href="./index.php">
                    <li><i class="fa-solid fa-house"></i> Accueil</li>
                </a>
                <a href="">
                    <li><i class="fa-solid fa-tag"></i> Tarifs</li>
                </a>
                <a href="">
                    <li><i class="fa-solid fa-calendar-check"></i> R??servation</li>
                </a>
                <a href="">
                    <li><i class="fa-solid fa-phone"></i> Contact</li>
                </a>
                <a href="">
                    <li><i class="fa-solid fa-bell-concierge"></i> Services</li>
                </a>
            </ul>
            <ul>
                <a href="">
                    <li><i class="fa-solid fa-user"></i> Connexion</li>
                </a>
            </ul>
        </nav>
        <div id="imgHeader">
            <h1>PROFITEZ DE LA LIBERT?? D'UN APPARTEMENT ET DES SERVICES <br> D'UN H??TEL POUR TRAVAILLER EN TOUTE
                S??R??NIT?? ! </h1>
            <button class="reserver">R??server</button>
        </div>


    </header> -->
    <?php include  "header.php"  ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="bar col-5"></div> <!-- separation avec bar  -->
                <div class=" acceuil col-12">
                    <p></p>
                    <p></p>
                    <p></p>

                    <p><span> VOUS SOUHAITEZ NOUS CONTACTER DIRECTEMENT EN RESIDENCE ?</span><br>
                        Nos ??quipes sont ?? votre ??coute. Retrouvez les coordonn??es mail et t??l??phone
                        de la r??sidence de votre choix</p>
                    <br><br><br>

                    <p>
                        Vous souhaitez recevoir des informations pour un long s??jour ou un s??jour professionnel ?<br>
                        Vous ??tes int??ress?? par nos conventions tarifaires entreprises ?<br>
                        Veuillez compl??ter ce formulaire en pr??cisant le sujet de votre demande et nous reprendrons
                        rapidement contact avec vous !
                    </p>
                    <div class="row">
                        <div class=" imgContact col-4">
                            <!-- <img src="./img/contact.jpg" class="rounded" alt="Cinque Terre"> -->
                        </div>
                        <div class="col-7">
                            <form action="" method="post">


                                <div class="coordonee container">

                                    <div class="row">
                                        <p class="titreSection col-12">Vos Coordonn??es</p>


                                    </div>
                                    <div class="row">
                                        <!-- selection entre pro et particulier -->
                                        <div class="col-2">vous ??tes *</div>
                                        <div class="formRadio col-10">
                                            <input type="radio" name="statut" id="radioPart" value="Particulier">
                                            <label for="radioPart">Particulier</label>
                                            <input type="radio" name="statut" id="radioPart" value="professionnel">
                                            <label for="radioPart">professionnel</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- selection Titre -->
                                        <div class="col-2">Titre *</div>
                                        <div class="formRadio col-10">
                                            <input type="radio" name="genre" id="radioPart" value="Madame">
                                            <label for="radioPart">Madame</label>
                                            <input type="radio" name="genre" id="radioPart" value="Monsieur">
                                            <label for="radioPart">Monsieur</label>
                                        </div>
                                    </div>
                                    <div class="row inputText">
                                        <input type="text" class="inText col-5" name="nom" placeholder="Nom">
                                        <div class="col-1"></div>
                                        <input type="text" class="inText col-5" name="prenom" placeholder="Pr??nom">
                                    </div>
                                    <div class="row inputText">
                                        <input type="text" class="inText col-5" name="mail" placeholder="courriel">
                                        <div class="col-1"></div>
                                        <input type="text" class="inText col-5" name="tel" placeholder="tel">
                                    </div>


                                </div>

                                <div class=" coordonee container">
                                    <div class="row">
                                        <p class="titreSection col-12">Votre demande</p>
                                        <div class="col-6"><label for="residence">residence*</label></div>
                                        <div class="col-6"><label for="sejour"></label>Type de sejour*</div>
                                        <div class="dropdown col-6">
                                            <!--  <input class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                                value = > -->

                                            <select name="liste1" class="liste1 col-12 inText" aria-labelledby="dropdownMenuButton1" value=<?php echo @$_POST['liste1'] ?>>
                                                <option>Dieppe
                                                <option>Marseille
                                                <option>Bordeaux
                                            </select>
                                        </div>
                                        <div class="dropdown col-6">
                                            <!--   <input  name = 'sejour' class="btn btn-secondary dropdown-toggle" type="text"
                                                 list="sejour" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                                value = selectionner>  -->

                                            <select name=liste2 class="liste2 col-12 inText" aria-labelledby="dropdownMenuButton1" <?php echo @$_POST['liste1'] ?>>
                                                <option>Long s??jour
                                                <option>S??jour professionnel
                                                <option>S??miminaire & r??unions
                                                <option>Autre
                                            </select>
                                        <!-- <script>combo(liste2,sejour)</script> -->
                                        </div>
                                        <div class="row">
                                            <p class="titreSection col-12">Message</p>
                                            <textarea required="required" rows="4" class="form-control form-textarea required" id="contact-message" name="simpleMessage" cols="60"></textarea>
                                        </div>
                                        <div class="option row">
                                            <input class=" col-1" type="checkbox" id="asah_simple_contact_newsletterOptin" name="newsLetterOption" value="1">
                                            <label class="souh col-11" for="asah_simple_contact_newsletterOptin">Souhaitez-vous ??tre inform?? en
                                             
                                            3es offres sp??ciales Appart
                                                H??tel</label>
                                            <p></p>
                                            <input class=" col-1" type="checkbox" id="asah_simple_contact_newsletterOptin" name="newCollect" value="1">
                                            <label class="souh col-11" for="asah_simple_contact_newsletterOptin">J???accepte
                                                que mes donn??es personnelles soient collect??es aux fins de pouvoir me
                                                contacter (par email et t??l??phone) en lien avec ma demande.</label>
                                        </div>
                                    </div>
                                </div>
                                <input name="submit" type="submit" class="btn btn-primary form-submit btn btn-primary ajax-processed" id="button-contact-submit" value="Valider" data-nlok-ref-guid="dd7f8ca7-ed21-4a23-ec53-ffc91a95d271">

                        </div>

                        </form>
                        <div col-12>
                            <p>Vous pouvez acc??der aux donn??es vous concernant, les rectifier, demander leur effacement
                                ou exercer votre droit ?? la limitation du traitement de vos donn??es. Vous avez la
                                possibilit?? de retirer ?? tout moment votre consentement. Vous pouvez exercer ces droits
                                par courrier ??lectronique ?? : dpo@aaaa.com. Pour plus d???information, consultez notre
                                politique de protection des donn??es personnelles applicable aux prospects et clients.
                                Si vous ne souhaitez pas faire l???objet de prospection commerciale par voie t??l??phonique,
                                vous pouvez vous inscrire gratuitement sur la liste d'opposition au d??marchage
                                t??l??phonique, depuis le site internet Bloctel du gouvernement.


                            </p>
                        </div>

                    </div>

                </div>



            </div>
        </div>

    </main>
    <?php include "footer.php" ?>

</body>

</html>