<div class="conversation">
  <?php foreach ($messages as $message) { ?>
    <p><?= $message['content'] ?></p>
  <?php } ?>
</div>
<form action="/message/send" method="POST">
  <input type="hidden" name="receiver_id" value="<?= $user2_id ?>">
  <input type="hidden" name="item_id" value="<?= $item_id ?>">
  <textarea name="content" placeholder="Écris ton message…" required></textarea>
  <button class="btn btn-ghost" type="submit">Envoyer</button>
</form>