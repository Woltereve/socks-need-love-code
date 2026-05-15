<?php include 'top.php'; ?>

    
<div class="form-container">
    <form action="modifier_profil.php" method="post" enctype="multipart/form-data"> 

       
      <label class="form-label" for="nom">Nom</label>
      <input class="form-input" type="text" id="nom" name="nom" placeholder="Votre nom…" required />

      <label class="form-label" for="prenom">Prénom</label>
      <input class="form-input" type="text" id="prenom" name="prenom" placeholder="Votre prénom…" required />

      <label class="form-label" for="naissance">Date de naissance</label>
      <input class="form-input" type="date" id="naissance" name="naissance"  required />

      <label class="form-label" for="email">Email</label>
      <input class="form-input" type="email" id="email" name="email" placeholder="votre@email.com" required />

      <label class="form-label" for="Bio">Ma Bio</label>
      <textarea class="form-textarea" id="Bio" name="Bio" placeholder="Exprimez vos sentiments textiles…" required></textarea>

      <button class="btn btn-primary" type="submit">Enregistrer</button>
      
    </form>
    
  </div>
</main>

<?php include 'bottom.php'; ?>