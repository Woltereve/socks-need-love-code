<? include "../pdo.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin — Catégories · Socks Need Love</title>
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

      <div class="page-title">Catégories de chaussettes</div>
      <div class="page-sub" style="margin-bottom:28px;">Organise le catalogue de la plateforme</div>

      <div class="grid-form">

        
        <div class="panel">
          <div class="panel-title">Nouvelle catégorie</div>

          <form action="admin-categories-create.php" method="POST">

            <div class="form-group">
              <label class="form-label" for="nom">Nom de la catégorie</label>
              <input class="form-input" type="text" id="nom" name="nom" placeholder="ex : Chaussettes vintage…" required />
            </div>

            <div class="form-group">
              <label class="form-label" for="description">Description</label>
              <textarea class="form-textarea" id="description" name="description" placeholder="Décris cette catégorie en quelques mots…"></textarea>
            </div>

            <div class="form-group">
              <label class="form-label" for="couleur">Couleur d'identification</label>
              <input class="form-input" type="color" id="couleur" name="couleur" value="#A84E6A" style="height:42px;padding:4px 8px;cursor:pointer;" />
            </div>

            <button class="btn btn-primary btn-full" type="submit">Créer la catégorie</button>

          </form>
        </div>

       
        <div>
          <div class="panel-title">Catégories existantes</div>
          <div class="table-wrap">
            <table>
              <thead>
                <tr>
                  <th>Couleur</th>
                  <th>Nom</th>
                  <th>Description</th>
                  <th>Chaussettes</th>
                  <th>Actions</th>
                </tr>
              </thead>
             
            </table>
          </div>
        </div>

      </div>

    </main>
  </div>

</body>
</html>
