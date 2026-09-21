<?php if (isset($_GET['match']) && $_GET['match'] == 1) { ?>
    <p class="info-msg">🎉 C'est un match ! Contactez-vous !</p>
<?php } ?>
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
            <?php foreach ($sizes as $size) { if ($size['id'] == $item['size']) { ?>
                <a href="/catalogue?size=<?= $size['id'] ?>" class="tag"><?= $size['label'] ?></a>
            <?php } } ?>
            <?php foreach ($materials as $material) { if ($material['id'] == $item['material_id']) { ?>
                <a href="/catalogue?material_id=<?= $material['id'] ?>" class="tag"><?= $material['label'] ?></a>
            <?php } } ?>
            <a href="/catalogue?side=<?= $item['side'] ?>" class="tag"><?= $item['side'] ?></a>
        </div>

        <p class="sock-bio">📖 Son histoire<br><?= $item['content'] ?></p>
        <p class="profil">💕 Ce qu'elle recherche<br><?= $item['looking_for'] ?></p>
        <p class="sock-bio">🧬 Personnalité<br><?= $item['personality'] ?></p>
        <p class="sock-bio">❌ Red flags<br><?= $item['red_flag'] ?></p>

        <a href="/catalogue" class="nav-link">← Vers catalogue</a>

        <?php if (!empty($item['creator_id']) && $item['creator_id'] != ($_SESSION['operator_id'] ?? null)) { ?>
            <a href="/message/conversation?item_id=<?= $item['id'] ?>&with=<?= $item['creator_id'] ?>" class="nav-link">→ Contacter</a>
        <?php } ?>

        <?php if ($is_matched) { ?>
            <form action="/collection/remove" method="POST">
                <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
                <button class="match-btn" type="submit" title="Retirer de ta collection">🧺 A-dja-mi</button>
            </form>
        <?php } else { ?>
            <form action="/collection/match" method="POST">
                <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
                <button class="match-btn" type="submit" title="Ajouter à ta collection">❤️ Pa-dja-mi</button>
            </form>
        <?php } ?>
        
<?php if (!empty ($my_items) && $item ['creator_id'] != ($_SESSION['operatir_id'] ?? null) {
    <form action="/sock-like/add" method="POST">
    <input type="hidden" name="liked_item_id" value="<?= $item['id] ?>">
    <input type="hidden" name="liked_slug" value="<? $item['slug'] ?>">
    <?php if (!empty ($_GET["liker_item_id"])) { ?>
    <input type="hidden" name="liker_item_id" value="<?=$_GET['liker_item_id'] ?>">
    <button class="match-btn" type="submit">💘 Like en retour!</button>
    <?php} else {?>
    <select name="liker_item_id" class="form-input">
    <?php foreach ($my_items as $my_item) {?>
    <option value="<? $my_item['id'] ?>"><?= $my_item['label'] ?></option>
    <?php } ?>
    </select>
    <button class="match" type="submit"> 💘 Like !</button>
    <?php } ?>
    </form>
    <?php }n
    
    
    
    
    }
}




e)




       
    </form>
<?php } ?>

    </div>

  </article>
</div>