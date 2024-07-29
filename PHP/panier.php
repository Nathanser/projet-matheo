<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier</title>
    <!-- Ajouter le lien vers la bibliothèque Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-2oFdX/BVlWEGNwex7f2eEC1i18FC2Y3sUd/xfZslyUQFvqU8mHxnzi1yZZ7vJzP8U5jK1RsmIuQJiIX1Lr5IyYw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" type="image/png" href="img/logo.PNG">
    <style>
        /* Style optionnel pour le centrage du contenu */
        .panier-container {
            text-align: center;
            margin-top: center;
        }
        .panier-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Barre de navigation -->
  <nav>
    <h1>LinkedLoudSpeakers</h1>
    <div class="onglets">
      <p class="link"><a href="accueil.php"><button>Accueil</button></a></p>
      <p class="link"><button>Nouveautes</button></p>
      <form>
        <input type="search" placeholder="Rechercher">
      </form>
      <p><i class="fas fa-heart"></i></p>
      <p><i class="fas fa-shopping-cart"></i></p>
    </div>
  </nav>
  <!-- Fin de la barre de navigation -->

    <div class="panier-container">
        <svg xmlns="http://www.w3.org/2000/svg" height="20%" width="20%" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192H32c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512H430c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32H458.4L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192H171.7L253.3 35.1zM192 304v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16zm128 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
        <p>Vous n'avez encore rien ajoute au panier</p>
    </div>
</body>
</html>
