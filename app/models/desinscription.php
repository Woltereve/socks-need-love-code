<?php

function deactivate_operator($pdo, $operator_id) {
    $stmt = $pdo->prepare('UPDATE operator SET is_active = 0 WHERE id = :id');
    $stmt->execute([':id' => $operator_id]);
}

function deactivate_operator_items($pdo, $operator_id) {
    $stmt = $pdo->prepare('UPDATE item SET statut = 0 WHERE creator_id = :creator_id');
    $stmt->execute([':creator_id' => $operator_id]);
}