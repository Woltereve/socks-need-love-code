<?php
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?><div class="page-header">
        <div>
          <h1 class="page-title">Gestion des chaussettes</h1>
          <p class="page-sub">Catalogue complet de la plateforme</p>
          <a href="/admin/item/new" class="btn btn-primary">+ Ajouter</a>
</div>
</div>
        <!-- <div class="filters">
  <div class="search-wrap">
    <span class="search-icon">⌕</span>
    <input class="search-input" type="text" name="recherche" placeholder="Rechercher une chaussette…" />
  </div>
        <select class="filter-select" name="categorie">
          <option value="">Toutes les catégories</option>
         
        </select>
        <select class="filter-select" name="statut">
          <option value="">Tous les statuts</option>
          <option value="disponible">Disponible</option>
          <option value="en_match">En match</option>
          <option value="retiree">Retirée</option>
        </select>
        <button class="btn btn-ghost" type="submit">Filtrer</button>
      </div> -->

      
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Photo</th>
              <th>Nom / surnom</th>
              <th>Catégorie</th>
              <th>Taille</th>
              <th>Coté</th>
              <th>Ajoutée le</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
  <?php foreach ($items as $item){?>
  <tr>
    <td><img src="/<?= $item ['main_image'] ?>" class="thumb"/></td>
    <td><?=$item['label'] ?></td>

<td>
  <?php foreach ($materials as $material) {
    if ($material['id'] == $item['material_id']) {
      echo $material['label'];
      }
      } ?>
</td>

<td>
  <?php foreach ($sizes as $size) {
    if ($size['id'] == $item['size']) {
      echo $size['label'];
      }
      } ?>
      <td><?= $item['side'] ?></td>
</td>
<td><?= $item['created_at'] ?></td>

 
    
  
  <td><a href="/admin/item/edit/<?= $item['slug'] ?>" class="btn-sm">Modifier</a>
</td>
<td><form action="/admin/item/delete/<?= $item['id'] ?>" method="POST" style="display:inline;">
    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
    <button type="submit" class="btn-sm danger" onclick="return confirm('Supprimer cette chaussette ?')">Supprimer</button>
</form>
</td>


</tr>
<?php } ?>



</tbody>


        </table>
      </div>

  