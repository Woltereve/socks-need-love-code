<?php include "../pdo.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin — Catégories · Socks Need Love</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=Lato:wght@300;400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="admin.css" />
</head>
<body>

  <?php include 'topbar.php'; ?>

  <div class="layout">

    <?php include 'sidebar.php'; ?>

    <main class="content">

      <h1 class="page-title">Catégories de chaussettes</h1>
      <p class="page-sub">Organise le catalogue de la plateforme</p>

      <div class="grid-form">

        <section class="panel">
          <h2 class="panel-title">Nouvelle catégorie</h2>

          <form action="admin-categories-create.php" method="POST">

            <div class="form-group">
              <label class="form-label" for="nom">Nom de la catégorie</label>
              <input class="form-input" type="text" id="nom" name="nom" placeholder="ex : Chaussettes />