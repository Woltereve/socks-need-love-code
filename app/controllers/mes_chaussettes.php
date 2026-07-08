<?php
require __DIR__ . '/../models/item.php';

function mes_chaussettes_index($pdo) {
    if (empty($_SESSION['operator_id'])) {
        redirect('/connection');
        return;
    }
    $creator_id = $_SESSION['operator_id'];
    $stmt = $pdo->prepare('SELECT * FROM item WHERE creator_id = :creator_id AND statut = 1');
    $stmt->execute([':creator_id' => $creator_id]);
    $items = $stmt->fetchAll();

    return render(__DIR__ . '/../views/mes_chaussettes.php', [
        'items' => $items
    ]);
}