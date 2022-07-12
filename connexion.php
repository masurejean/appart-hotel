<?php
session_start();
require "DB.php";
if(!empty($_GET['deconnexion'])){
    session_unset();
    unset($_SESSION);
    header("location:index.php");
  }


if (isset($_POST['send'])) {
    $email = strip_tags($_POST['email']);
    $password = strip_tags($_POST['password']);
    
    $error1 = null;
    $error2 = null;

    if (empty($email)) {
        $error1 .= "<p>Le champ e-mail ne doit pas être vide.</p>";
    } elseif (!preg_match(" /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ ", $email)) {
        $error1 .= "<p>Le format e-mail n'est pas valide.</p>";
    }

    if (empty($password)) {
        $error2 .= "<p>Le champ password ne doit pas être vide.</p>";
    }

    if (empty($error1)|| empty($error2)) {
        $statement = $pdo->prepare("SELECT * FROM clients WHERE mail = :email");
        $statement->execute(
            [
                "email" => $_POST['email']
            ]
        );

        $client = $statement->fetch();
        
       
        
        $passwordBaseDonnee = $client['password'];
        if (password_verify($_POST['password'], $passwordBaseDonnee)) {
            $_SESSION['prenom'] = $client['prenom'];
            $_SESSION["email"]=$_POST['email'];
            header("location:index.php");
        } else {
            $error2 .= "Mot de passe invalide.";
        }
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
                <!-- EMAIL -->
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre Email" name="email" value="<?php echo @$_POST["email"] ?>">
                </div>
                <?php
                if (!empty($error1)) {
                ?>
                    <div class="alert alert-dismissible alert-danger">
                        <strong>Attention !</strong> <?= $error1 ?>
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
                if (!empty($error2)) {
                ?><div class="alert alert-dismissible alert-danger">
                        <strong>Attention !</strong> <?= $error2 ?>
                    </div>
                <?php
                }
                ?>
                <br><br>
                <button type="submit" class="btn btn-primary" name="send">Se connecter</button>
                <br><br>
            </div>
        </form>
        <br><br><br><br><br><br><br><br><br><br>
    </main>
    <!-- FOOTER -->
    <?php include "footer.php" ?>
</body>

</html>