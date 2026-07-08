<?php
require __DIR__ . '/../models/collection.php';

function collection_match($pdo) {
    if (empty($_SESSION['operator_id'])) {
        redirect('/connection?message=matcher');
        return;
    }

    $creator_id = $_SESSION['operator_id'];
    $item_id = $_POST['item_id'];
    $collection = get_collection($pdo, $creator_id);

    if (empty($collection)) {
        create_collection($pdo, $creator_id, 'Mes favoris');
        $collection = get_collection($pdo, $creator_id);
    }

    if (empty(is_in_collection($pdo, $collection['id'], $item_id))) {
        add_to_collection($pdo, $collection['id'], $item_id);
    }

    redirect('/catalogue');
}

function collection_remove($pdo) {
    if (empty($_SESSION['operator_id'])) {
        redirect('/connection');
        return;
    }

    $creator_id = $_SESSION['operator_id'];
    $item_id = $_POST['item_id'];
    $collection = get_collection($pdo, $creator_id);

    if (!empty($collection)) {
        remove_from_collection($pdo, $collection['id'], $item_id);
    }

    redirect('/catalogue');
}