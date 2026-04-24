<?php include 'top.php'; ?>


<link rel="stylesheet" href="mon-compte.css" />
 
<header>
  <h1 class="compte-title">Mon compte</h1>
</header>

<main class="compte-container">

  <div class="compte-grid">

    <div class="compte-card">
      <h3>🧦 Mes chaussettes</h3>
      <a href="#" class=lien_couleur>Voir mes chaussettes</a>
    </div>

    <div class="compte-card">
      <h3>🔄 Échanges réalisés</h3>
      <a href="#" class=lien_couleur>Mes chaussettes échangées</a>
    </div>

    <div class="compte-card">
      <h3>⏳ En attente</h3>
      <a href="#" class=lien_couleur>Chaussettes en attente</a>
    </div>

    <div class="compte-card">
      <h3>💬 Messages</h3>
      <a href="#" class=lien_couleur>Voir mes conversations</a>
    </div>

    <div class="compte-card">
      <h3>⚙️ Paramètres</h3>
      <a href="#" class=lien_couleur>Modifier mon profil</a>
    </div>

    <div class="compte-card">
      <h3>➕ Ajouter</h3>
      <a href="new_socks.php" class=lien_couleur>Ajouter une chaussette</a>
    </div>

    <div class="compte-card danger">
      <h3>🚪 Déconnexion</h3>
      <a href="#" class=lien_couleur>Se déconnecter</a>
    </div>

    <div class="compte-card danger">
      <h3>❌ Supprimer compte</h3>
      <a href="#" class=lien_couleur>Se désinscrire</a>
    </div>

  </div>

</main>


<?php include 'bottom.php'; ?>