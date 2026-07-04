<?php
function inscription_index($pdo) {
    return render(__DIR__ . '/../views/inscription.php', []);
}

function inscription_save($pdo) {
    $pseudo              = $_POST['pseudo'];
    $date_naissance      = $_POST['Date'];
    $email               = $_POST['email'];
    $password            = $_POST['password'];
    $password_confirm    = $_POST['password_confirm'];

    if ($password !== $password_confirm) {
        redirect('/inscription?error=password');
        return;
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare('INSERT INTO operator (pseudo, date_naissance, email, password, is_active, is_admin) VALUES (:pseudo, :date_naissance, :email, :password, 1, 0)');
    $stmt->execute([
        ':pseudo' => $pseudo,
        ':date_naissance' => $date_naissance,
        ':email' => $email,
        ':password' => $hash,
    ]);

    redirect('/catalogue');
}