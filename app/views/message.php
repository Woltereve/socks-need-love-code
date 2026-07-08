<div class="compte-container">
  <h1>Mes messages</h1>

  <?php if (empty($conversations)) { ?>
    <p>Tu n'as aucune conversation pour le moment.</p>
  <?php } ?>

  <?php foreach ($conversations as $conv) { ?>
    <div class="compte-card">
      <h3>🧦 <?= ? ?></h3>
      <a href="/message/conversation?item_id=<?= ? ?>&with=<?= ? ?>" class="lien_couleur">
        Voir la conversation
      </a>
    </div>
  <?php } ?>
</div>