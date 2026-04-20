<? include "../pdo.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin — Paramètres · Socks Need Love</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=Lato:wght@300;400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="admin.css" />
</head>
<body>

  <div class="topbar">
    <div class="logo">
      <div class="logo-dot"></div>
      Socks Need Love
      <span class="admin-tag">— admin</span>
    </div>
    <div class="topbar-right">
      <span>Administrateur</span>
      <div class="avatar">A</div>
    </div>
  </div>

  <div class="layout">

    <?php $page = 'parametres'; include 'sidebar.php'; ?>

    <main class="content">

      <div class="page-title">Paramètres</div>
      <div class="page-sub" style="margin-bottom:32px;">Configuration générale de la plateforme</div>

      <form action="admin-parametres-save.php" method="POST">

        <!-- Infos du site -->
        <div class="panel">
          <div class="panel-title">Informations du site</div>

          <div class="form-group">
            <label class="form-label" for="nom_site">Nom du site</label>
            <input class="form-input" type="text" id="nom_site" name="nom_site" placeholder="Socks Need Love" />
          </div>

          <div class="form-group">
            <label class="form-label" for="description_site">Description / slogan</label>
            <input class="form-input" type="text" id="description_site" name="description_site" placeholder="La plateforme où les chaussettes trouvent l'amour…" />
          </div>

          <div class="form-group">
            <label class="form-label" for="email_contact">Email de contact</label>
            <input class="form-input" type="email" id="email_contact" name="email_contact" placeholder="contact@sockneedlove.be" />
          </div>

          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="lien_instagram">Instagram</label>
              <input class="form-input" type="url" id="lien_instagram" name="lien_instagram" placeholder="https://instagram.com/…" />
            </div>
            <div class="form-group">
              <label class="form-label" for="lien_facebook">Facebook</label>
              <input class="form-input" type="url" id="lien_facebook" name="lien_facebook" placeholder="https://facebook.com/…" />
            </div>
          </div>
        </div>

        <!-- Inscriptions -->
        <div class="panel">
          <div class="panel-title">Inscriptions</div>

          <div class="form-group">
            <label class="form-label" for="inscriptions_ouvertes">Statut des inscriptions</label>
            <select class="form-select" id="inscriptions_ouvertes" name="inscriptions_ouvertes">
              <option value="1">Ouvertes — tout le monde peut s'inscrire</option>
              <option value="0">Fermées — aucune nouvelle inscription</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="validation_email">Validation par email</label>
            <select class="form-select" id="validation_email" name="validation_email">
              <option value="1">Activée — l'utilisateur doit confirmer son email</option>
              <option value="0">Désactivée — inscription immédiate</option>
            </select>
          </div>
        </div>

        <!-- Modération -->
        <div class="panel">
          <div class="panel-title">Modération des chaussettes</div>

          <div class="form-group">
            <label class="form-label" for="moderation_chaussettes">Publication des chaussettes</label>
            <select class="form-select" id="moderation_chaussettes" name="moderation_chaussettes">
              <option value="0">Libre — publication immédiate sans validation</option>
              <option value="1">Modérée — chaque chaussette doit être validée par l'admin</option>
            </select>
          </div>
        </div>

        <!-- Échanges -->
        <div class="panel">
          <div class="panel-title">Fonctionnalité d'échanges</div>

          <div class="form-group">
            <label class="form-label" for="echanges_actifs">Statut des échanges</label>
            <select class="form-select" id="echanges_actifs" name="echanges_actifs">
              <option value="1">Activés — les utilisateurs peuvent proposer des échanges</option>
              <option value="0">Désactivés — fonctionnalité masquée sur le site</option>
            </select>
          </div>
        </div>

        <!-- Maintenance -->
        <div class="panel">
          <div class="panel-title">Mode maintenance</div>

          <div class="form-group">
            <label class="form-label" for="maintenance">État du site</label>
            <select class="form-select" id="maintenance" name="maintenance">
              <option value="0">En ligne — site accessible normalement</option>
              <option value="1">Maintenance — site inaccessible aux visiteurs</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label" for="message_maintenance">Message affiché pendant la maintenance</label>
            <textarea class="form-textarea" id="message_maintenance" name="message_maintenance" placeholder="Nous revenons très vite, nos chaussettes sont en cours de tri…"></textarea>
          </div>
        </div>

        <div style="display:flex; gap:12px;">
          <button class="btn btn-primary" type="submit">Enregistrer les paramètres</button>
          <a href="admin-dashboard.php" class="btn btn-ghost">Annuler</a>
        </div>

      </form>

    </main>
  </div>

</body>
</html>