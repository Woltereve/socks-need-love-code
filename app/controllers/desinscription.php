<?php
require __DIR__ . '/../models/desinscription.php';

function desinscription_index($pdo) {
    if (empty($_SESSION['operator_id'])) {
        redirect('/connection');
        return;
    }
    return render(__DIR__ . '/../views/desinscription.php', []);
}

function desinscription_confirm($pdo) {
    if (empty($_SESSION['operator_id'])) {
        redirect('/connection');
        return;
    }
    $operator_id = $_SESSION['operator_id'];
    deactivate_operator_items($pdo, $operator_id);
    deactivate_operator($pdo, $operator_id);
    session_destroy();
    redirect('/?message=desinscription');
}