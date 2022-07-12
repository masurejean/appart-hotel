<?php
require "DB.php";
if (isset($_POST['send'])) {
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    $error = null;
    $error1 = null;
    $error2 = null;
    $error3 = null;
    $error4 = null;
    if (empty($nom)) {
        $error1 .= "<p></p>Le champ nom est obligatoire.</p>";
    } elseif (strlen($nom) < 2 || strlen($nom) > 15) {
        $error1 .= "<p>La taille du nom doit être entre 2 et 15.</p>";
    }
    if (empty($prenom)) {
        $error2 .= "<p>Le champ prenom ne peut pas être vide.";
    } elseif (strlen($prenom) < 2 || strlen($prenom) > 15) {
        $error2 .= "<p>La taille du prenom doit être entre 2 et 15.</p>";
    }

    if (empty($email)) {
        $error3 .= "<p>Le champ e-mail ne doit pas être vide.</p>";
        // l'email doit être valide (exemple@exemple.com)
    } elseif (!preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email))
    /* autre solution elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) */ {
        $error3 .= "<p>Le format e-mail n'est pas valide.</p>";
    }

    if (empty($password)) {
        $error4 .= "<p>Le champ password ne doit pas être vide.</p>";
    }
    
    if (empty($error1) || empty($error2) || empty($error3) || empty($error4)) {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        var_dump($hash, $nom, $prenom, $email);
        $statement = $pdo->prepare("INSERT INTO clients(nom,prenom,mail,password)values(:nom,:prenom,:mail,:password)");
        $statement->execute([
            "nom" => $_POST['nom'],
            "prenom" => $_POST['prenom'],
            "mail" => $_POST['email'],
            "password" => $hash,
        ]);
        var_dump($statement);
        header("location:connexion.php");
    }



       

}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
    <!-- PAGE CONNEXION -->
    <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/connexion.css">
</head>

<body>


    <!-- HEADER -->
    <?php include "header.php" ?>
    <main>
        <form action="" method="POST">
            <div class="inputCo">
                <!-- PRENOM-->
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Prénom</label>
                    <input type="text" class="form-control" placeholder="Entrer le prénom" name="prenom">
                </div>
                <?php
                if (!empty($error1)) {
                ?>
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Attention !</strong> <?= $error1 ?>
                    </div>
                <?php
                }
                ?>
                <!-- NOM-->
                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Nom</label>
                    <input type="text" class="form-control" placeholder="Entrer le nom" name="nom">
                </div>
                <?php
                if (!empty($error2)) {
                ?>
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Attention !</strong> <?= $error2 ?>
                    </div>
                <?php
                }
                ?>
                <!-- EMAIL -->
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre Email" name="email" value="<?php echo @$_POST["email"] ?>">
                </div>
                <?php
                if (!empty($error3)) {
                ?>
                    <div class="alert alert-dismissible alert-danger">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Attention !</strong> <?= $error3 ?>
                    </div>
                <?php
                }
                ?>
                <!-- PASSWORD -->
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Mot de Passe</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre mot de passe" name="password">
                </div>
                <?php
                if (!empty($error4)) {
                ?><div class="alert alert-dismissible alert-danger">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Attention !</strong> <?= $error4 ?>
                    </div>
                <?php
                }
                ?>
                <br><br>
                <button type="submit" class="btn btn-primary" name="send">S'inscrire</button>
                <br><br>
                <h4>Déjà inscrit ?</h4>
                <a href="connexion.php">
                    <button type="submit" class="btn btn-primary" name="connexion">Se connecter</button>
                </a>
            </div>
        </form>
        <br><br><br><br><br><br><br><br><br><br>
    </main>
    <!-- FOOTER -->
    <?php include "footer.php" ?>
</body>

</html>