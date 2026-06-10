<main class="content">

  <div class="page-header">
    <div>
      <h1 class="page-title">Ajouter une chaussette</h1>
      <p class="page-sub">Remplis les informations ci-dessous</p>
    </div>
    <a href="/admin/dashboard" class="btn btn-ghost">← Retour à la liste</a>
  </div>

  <div  class="panel panel-form">

    <form action="/admin/item/save" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $item['id'] ?? '' ?>">

      <div class="form-group">
        <label class="form-label" for="nom">Nom / surnom</label>
        <input class="form-input" type="text" id="nom" name="label" value="<?= $item['label'] ?? '' ?>" placeholder="ex : La Rayée Mélancolique…" required />
      </div>

      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="taille">Taille</label>
          <select class="form-select" id="taille" name="size">

            <?php foreach ($sizes as $size) { ?>
            <option value="<?= $size['id'] ?>"><?= $size['label'] ?></option>
          <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label" for="couleur">Couleur principale</label>
          <input class="form-input" type="text" id="couleur" name="color" value="<?= $item['color'] ?? '' ?>" placeholder="ex : bordeaux, rayé, à pois…" />
        
        </div>
      </div>

      <div class="form-group">
        <label class="form-label" for="matiere">Matière</label>
        <select class="form-select" id="matiere" name="material_id">
          <option value="">— Choisir —</option>
          <?php foreach ($materials as $material) { ?>
            <option value="<?= $material['id'] ?>"><?= $material['label'] ?? '' ?></option>
          <?php } ?>
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

      <div class="form-group">
        <label class="form-label" for="description">Description / anecdote</label>
        <textarea class="form-textarea" id="description" name="description" placeholder="Son histoire, sa personnalité, ce qu'elle recherche…"><?= $item['description'] ?></textarea>
      </div>
<div class="form-group">
    <label class="form-label" for="side">Côté</label>
    <select class="form-input" id="side" name="side">
      <option value="droit">Droit</option>
      <option value="gauche">Gauche</option>
      <option value="inconnu">Inconnu</option>
    </select>
    </div>

<div class="form-group">
    <label class="form-label" for="personality">Personnalité</label>
    <textarea class="form-textarea" id="personality" name="personality" placeholder="douce, folle, perchée…"><?= $item['personality'] ?></textarea>
  </div>

    <div class="form-group">
      <label class="form-label" for="looking_for">Ce qu'elle recherche</label>
    <textarea class="form-textarea" id="looking_for" name="looking_for" placeholder="l'amour, un double, un tirroir confortable..."><?= $item['looking_for'] ?></textarea>
</div>
<div class="form-group">
   <label class="form-label" for="red_flag">Red flags</label>
    <textarea class="form-textarea" id="red_flag" name="red_flag" placeholder="claquettes/chaussettes…"><?= $item['red_flag'] ?></textarea>
</div>

  <?php if ($item['main_image']) { ?>
  <img src="/<?= $item['main_image'] ?>" class="img-preview" />
<?php } ?>
    <div class="form-group">
        <label class="form-label" for="photo">Photo</label>
        <input class="form-input input-file" type="file" id="photo" name="main_image" accept="image/*" />
</div>
      

      <div class="btn-group">
        <button class="btn btn-primary" type="submit">Sauver la chaussette</button>
        <a href="/admin/item" class="btn btn-ghost">Annuler</a>
      </div>

    </form>
  </div>

</main>