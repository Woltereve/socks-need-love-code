<div class="form-container">
  <h1>Contact</h1>

  <?php if (!empty($success)) { ?>
    <p class="info-msg"><?= $success ?></p>
  <?php } ?>

  <form action="/contact/send" method="POST">

    <label class="form-label" for="nom">Nom</label>
    <input class="form-input" type="text" id="nom" name="nom" placeholder="Votre nom…" required />

    <label class="form-label" for="prenom">Prénom</label>
    <input class="form-input" type="text" id="prenom" name="prenom" placeholder="Votre prénom…" required />

    <label class="form-label" for="email">Email</label>
    <input class="form-input" type="email" id="email" name="email" placeholder="votre@email.com" required />

    <label class="form-label" for="message">Message</label>
    <textarea class="form-textarea" id="message" name="message" placeholder="Exprimez vos sentiments textiles…" required></textarea>

    <button class="btn btn-primary" type="submit">Envoyer</button>
  </form>
</div>