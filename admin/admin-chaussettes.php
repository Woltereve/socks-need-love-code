<? include "../pdo.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin — Chaussettes · Socks Need Love</title>
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
          <h1 class="page-title">Gestion des chaussettes</h1>
          <p class="page-sub">Catalogue complet de la plateforme</p>
        </div>
        <a href="admin-chaussettes-add.html" class="btn btn-primary">+ Ajouter une chaussette</a>
      </div>

      
      <main class="filters">
        <div class="search-wrap">
          <span class="search-icon">⌕</span>
          <input class="search-input" type="text" name="recherche" placeholder="Rechercher une chaussette…" />
</main>
        <select class="filter-select" name="categorie">
          <option value="">Toutes les catégories</option>
          <!-- Options remplies par PHP -->
        </select>
        <select class="filter-select" name="statut">
          <option value="">Tous les statuts</option>
          <option value="disponible">Disponible</option>
          <option value="en_match">En match</option>
          <option value="retiree">Retirée</option>
        </select>
        <button class="btn btn-ghost" type="submit">Filtrer</button>
      </div>

      
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Photo</th>
              <th>Nom / surnom</th>
              <th>Catégorie</th>
              <th>Taille</th>
              <th>État</th>
              <th>Statut</th>
              <th>Ajoutée le</th>
              <th>Actions</th>
            </tr>
          </thead>
      
        </table>
      </div>

    </main>
  </div>

</body>
</html>
