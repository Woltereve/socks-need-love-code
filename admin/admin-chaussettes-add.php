<? include "../pdo.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin — Ajouter une chaussette · Socks Need Love</title>
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
          <h1 class="page-title">Ajouter une chaussette</h1>
          <p class="page-sub">Remplis les informations ci-dessous</p>
        </div>
        <a href="admin-chaussettes.php" class="btn btn-ghost">← Retour à la liste</a>
      </div>

      <div class="panel" style="max-width:680px;">

        <form action="admin-chaussettes-create.php" method="POST" enctype="multipart/form-data">

          <div class="form-group">
            <label class="form-label" for="nom">Nom / surnom</label>
            <input class="form-input" type="text" id="nom" name="nom" placeholder="ex : La Rayée Mélancolique…" required />
          </div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="taille">Taille</label>
              <select class="form-select" id="taille" name="taille">
                <option value="">— Choisir —</option>
                <option value="35-38">35–38</option>
                <option value="39-42">39–42</option>
                <option value="43-46">43–46</option>
                <option value="unique">Unique</option>
              </select>
</div>
            <div class="form-group">
              <label class="form-label" for="couleur">Couleur principale</label>
              <input class="form-input" type="text" id="couleur" name="couleur" placeholder="ex : bordeaux, rayé, à pois…" />
            </div>
</div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="matiere">Matière</label>
              <select class="form-select" id="matiere" name="matiere">
                <option value="">— Choisir —</option>
                <option value="coton">Coton</option>
                <option value="laine">Laine</option>
                <option value="synthetique">Synthétique</option>
                <option value="bambou">Bambou</option>
                <option value="soie">Soie</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="etat">État</label>
              <select class="form-select" id="etat" name="etat">
                <option value="">— Choisir —</option>
                <option value="neuf">Neuf</option>
                <option value="bon_etat">Bon état</option>
                <option value="use">Usé avec charme</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="categorie">Catégorie</label>
            <select class="form-select" id="categorie" name="categorie_id">
              <option value="">— Choisir une catégorie —</option>
              
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="description">Description / anecdote</label>
            <textarea class="form-textarea" id="description" name="description" placeholder="Son histoire, sa personnalité, ce qu'elle recherche…"></textarea>
          </div>

          <div class="form-group">
            <label class="form-label" for="photo">Photo</label>
            <input class="form-input" type="file" id="photo" name="photo" accept="image/*" style="padding:8px;" />
          </div>

          <div class="form-group">
            <label class="form-label" for="statut">Statut</label>
            <select class="form-select" id="statut" name="statut">
              <option value="disponible">Disponible</option>
              <option value="en_match">En match</option>
              <option value="retiree">Retirée</option>
            </select>
          </div>

          <div style="display:flex;gap:12px;margin-top:8px;">
            <button class="btn btn-primary" type="submit">Enregistrer la chaussette</button>
            <a href="admin-chaussettes.html" class="btn btn-ghost">Annuler</a>
          </div>

        </form>

      </div>

    </main>
  </div>

</body>
</html>
