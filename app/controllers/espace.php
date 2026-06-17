<?php
require __DIR__ . '/../models/collection.php';

function espace_index($pdo) {
    $creator_id = $_SESSION['operator_id'];
    $collection = get_collection($pdo, $creator_id);

    if (!empty($collection)) {
        $items = get_collection_items($pdo, $collection['id']);
    } else {
        $items = [];
    }

    return render(__DIR__ . '/../views/espace.php', [
        'items' => $items
    ]);
}






