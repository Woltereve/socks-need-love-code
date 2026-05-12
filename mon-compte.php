<?php include 'top.php'; ?>

  <link rel="stylesheet" href="mon-compte.css" />
  <title>Mon compte</title>
</head>
<body>
  
  
  
  <header>
    <h1 class="compte-title">Mon compte</h1>
  </header>
  
  <main class="compte-container">
    
    <div class="compte-grid">
      
      <div class="compte-card">
        <h3>🧦 Mes chaussettes</h3>
        <a href="mes_chaussettes.php" class="lien_couleur">Voir mes chaussettes</a>
      </div>
      
      <div class="compte-card">
        <h3>🔄 Échanges réalisés</h3>
        <a href="#" class="lien_couleur">Mes chaussettes échangées</a>
      </div>
      
      
      
      <div class="compte-card">
        <h3>💬 Messages</h3>
        <a href="#" class="lien_couleur">Voir mes conversations</a>
      </div>
      
      <div class="compte-card">
        <h3>⚙️ Paramètres</h3>
        
        <a href="mon_profil.php" class="lien_couleur">Mon profil/Modifier</a>
      </div>
      
      <div class="compte-card">
        <h3>➕ Ajouter</h3>
        <a href="new_socks.php" class="lien_couleur">Ajouter une chaussette</a>
      </div>
      
      <div class="compte-card danger">
        <h3>🚪 Déconnexion</h3>
        <a href="desinscription.php" class="lien_couleur">Se déconnecter / Se désinscrire</a>
      </div>
      
      
      
    </div>
  </body>
  </html>

</main>


<?php include 'bottom.php'; ?>