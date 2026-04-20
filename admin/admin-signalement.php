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

    <?php $page = 'signalements'; include 'sidebar.php'; ?>

    <main class="content">

      <div class="page-header">
        <div>
          <div class="page-title">Signalements</div>
          <div class="page-sub">Contenus et profils signalés par les utilisateurs</div>
        </div>
      </div>

      <!-- Filtres -->
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

      <!-- Tableau signalements -->
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
          <tbody>
            <!-- Rempli dynamiquement par PHP -->
            <!-- Exemple de structure d'une ligne :
            <tr>
              <td>Chaussette</td>
              <td><a href="admin-chaussettes.php?id=1">Nom de la chaussette</a></td>
              <td><a href="admin-users.php?id=2">Prénom Nom</a></td>
              <td>Photo fausse</td>
              <td>01/01/2025</td>
              <td>
                <span class="badge badge-attente">
                  <span class="badge-dot"></span>En attente
                </span>
              </td>
              <td>
                <div class="actions">
                  <a href="admin-signalements-ignore.php?id=1" class="btn-sm">Ignorer</a>
                  <a href="admin-users-block.php?id=2" class="btn-sm">Bloquer l'auteur</a>
                  <a href="admin-chaussettes-delete.php?id=1" class="btn-sm danger">Supprimer</a>
                </div>
              </td>
            </tr>
            -->
          </tbody>
        </table>
      </div>

    </main>
  </div>

</body>
</html>