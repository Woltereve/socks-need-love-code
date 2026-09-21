<?php
require __DIR__.'/../models/catalogue.php';
require __DIR__ . '/../models/item.php';
require __DIR__ . '/../models/collection.php';
function catalogue_show($pdo, $slug) {
    $data = [];
    $data['item'] = get_one_item($pdo, $slug);
    $data['materials'] = get_all_materials($pdo);
    $data['sizes'] = get_all_sizes($pdo);
    

    $creator_id = $_SESSION['operator_id'] ?? null;

   if (!empty($creator_id)) {
    $collection = get_collection($pdo,$creator_id);
    }
    $is_matched = false;
    
    if (!empty($collection)) {
        $is_matched = !empty(is_in_collection($pdo, $collection['id'], $data['item']['id']));
        }
        $data['is_matched'] = $is_matched;
        require __DIR__ . '/../models/sock_like.php';
        $data['my_items'] = !empty($creator_id) ? get_my_items ($pdo, $creator_id) : [];
        return render(__DIR__ . '/../views/item.php', $data);
}

function catalogue_index($pdo) {
    $data = [];
    $q           = $_GET['q'] ?? '';
    $material_id = $_GET['material_id'] ?? '';
    $size        = $_GET['size'] ?? '';
    $color       = $_GET['color'] ?? '';
    $state_id    = $_GET['state_id'] ?? '';

    $data['items']     = search_items($pdo, $q, $material_id, $size, $color, $state_id);
    $data['materials'] = get_all_materials($pdo);
    $data['sizes']     = get_all_sizes($pdo);
    $data['states']    = get_all_states($pdo);
    $data['colors']    = get_all_colors($pdo);

    return render(__DIR__ . '/../views/catalogue.php', $data);
}
