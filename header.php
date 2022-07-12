<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>header</title>

  <link rel="stylesheet" href="./assets/css/header.css">
  <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <p class="nomDuSite">L'Appart</p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="index.php"><i class="fa-solid fa-house"></i> Accueil
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tarifs.php"><i class="fa-solid fa-tag"></i> Tarifs</a>
            </li>
            <li class="reservation.php">
              <a class="nav-link" href="reservation.php"><i class="fa-solid fa-calendar-check"></i> Réservation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><i class="fa-solid fa-phone"></i> Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./services.php"><i class="fa-solid fa-bell-concierge"></i> Services</a>
            </li>
          </ul>
          <form class="d-flex">
            <ul>
              <?php if (empty($_SESSION)) { ?>
                <a href="inscription.php">
                  <li><i class="fa-solid fa-user-plus"></i> Inscription</li>
                </a>
                <a href="connexion.php">
                  <li><i class="fa-solid fa-user"></i> Connexion</li>
                </a>
              <?php } else { ?>
                <?php if (!empty($_SESSION)) {
                echo "<p class='prenomProfil'>" . $_SESSION['prenom'] . "<p>";
              } ?>
                <a href="connexion.php?deconnexion=true">
                  <li><i class="fa-solid fa-user"></i> Deconnexion</li>
                </a>
              <?php } ?>
              
            </ul>
          </form>
        </div>
      </div>
    </nav>
  </header>
</body>

</html>