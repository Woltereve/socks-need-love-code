<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin — Tableau de bord · Socks Need Love</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=Lato:wght@300;400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="admin.css" />
</head>
<body>

  
  <div class="topbar">
    <div class="logo">
      <div class="logo-dot"></div>
      Socks Need Love
      <span class="admin-tag">— admin</span>
    </div>
    <div class="topbar-right">
      <span>Administrateur</span>
      <div class="avatar">A</div>
    </div>
  </div>

  <div class="layout">
    <?php include 'sidebar.php'; ?>
    
    
   
    <main class="content">

      <div class="page-title">Tableau de bord</div>
      <div class="page-sub">Vue d'ensemble de la plateforme</div>

     
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-label">Utilisateurs</div>
          <div class="stat-value">—</div>
        </div>
        <div class="stat-card">
          <div class="stat-label">Chaussettes</div>
          <div class="stat-value">—</div>
        </div>
        <div class="stat-card">
          <div class="stat-label">Matchs</div>
          <div class="stat-value">—</div>
        </div>
        <div class="stat-card">
          <div class="stat-label">Échanges</div>
          <div class="stat-value">—</div>
        </div>
      </div>

      <div class="grid-2">

        <div class="panel">
          <div class="panel-title">Derniers inscrits</div>
          <table>
            <thead>
              <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Date</th>
              </tr>
            </thead>
           
          </table>
          <a href="admin-users.html" class="btn btn-ghost" style="margin-top:14px;">Voir tous les utilisateurs</a>
        </div>

        <div class="panel">
          <div class="panel-title">Activité récente</div>
          <table>
            <thead>
              <tr>
                <th>Action</th>
                <th>Date</th>
              </tr>
            </thead>
           
          </table>
        </div>

      </div>

      
      <div class="panel">
        <div class="panel-title">Signalements en attente</div>
        <table>
          <thead>
            <tr>
              <th>Utilisateur signalé</th>
              <th>Motif</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          
        </table>
      </div>

    </main>
  </div>

</body>
</html>
