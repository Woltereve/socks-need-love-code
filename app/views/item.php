<div class="sock-detail">
  <article class="sock-card">

    <div class="sock-photo">
        <img src="/<?= str_replace('\\', '/', $item['main_image']) ?>" alt="<?= $item['label'] ?>" />
    </div>

    <div class="sock-info">
        <h2><?= $item['label'] ?></h2>

        <p class="sock-bio"><?= $item['description'] ?></p>

        
        <div class="sock-tags">
    <a href="/catalogue?color=<?= $item['color'] ?>" class="tag"><?= $item['color'] ?></a>
    <a href="/catalogue?size=<?= $item['size'] ?>" class="tag"><?= $item['size'] ?></a>
    <a href="/catalogue?material=<?= $item['material'] ?>" class="tag"><?= $item['material'] ?></a>
    <a href="/catalogue?side=<?= $item['side'] ?>" class="tag"><?= $item['side'] ?></a>
</div>

        <p class="profil">💕 Ce qu'elle recherche<br><?= $item['looking_for'] ?></p>

        <p class="sock-bio">🧬 Personnalité<br><?= $item['personality'] ?></p>

        <p class="sock-bio">❌ Red flags<br><?= $item['red_flag'] ?></p>

        <a href="/catalogue" class="nav-link">← Vers catalogue</a>
    </div>

</article>
  
</div>