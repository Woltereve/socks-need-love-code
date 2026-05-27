<div class="form-container">
  <h1>Inscription </h1>

  <form action="login-check.php" method="POST">
  <label class="form-label" for="pseudo">pseudo</label>
    <input class="form-input" type="text" id="pseudo" name="pseudo" placeholder="Choisissez un pseudo" required />

  <label class="form-label" for="Date">Date de naissance</label>
    <input class="form-input" type="Date" id="Date" name="Date" required />

  <label class="form-label" for="email">Email</label>
    <input class="form-input" type="email" id="email" name="email" placeholder="votre@email.com" required />

  <label class="form-label" for="password">Mot de passe</label>
    <input class="form-input" type="password" id="password" name="password" placeholder="••••••••" required />

  <label class="form-label" for="password">Confirmez votre mot de passe</label>
    <input class="form-input" type="password" id="password_confirm" name="password_confirm" placeholder="••••••••" required />
    <button class="btn btn-primary" type="submit">S'inscrire'</button>
  </form>
</div>