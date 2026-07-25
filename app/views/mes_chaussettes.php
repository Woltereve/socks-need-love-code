<h1 style="text-align:center;">Mes chaussettes</h1>

<div class="table-wrap">
  <table>
    <thead>
      <tr>
        <th>Photo</th>
        <th>Nom</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($items)) { ?>
        <tr><td colspan="3" style="text-align:center;">Tu n'as publié aucune chaussette.</td></tr>
      <?php } ?>
      <?php foreach ($items as $item) { ?>
        <tr>
          <td><img src="/<?= str_replace('\\', '/', $item['main_image']) ?>" class="thumb" /></td>
          <td><?= $item['label'] ?></td>
          <td>
            <a href="/catalogue/show/<?= $item['slug'] ?>" class="btn-sm">Voir</a>
            <a href="/item/delete/<?= $item['id'] ?>" class="btn-sm danger" onclick="return confirm('Supprimer cette chaussette ?')">Supprimer</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>