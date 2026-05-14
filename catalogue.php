<?php 
include 'top.php'; 
require "pdo.php";
?>

<main>
  <article class="sock-card">
    <img src="asset/images-SM/chien_noel-sm.webp" alt="chaussette rose et chien de noël" />

    <h2>Rose et chien de noël</h2>
    <p class="sock-age">Célibataire depuis 67 lavages</p>

    <ul class="sock-tags">
      <a href="catalogue.php?tag=droit" class="tag">droit</a>
      <a href="catalogue.php?tag=noir" class="tag">noir</a>
      <a href="catalogue.php?tag=polyester" class="tag">polyester</a>
      <a href="catalogue.php?tag=23" class="tag">Taille 23</a>
      <a href="detail.php"  class="nav-link">Voir la fiche</a>
    </ul>
  </article>
</main>

<?php include 'bottom.php'; ?>