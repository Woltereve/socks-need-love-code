<? include "../pdo.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin — Signalements · Socks Need Love</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=Lato:wght@300;400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="admin.css" />
</head>
<body>

 <?php include 'topbar.php'; ?>

  <div class="layout">

    <?php $page = 'signalements'; include 'sidebar.php'; ?>

    <main class="content">

      <div class="page-header">
        <div>
          <div class="page-title">Signalements</div>
          <div class="page-sub">Contenus et profils signalés par les utilisateurs</div>
        </div>
      </div>

      
      <div class="filters">
        <select class="filter-select" name="type">
          <option value="">Tous les types</option>
          <option value="chaussette">Chaussette</option>
          <option value="profil">Profil utilisateur</option>
        </select>
        <select class="filter-select" name="motif">
          <option value="">Tous les motifs</option>
          <option value="contenu_inapproprie">Contenu inapproprié</option>
          <option value="photo_fausse">Photo fausse</option>
          <option value="spam">Spam</option>
          <option value="arnaque">Arnaque à l'échange</option>
          <option value="autre">Autre</option>
        </select>
        <select class="filter-select" name="statut">
          <option value="">Tous les statuts</option>
          <option value="en_attente">En attente</option>
          <option value="traite">Traité</option>
          <option value="ignore">Ignoré</option>
        </select>
        <button class="btn btn-ghost" type="submit">Filtrer</button>
      </div>

      
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Type</th>
              <th>Élément signalé</th>
              <th>Signalé par</th>
              <th>Motif</th>
              <th>Date</th>
              <th>Statut</th>
              <th>Actions</th>
            </tr>
          </thead>
          
        </table>
      </div>

    </main>
  </div>

</body>
</html>