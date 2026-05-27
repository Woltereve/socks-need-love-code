<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dating Socks</title>
  <link rel="stylesheet" href="/styles/all-variables.css" />
  <link rel="stylesheet" href="/socks.css" />
  <link rel="stylesheet" href="/acceuil.css" />
</head>
<body>
  <header>
  <nav class="navbar">
    <div class="nav-container">
    <img src="/asset/images-SM/logo.svg" alt="logo" class="logo" />
      <li><a href="/" class="nav-link">Accueil</a></li>
      <li><a href="/catalogue" class="nav-link">Catalogue</a></li>
      <li><a href="/profile" class="nav-link">Mon Compte</a></li>
      <li><a href="/contact" class="nav-link">Contact</a></li> 
       </ul>
    
   <div class="nav-buttons">
<?php if (isset($_SESSION['operator_id'])) { ?>
    <span style="color:var(--color-rose-deep);">Bonjour <?= $_SESSION['operator_email'] ?></span>
    <a href="/connection/logout" class="btn">Se déconnecter</a>
<?php } else { ?>
    <a href="/connection" class="btn">Se connecter</a>
    <a href="/inscription" class="btn">S'inscrire</a>
<?php } ?>
</div>




    </div>
</nav>
</header>
<main>
<?php echo $page_content;?>



</main>
 <footer>
         <ul class=footer-ul>
                 <li><a href="/desinscription" class= "footer_li">Désinscription</a></li>
                 <li> <a href="/deconnection" class= "footer_li">Déconnection</a></li>
                 <li><a href="/contact" class= "footer_li">Contact</a></li>
                 
                </ul>
                <p>&copy; <?php echo date ('Y') ; ?></p>
                <a href="mentions-legales.html">Mentions légales</a>
          <p>”Un projet imaginé par Eve ” </p>
          <strong>”Parce que personne ne devrait finir seul au fond d'un tambour de machine à laver.” 🧦</strong>
        </footer>
        </body>
</html>