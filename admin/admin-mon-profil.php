<?php include "../pdo.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=Lato:wght@300;400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="admin.css" />
    <title>Admin — Mon profil · Socks Need Love</title>
</head>
<body>
    <?php include 'topbar.php'; ?>
<div class="layout">
     <?php include 'sidebar.php'; ?> 
   <main class='content'>
    <h1 class = "page-title"  >Mon profil perso</h1>
    <p class = "page-sub" > Modifie ici tes infos personelle </p>
    <section class= "panel"> 
    <h2 class="panel-title"> Administrateur</h2>
     <form action="admin-profil-save.php" method="POST" >
         <div class="form-group">
             <label class="form-label" for="nom">Mon nom</label>
             <input class="form-input" type="text" id="nom" name="nom" placeholder="ex : Soquette"/>
</div>
<div class="form-group">
              <label class="form-label" for="prenom">Mon prénom</label>
             <input class="form-input" type="text" id="prenom" name="prenom" placeholder="ex : Soie naturelle"/>
</div>
             <div class="form-group">
 <label class="form-label" for="email">Mon email</label>
             <input class="form-input" type="email" id="email" name="email" placeholder="ex : jeunechaussette@piedtrouer.com"/>
</div>
 <div class="form-group">
 <label class="form-label" for="password">Mon mot de passe</label>
             <input class="form-input" type="password" id="password" name="password" placeholder="ex : trouéemaisadorée"/>
</div>
<button class="btn btn-primary" type="submit"> Valider </button>
<button class="btn btn-ghost" type="reset"> Vider les champs</button>
            </form>
    </section>
</main>
</div>
    </body>
</html>