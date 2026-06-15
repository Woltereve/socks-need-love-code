
<form action="/catalogue" method="GET" class="filters">
  <div class="search-wrap">
    <span class="search-icon">⌕</span>
    <input class="search-input" type="text" name="q" placeholder="Rechercher une chaussette…" value="<?= $q ?? '' ?>" />
  </div>

  <select class="filter-select" name="material_id">
    <option value="">Toutes les matières</option>
    <?php foreach ($materials as $material) { ?>
      <option value="<?= $material['id'] ?>" <?= ($material_id ?? '') == $material['id'] ? 'selected' : '' ?>>
        <?= $material['label'] ?>
      </option>
    <?php } ?>
  </select>

  <select class="filter-select" name="size">
    <option value="">Toutes les tailles</option>
    <?php foreach ($sizes as $size) { ?>
      <option value="<?= $size['id'] ?>" <?= ($size_filter ?? '') == $size['id'] ? 'selected' : '' ?>>
        <?= $size['label'] ?>
      </option>
    <?php } ?>
  </select>

  <select class="filter-select" name="color">
    <option value="">Toutes les couleurs</option>
    <?php foreach ($colors as $c) { ?>
      <option value="<?= $c['color'] ?>" <?= ($color ?? '') == $c['color'] ? 'selected' : '' ?>>
        <?= $c['color'] ?>
      </option>
    <?php } ?>
  </select>

  <select class="filter-select" name="state_id">
    <option value="">Tous les états</option>
    <?php foreach ($states as $state) { ?>
      <option value="<?= $state['id'] ?>" <?= ($state_id ?? '') == $state['id'] ? 'selected' : '' ?>>
        <?= $state['label'] ?>
      </option>
    <?php } ?>
  </select>

  <button class="btn btn-ghost" type="submit">Filtrer</button>
</form>

<div class="sock-grid">
  <?php foreach ($items as $item) { ?>


<article class="sock-card">
    <div class="sock-photo">
      <img src="<?= $item['main_image'] ?>" alt="<?= $item['label'] ?>" />
    </div>
    <div class="sock-info">
      <h2><?= $item['label'] ?></h2>
      <p class="sock-bio"><?= $item['description'] ?></p>
      <a href="/catalogue/show/<?= $item['slug'] ?>" class="nav-link">Voir la fiche</a>
    </div>
  </article>
<?php } ?>
</div>






