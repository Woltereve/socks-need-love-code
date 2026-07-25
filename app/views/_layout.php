<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dating Socks</title>
  <link rel="stylesheet" href="/styles/all-variables.css" />
  <link rel="stylesheet" href="/forms.css" />
  <link rel="stylesheet" href="/main.css" />
</head>
<body>
  <header>
<nav class="navbar">
    <div class="nav-container">
      <img src="/asset/images-SM/logo.svg" alt="logo" class="logo" />
      <button class="burger" id="burger">&#9776;</button>
      <ul class="nav-menu">
        <li><a href="/" class="nav-link">Accueil</a></li>
        <li><a href="/catalogue" class="nav-link">Catalogue</a></li>
        <li><a href="/profile" class="nav-link">Mon Compte</a></li>
        <li><a href="/contact" class="nav-link">Contact</a></li>
        <?php if (isset($_SESSION['operator_id'])) { ?>
          <li><a href="/connection/logout" class="nav-link">Déconnexion</a></li>
        <?php } else { ?>
          <li><a href="/connection" class="nav-link">Se connecter</a></li>
          <li><a href="/inscription" class="nav-link">S'inscrire</a></li>
        <?php } ?>
      </ul>
    </div>
</nav>
   
</header>
<main>
  <?php echo $page_content;?>
   
</main>
<footer>
  <ul class=footer-ul>
    <li><a href="/desinscription" class="footer_li">Désinscription</a></li>
    <li><a href="/connection/logout" class="footer_li">Déconnexion</a></li>
    <li><a href="/contact" class="footer_li">Contact</a></li>
  </ul>
  <p>&copy; <?php echo date ('Y') ; ?></p>
  <a href="/mentions_legales">Mentions légales</a>
  <p>"Un projet imaginé par Eve "</p>
  <strong>"Parce que personne ne devrait finir seul au fond d'un tambour de machine à laver." 🧦</strong>
</footer>
        <script>
          const burger = document.getElementById('burger');
          const menu = document.querySelector('.nav-menu');
        
          burger.addEventListener('click', function() {
            menu.classList.toggle('open');
          });
        </script>
        </body>
</html>