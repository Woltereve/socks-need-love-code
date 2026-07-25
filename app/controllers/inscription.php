<?php
function inscription_index($pdo) {
    $error = $_GET['error'] ?? '';
    $message = '';
    if ($error === 'pseudo') {
        $message = 'Le pseudo est obligatoire.';
    }
    if ($error === 'password') {
        $message = 'Les mots de passe ne correspondent pas.';
    }
    return render(__DIR__ . '/../views/inscription.php', ['error' => $message]);
}

function inscription_save($pdo) {
    $pseudo              = $_POST['pseudo'];
    $date_naissance      = $_POST['Date'];
    $email               = $_POST['email'];
    $password            = $_POST['password'];
    $password_confirm    = $_POST['password_confirm'];
    if (empty($pseudo)) {
    redirect('/inscription?error=pseudo');
    return;
}

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