<h1 class="page-title" style="text-align:center;">Ma collection</h1>

<div class="sock-grid">

  <?php if (empty($items)) { ?>
    <p style="text-align:center;">Tu n'as encore aucune chaussette dans ta collection.</p>
  <?php } ?>

  <?php foreach ($items as $item) { ?>
    <article class="sock-card">
      <div class="sock-photo">
        <img src="/<?= str_replace('\\', '/', $item['main_image']) ?>" alt="<?= $item['label'] ?>" />
      </div>
      <div class="sock-info">
        <h2><?= $item['label'] ?></h2>
        <p class="sock-bio"><?= $item['description'] ?></p>
        <a href="/catalogue/show/<?= $item['slug'] ?>" class="nav-link">Voir la fiche</a>
      </div>
    </article>
  <?php } ?>

</div>