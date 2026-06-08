<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Admin · Socks Need Love</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=Lato:wght@300;400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/app/admin/views/admin.css" />
 
</head>
<body>

  <header class="topbar">
    <span class="logo">
      <span class="logo-dot"></span>
      Socks Need Love
      <span class="admin-tag">— admin</span>
    </span>
    <div class="topbar-right">
      <span>Administrateur</span>
      <span class="avatar">A</span>
    </div>
  </header>

  <div class="layout">

    <nav class="sidebar">
    <div class="nav-section">
      <span class="nav-label">Navigation</span>
      <a class="nav-item" href="admin-dashboard.php"><span class="nav-icon">⌂</span> Tableau de bord</a>
      <a class="nav-item" href="admin-users.php"><span class="nav-icon">♡</span> Utilisateurs</a>
      <a class="nav-item" href="admin-chaussettes.php"><span class="nav-icon">◈</span> Chaussettes</a>
      <a class="nav-item" href="admin-categories.php"><span class="nav-icon">✦</span> Catégories</a>
      <a class="nav-item" href="admin-mon-profil.php"><span class="nav-icon">✦</span> Profil perso</a>
    </div>
    <div class="nav-section">
      <span class="nav-label">Modération</span>
      
    <a class="nav-item " href="admin-signalement.php"> 
      <span class="nav-icon">⚑</span> Signalements
    </a>
      </div>
      <div class="nav-section">
        <span class="nav-label">Système</span>
        
    <a class="nav-item " href="admin-parametres.php">
      <span class="nav-icon">◎</span> Paramètres
    </a>
        <a class="nav-item" href="#"><span class="nav-icon">→</span> Déconnexion</a>
      </div>
    </nav>

    <main class="content">
      <?= $page_content; ?>
    </main>
  </div>

</body>
</html>