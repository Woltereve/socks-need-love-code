<div class="form-container">
  <h1>J'ajoute ma chaussette</h1>

  <form action="/item/create" method="POST" enctype="multipart/form-data">

    <label class="form-label" for="label">Nom de ma chaussette</label>
    <input class="form-input" type="text" id="label" name="label" placeholder="ex : La Rayée Mélancolique…" required />

    <label class="form-label" for="description">Description</label>
    <textarea class="form-textarea" id="description" name="description" placeholder="Son histoire…" required></textarea>

    <label class="form-label" for="color">Couleur</label>
    <input class="form-input" type="text" id="color" name="color" placeholder="ex : rouge à pois" required />

    <label class="form-label" for="size">Taille</label>
    <input class="form-input" type="text" id="size" name="size" placeholder="ex : 39-42" required />

    <label class="form-label" for="material">Matière</label>
    <input class="form-input" type="text" id="material" name="material" placeholder="ex : coton" required />

    <label class="form-label" for="side">Côté</label>
    <select class="form-input" id="side" name="side">
      <option value="droit">Droit</option>
      <option value="gauche">Gauche</option>
      <option value="inconnu">Inconnu</option>
    </select>

    <label class="form-label" for="personality">Personnalité</label>
    <textarea class="form-textarea" id="personality" name="personality" placeholder="douce, folle, perchée…"></textarea>

    <label class="form-label" for="looking_for">Ce qu'elle recherche</label>
    <textarea class="form-textarea" id="looking_for" name="looking_for" placeholder="l'amour, un double, un tirroir confortable..."></textarea>

   <label class="form-label" for="red_flag">Red flags</label>
    <textarea class="form-textarea" id="red_flag" name="red_flag" placeholder="Ses red flags…"></textarea>

    <label class="form-label" for="main_image">Photo</label>
    <input class="form-input" type="file" id="main_image" name="main_image" accept="image/*" required />

    <label class="form-label" for="category_id">Catégorie</label>
    <select class="form-input" id="category_id" name="category_id">

      <?php foreach ($categories as $category) { ?>
       <option value="<?= $category['id'] ?>"><?= $category['label'] ?></option>
       <?php } ?>

      </select>
       
       <label class="form-label" for="theme_id">Thème</label>
       <select class="form-input" id="theme_id" name="theme_id">

     <?php foreach ($themes as $theme) { ?>
    <option value="<?= $theme['id'] ?>"><?= $theme['label'] ?></option>
  <?php } ?>

  
</select>
      
   <button class="btn btn-primary btn-machine" type="submit">A la machine</button>

  </form>
</div>