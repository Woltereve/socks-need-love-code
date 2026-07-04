<?php
require __DIR__ . '/../../models/catalogue.php';
require __DIR__ . '/../models/connection.php';

function dashboard_index($pdo) {
    $items = get_all_items($pdo);
    $nb_items = count($items);
  
    $operators = get_all_operators ($pdo);
    $nb_operator = count($operators);

    return render(__DIR__ . '/../views/dashboard.php', [
        'nb_items'    => $nb_items,
        'nb_operator' => $nb_operator,
        'operators'   => $operators
    ]);
}