<?php 
include 'top.php'; 
require "pdo.php";
?>

<main>
  <div class="sock-grid">
    <article class="sock-card">
     <div class="sock-photo">
       <img src="asset/images-SM/chien_noel-sm.webp" alt="chaussette rose et chien de noël" />
      </div>
      <div class="sock-info">

      <h2>Rose et chien de noël</h2>
      <p class="sock-age">Célibataire depuis 67 lavages</p>
      <p class="sock-bio">Rescapée d’un essorage trop brutal.</p>
      <ul class="sock-tags">
        <li><a href="catalogue.php?tag=droit" class="tag">droit</a></li>
        <li><a href="catalogue.php?tag=noir" class="tag">noir</a></li>
        <li><a href="catalogue.php?tag=polyester" class="tag">polyester</a></li>
        <li> <a href="catalogue.php?tag=23" class="tag">Taille 23</a></li>
        <li><a href="detail.php"  class="nav-link">Voir la fiche</a></li>
      </ul>
      <p class="origine">🏷️ Reçue d'un amour de vacance</p>
      <p class="profil">🔍 Une relation durable (ou au moins jusqu’au prochain trou)</p>
      <p class="status">💔 Célibataire</p>
      
    <button class="match-btn">❤️ Montrer de l’intérêt</button>
    <button class="match-btn">❤️ Matcher</button>
    <a href="contact.php" class="nav-link">Contact</a>
  </div>
</article>
</div>
</main>
<?php include 'bottom.php'; ?>