<h1>Mes likes reçus</h1>

<?php if (empty($likes)) { ?>
    <p>Personne n'a encore liké tes chaussettes.</p>
<?php } ?>

<?php foreach ($likes as $like) { ?>
<p><?= $like['label'] ?> a liké une de tes chaussettes ! 
<a href="/catalogue/show/<?= $like['slug'] ?>?liker_item_id=<?= $like['liked_item_id'] ?>">Voir sa fiche</a></p>
    
<?php } ?>


