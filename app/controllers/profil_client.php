<?php
require __DIR__ . '/../models/connection.php';

function profil_client_index($pdo) {
    if (empty($_SESSION['operator_id'])) {
        redirect('/connection');
        return;
    }
    $operator = get_operator_by_email($pdo, $_SESSION['operator_email']);
    return render(__DIR__ . '/../views/profil_client.php', [
        'operator' => $operator
    ]);
}

function profil_client_save($pdo) {
    if (empty($_SESSION['operator_id'])) {
        redirect('/connection');
        return;
    }

    $pseudo = $_POST['pseudo'];
    $email  = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if (empty($pseudo)) {
        return render(__DIR__ . '/../views/profil_client.php', ['error' => 'Le pseudo est obligatoire.', 'operator' => ['pseudo' => $pseudo, 'email' => $email]]);
    }

    if (!empty($password) && $password !== $password_confirm) {
        return render(__DIR__ . '/../views/profil_client.php', ['error' => 'Les mots de passe ne correspondent pas.', 'operator' => ['pseudo' => $pseudo, 'email' => $email]]);
    }

    if (!empty($password)) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare('UPDATE operator SET pseudo = :pseudo, email = :email, password = :password WHERE id = :id');
        $stmt->execute([':pseudo' => $pseudo, ':email' => $email, ':password' => $hash, ':id' => $_SESSION['operator_id']]);
    } else {
        $stmt = $pdo->prepare('UPDATE operator SET pseudo = :pseudo, email = :email WHERE id = :id');
        $stmt->execute([':pseudo' => $pseudo, ':email' => $email, ':id' => $_SESSION['operator_id']]);
    }

    $_SESSION['operator_email'] = $email;

    $operator = get_operator_by_email($pdo, $email);
    return render(__DIR__ . '/../views/profil_client.php', [
        'success'  => 'Profil mis à jour !',
        'operator' => $operator
    ]);
}