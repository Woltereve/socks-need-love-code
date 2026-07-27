<div class="form-container">
  <h1>Mon profil</h1>

  <?php if (!empty($success)) { ?>
    <p class="info-msg"><?= $success ?></p>
  <?php } ?>

  <?php if (!empty($error)) { ?>
    <p class="error-msg"><?= $error ?></p>
  <?php } ?>

  <form action="/profil_client/save" method="POST">

    <label class="form-label" for="pseudo">Pseudo</label>
    <input class="form-input" type="text" id="pseudo" name="pseudo" value="<?= $operator['pseudo'] ?? '' ?>" required />

    <label class="form-label" for="email">Email</label>
    <input class="form-input" type="email" id="email" name="email" value="<?= $operator['email'] ?? '' ?>" required />

    <label class="form-label" for="password">Nouveau mot de passe <small>(laisser vide pour ne pas changer)</small></label>
    <input class="form-input" type="password" id="password" name="password" placeholder="••••••••" />

    <label class="form-label" for="password_confirm">Confirmer le mot de passe</label>
    <input class="form-input" type="password" id="password_confirm" name="password_confirm" placeholder="••••••••" />

    <button class="btn btn-primary" type="submit">Sauvegarder</button>
  </form>
</div>