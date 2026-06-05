<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Admin · Socks Need Love</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=Lato:wght@300;400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/app/admin/views/admin.css" />
 
</head>
<body>

  <?php include __DIR__ . '/topbar.php'; ?>

  <div class="layout">
    <?php include __DIR__ . '/sidebar.php'; ?>
    <main class="content">
      <?= $page_content; ?>
    </main>
  </div>

</body>
</html>