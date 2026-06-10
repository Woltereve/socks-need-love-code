<h1 class="page-title">Paramètres</h1>
      <p class="page-sub" >Configuration générale de la plateforme</p>

      <form action="/admin/parametre/save" method="POST">

        
        <section class="panel">
          <h2 class="panel-title">Informations du site</h2>

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
            <input class="form-input" type="email" id="email_contact" name="email_contact" placeholder="socksneedlove@outlook.com" />
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
        </section>

       
        <section class="panel">
          <h2 class="panel-title">Inscriptions</h2>

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
        </section>

        
        <section class="panel">
          <h2 class="panel-title">Modération des chaussettes</h2>

          <div class="form-group">
            <label class="form-label" for="moderation_chaussettes">Publication des chaussettes</label>
            <select class="form-select" id="moderation_chaussettes" name="moderation_chaussettes">
              <option value="0">Libre — publication immédiate sans validation</option>
              <option value="1">Modérée — chaque chaussette doit être validée par l'admin</option>
            </select>
          </div>
        </section>
      </form>
    