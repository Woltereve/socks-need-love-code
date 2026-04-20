<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin — Nouvel article · Socks Need Love</title>
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

      <div class="page-header">
        <div>
          <div class="page-title">Nouvel article</div>
          <div class="page-sub">Remplis les informations ci-dessous</div>
        </div>
        <a href="admin-articles.html" class="btn btn-ghost">← Retour à la liste</a>
      </div>

      <div class="panel" style="max-width:680px;">

        <form action="admin-articles-create.php" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label class="form-label" for="titre">Titre de l'article</label>
            <input class="form-input" type="text" id="titre" name="titre" placeholder="ex : Comment entretenir vos chaussettes préférées…" required />
          </div>

          <div class="form-group">
            <label class="form-label" for="accroche">Accroche / résumé</label>
            <input class="form-input" type="text" id="accroche" name="accroche" placeholder="Une phrase courte qui résume l'article…" />
          </div>

          <div class="form-group">
            <label class="form-label" for="contenu">Contenu</label>
            <textarea class="form-textarea" id="contenu" name="contenu" style="min-height:200px;" placeholder="Rédige ton article ici…"></textarea>
          </div>

          <div class="form-group">
            <label class="form-label" for="image">Image à la une</label>
            <input class="form-input" type="file" id="image" name="image" accept="image/*" style="padding:8px;" />
          </div>

          <div class="form-group">
            <label class="form-label" for="page_associee">Page associée</label>
            <select class="form-select" id="page_associee" name="page_associee">
              <option value="">— Choisir —</option>
              <option value="accueil">Accueil</option>
              <option value="conseils">Conseils &amp; entretien</option>
              <option value="communaute">Communauté</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="statut">Statut de publication</label>
            <select class="form-select" id="statut" name="statut">
              <option value="brouillon">Brouillon</option>
              <option value="publie">Publier immédiatement</option>
            </select>
          </div>

          <div style="display:flex;gap:12px;margin-top:8px;">
            <button class="btn btn-primary" type="submit">Enregistrer</button>
            <a href="admin-articles.html" class="btn btn-ghost">Annuler</a>
          </div>

        </form>

      </div>

    </main>
  </div>

</body>
</html>
