<?php include 'top.php'; ?>

<main>
  <h1>Connexion</h1>

  <form action="login-check.php" method="POST">

    <label class="form-label" for="email">Email</label>
    <input class="form-input" type="email" id="email" name="email" placeholder="votre@email.com" required />

    <label class="form-label" for="password">Mot de passe</label>
    <input class="form-input" type="password" id="password" name="password" placeholder="••••••••" required />

    <button class="btn btn-primary" type="submit">Se connecter</button>

    <a href="inscription.php">Pas encore de compte ? S'inscrire</a>

  </form>
</main>

<?php include 'bottom.php'; ?>