<div class="compte-container">
  <h1>Mes messages</h1>

  <?php if (empty($conversations)) { ?>
    <p>Tu n'as aucune conversation pour le moment.</p>
  <?php } ?>

  <?php foreach ($conversations as $conv) { ?>
  <div class="compte-card">
        <h3>🧦 <?= $conv['item_label'] ?></h3>
      <a href="/message/conversation?item_id=<?= $conv['item_id'] ?>&with=<?= $conv['sender_id'] == $user_id ? $conv['receiver_id'] : $conv['sender_id'] ?>" class="lien_couleur">
        Voir la conversation
      </a>
    </div>
  <?php } ?>
</div>