<?php include 'top.php'; ?>
<link rel="stylesheet" href="contact.css">
<main>
  <h1>Contact</h1>

  <div class="form-container">
    <form action="contact-send.php" method="POST">

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
</main>

<?php include 'bottom.php'; ?>