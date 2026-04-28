<?php include 'top.php'; ?>
<link rel="stylesheet" href="inscription.css" />
<main>
     
  <h1>Nouvelle chaussette</h1>

  <form action="login-check.php" method="POST">
<label class="form-label" for="text">Catégorie</label>
<input class="form-input" type="text" id="categorie" name="categorie" placeholder="Choisissez une categorie" required />


<label class="form-label" for="text">Couleur</label>
    <input class="form-input" type="text" id="Couleur" name="Couleur" placeholder= "vert à petits pois " required />


    <label class="form-label" for="text">Pointure</label>
    <input class="form-input" type="text" id="pointure" name="pointure" placeholder="Pointure 36" required />


    <label class="form-label" for="text">Matière </label>
    <input class="form-input" type="text" id="Matière" name="Matière" placeholder="Coton Bio" required />
 
    <label class="form-label" for="message">Message</label>
    <textarea class="form-textarea" id="message" name="message" placeholder="Décrivez la vie de votre chaussette" required></textarea>


    <label class="nav-link" for="text">image </label>
    <input class="file" type="file" id="image" name="image"  required />
  
    <button class="btn btn-primary" type="submit">Laver</button>

   

  </form>
</main>

<?php include 'bottom.php'; ?>