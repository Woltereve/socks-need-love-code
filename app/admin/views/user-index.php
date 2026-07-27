<h1 class="page-title">Gestion des utilisateurs</h1>
          <p class="page-sub">Liste de tous les membres inscrits</p>
       

      
      <!-- <div class="filters">
        <div class="search-wrap">
          <span class="search-icon">⌕</span>
          <input class="search-input" type="text" name="recherche" placeholder="Rechercher par nom ou email…" />
        </div>
        <select class="filter-select" name="statut">
          <option value="">Tous les statuts</option>
          <option value="actif">Actif</option>
          <option value="bloque">Bloqué</option>
          <option value="attente">En attente</option>
        </select>
        <select class="filter-select" name="role">
          <option value="">Tous les rôles</option>
          <option value="membre">Membre</option>
          <option value="admin">Admin</option>
        </select>
        <button class="btn btn-ghost" type="submit">Filtrer</button>
      </div> -->

 
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Nom</th>
              <th>Email</th>
              <th>Statut</th>
              <th>Rôle</th>
              <th>Inscrit le</th>
              <th>Chaussettes</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
  <?php foreach ($operators as $operator){?>
  <tr>

<td><?= !empty ($operator['pseudo']) ? $operator['pseudo']  : $operator['email'] ?></td>
<td><?= $operator['email'] ?> </td>
<td><?= $operator['is_active'] ? 'Actif' : 'désactivé'?> </td>
<td><?= $operator['is_admin'] ? 'Admin' : 'membre'?> </td>
<td><?= $operator['last_login'] ?? '—'  ?> </td>
<td>—</td>
 <td>—</td>
</tr>
<?php } ?>



</tbody>
          
        </table>
      </div>

  
  