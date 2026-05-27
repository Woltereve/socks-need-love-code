<?php
require __DIR__.'/../models/catalogue.php';

function catalogue_index($pdo) {
    $data = [];
    $data['items'] = get_all_items($pdo);
    return render(__DIR__ . '/../views/catalogue.php', $data);
}

function catalogue_show($pdo, $slug) {
    $data = [];
    $data['item'] = get_one_item($pdo, $slug);
    return render(__DIR__ . '/../views/item.php', $data);
}

