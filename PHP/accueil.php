<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LinkedLoudSpeakers</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  <link rel="shortcut icon" type="image/png" href="logo.png">
</head>
<body>
    <?php
      include('fonction.php');
      $connect = connexion('172.16.201.111','sio','slam','enceintes');
    ?>
  <!-- Barre de navigation -->
  <nav>
    <h1>LinkedLoudSpeakers</h1>
    <div class="onglets">
      <p class="link"><a href="accueil.php"><button>Accueil</button></a></p>
      <p class="link">
        <label for="langues"><button>Langues
        <select id="langues">
            <option value="fr">Francais</option>
            <option value="en">Anglais</option>
        </select></label></button>
      <form>
        <input type="search" placeholder="Rechercher">
      </form>
      <p><i class="fas fa-heart"></i></p>
      <a href="panier.php"><p><i class="fas fa-shopping-cart"></i></p></a>
    </div>
  </nav>
  <!-- Fin de la barre de navigation -->
  
  <!-- Header -->
   <header>
     <h1>Passez à la qualite superieure</h1>
     <a href="../html/connexion.html"><button>CONNECTEZ-VOUS</button></a>
   </header>
  <!-- Fin du header -->
  
  <!-- Section principale -->
  <section class="main">
    
    <!-- Toutes les cartes -->
    
    <div class="cards opacity1">
      
      <div class="card">
        <a href="enceinte_mini.php"><img src="enceinte1.jpg"></a>
        <div class="card-header">
          <h4 class="title">Enceinte mini portable</h4>
          <h4 class="price">39€</h4>
        </div>
        <div class="card-body">
          <p><!-- description de l'article --></p>
        </div>
      </div>
      
      <div class="card">
        <a href="enceinte_socle.php"><img src="enceinte2.jpg"></a>
        <div class="card-header">
          <h4 class="title">Enceinte avec socle</h4>
          <h4 class="price">69€</h4>
        </div>
        <div class="card-body">
          <p><!-- description de l'article --></p>
        </div>
      </div>
      
      <div class="card">
        <a href="enceinte_tourne_disque.php"><img src="enceinte3.jpg"></a>
        <div class="card-header">
          <h4 class="title">Enceinte et tourne-disque</h4>
          <h4 class="price">499€</h4>
        </div>
        <div class="card-body">
          <p><!-- fin description de l'article --></p>
        </div>
      </div>
        
  </section>
  <!-- Fin de la section principale -->

  <!-- Début de la deuxième section -->


  </section>
  
  <!-- Pied de page -->
  <footer>
    <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <h4>LinkedLoudSpeakers</h4>
              <ul>
                <li><a href="a propos.html" target="_blank">A Propos</a></li>
                <li><a href="#">Nos services</a></li>
                <li><a href="#">Politique de confidentialité</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Obtenir de l'aide</h4>
              <ul>
                <li><a href="contact.html"target="_blank">Service Client</a></li>
                <li><a href="#">Etat des commandes</a></li>
                <li><a href="#">Options de paiement</a></li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>Contacts</h4>
               <!-- Liens vers les réseaux sociaux -->
              <div class="social-links">
                <a href="https://www.facebook.com/"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                  </svg></a>
                <a href="https://twitter.com/home"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                      d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z">
                    </path>
                  </svg></a>
                <a href="https://www.instagram.com/?hl=fr"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="4" y="4" width="16" height="16" rx="4"></rect>
                    <circle cx="12" cy="12" r="3"></circle>
                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
                  </svg></a>
                <a href="https://www.youtube.com/"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-youtube"
                    width="26" height="26" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <rect x="3" y="5" width="18" height="14" rx="4"></rect>
                    <path d="M10 9l5 3l-5 3z"></path>
                  </svg></a>
              </div>
            </div>
          </div>
          <p>© Site fictif créé par Mathéo<br></p>
        </div>
      </footer>
  <!-- Fin du pied de page -->
</body>
</html>