<? include "../pdo.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin — Utilisateurs · Socks Need Love</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=Lato:wght@300;400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="admin.css" />
</head>
<body>

 
  <?php include 'topbar.php'; ?>
  <div class="layout">

     <?php include 'sidebar.php'; ?> 
    
    <main class="content">

      <div class="page-header">
        <div>
          <div class="page-title">Gestion des utilisateurs</div>
          <div class="page-sub">Liste de tous les membres inscrits</div>
        </div>
      </div>

      
      <div class="filters">
        <div class="search-wrap">
          <span class="search-icon">⌕</span>
          <input class="search-input" type="text" name="recherche" placeholder="Rechercher par nom ou email…" />
        </div>
        <select class="filter-select" name="statut">
          <option value="">Tous les statuts</option>
          <option value="actif">Actif</option>
          <option value="bloque">Bloqué</option>
          <option value="attente">En attente</option>
        </select>
        <select class="filter-select" name="role">
          <option value="">Tous les rôles</option>
          <option value="membre">Membre</option>
          <option value="admin">Admin</option>
        </select>
        <button class="btn btn-ghost" type="submit">Filtrer</button>
      </div>

 
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Nom</th>
              <th>Email</th>
              <th>Statut</th>
              <th>Rôle</th>
              <th>Inscrit le</th>
              <th>Chaussettes</th>
              <th>Actions</th>
            </tr>
          </thead>
          
        </table>
      </div>

    </main>
  </div>

</body>
</html>
