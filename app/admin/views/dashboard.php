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

      <div class="grid-2">

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
           
          </table>
        <a href="/admin/user" class="btn btn-ghost">Voir tous les utilisateurs</a>
</section>
</section>
       

        <section class="panel">
          <h2 class="panel-title">Activité récente</h2>
          <table>
            <thead>
              <tr>
                <th>Action</th>
                <th>Date</th>
              </tr>
            </thead>
           
          </table>
</section>
 </div>
      

      
      <section class="panel">
        <h2 class="panel-title">Signalements en attente</h2>
        <table>
          <thead>
            <tr>
              <th>Utilisateur signalé</th>
              <th>Motif</th>
              <th>Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          
        </table>
      </section>
