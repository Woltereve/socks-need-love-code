<h1 class="page-title">Messages reçus</h1>
<p class="page-sub">Messages envoyés via le formulaire de contact</p>

<div class="table-wrap">
  <table>
    <thead>
      <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Message</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php if (empty($messages)) { ?>
        <tr><td colspan="4" style="text-align:center;">Aucun message reçu.</td></tr>
      <?php } ?>
      <?php foreach ($messages as $message) { ?>
        <tr>
          <td><?= $message['name'] ?></td>
          <td><?= $message['email'] ?></td>
          <td><?= $message['content'] ?></td>
          <td><?= $message['date'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>