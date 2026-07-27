<h1 class="page-title">Tableau de bord</h1>
<p class="page-sub">Vue d'ensemble de la plateforme</p>

<div class="stats-grid">
  <div class="stat-card">
    <div class="stat-label">Utilisateurs</div>
    <div class="stat-value"><?= $nb_operator ?></div>
  </div>
  <div class="stat-card">
    <div class="stat-label">Chaussettes</div>
    <div class="stat-value"><?= $nb_items ?></div>
  </div>
  <div class="stat-card">
    <div class="stat-label">Matchs</div>
    <div class="stat-value">—</div>
  </div>
  <div class="stat-card">
    <div class="stat-label">Échanges</div>
    <div class="stat-value">—</div>
  </div>
</div>

<section class="panel">
  <h2 class="panel-title">Derniers inscrits</h2>
  <table>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($operators as $operator) { ?>
        <tr>
          <td><?= !empty($operator['pseudo']) ? $operator['pseudo'] : $operator['email'] ?></td>
          <td><?= $operator['email'] ?></td>
          <td><?= $operator['last_login'] ?? '—' ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
  <a href="/admin/user" class="btn btn-ghost">Voir tous les utilisateurs</a>
</section>