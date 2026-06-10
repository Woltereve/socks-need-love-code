<div class="form-container">
  <h1>Connexion</h1>

  <?php if (isset($error)) { ?>
   <p class="error-msg"><?= $error ?></p>
  <?php } ?>

  <form action="/connection/check" method="POST">

    <label class="form-label" for="email">Email</label>
    <input class="form-input" type="email" id="email" name="email" placeholder="votre@email.com" required />

    <label class="form-label" for="password">Mot de passe</label>
    <input class="form-input" type="password" id="password" name="password" placeholder="••••••••" required />

     <button class="btn btn-primary" type="submit">Connection</button>