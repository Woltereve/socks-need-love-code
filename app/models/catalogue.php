<?php


function get_all_items ($pdo){

 $sql = ' SELECT * FROM item';
 $stmt = $pdo->query($sql);
 return $stmt->fetchAll();
}

function get_one_item($pdo, $slug) {
    $stmt = $pdo->prepare('SELECT * FROM item WHERE slug = :slug');
    $stmt->execute([':slug' => $slug]);
    return $stmt->fetch();
}

function get_all_colors($pdo) {
    $stmt = $pdo->query('SELECT DISTINCT color FROM item ORDER BY color');
    return $stmt->fetchAll();
}
function search_items($pdo, $q, $material_id, $size, $color, $state_id) {
    $sql = "SELECT * FROM item WHERE 1=1";
    $params = [];

    if (!empty($q)) {
       $sql .= " AND (label LIKE :q1 OR slug LIKE :q2)";
        $params[':q1'] = '%' . $q . '%';
        $params[':q2'] = '%' . $q . '%';}
    if (!empty($material_id)) {
        $sql .= " AND material_id = :material_id";
        $params[':material_id'] = $material_id;
    }
    if (!empty($size)) {
        $sql .= " AND size = :size";
        $params[':size'] = $size;
    }
    if (!empty($color)) {
        $sql .= " AND color = :color";
        $params[':color'] = $color;
    }
    if (!empty($state_id)) {
        $sql .= " AND state_id = :state_id";
        $params[':state_id'] = $state_id;
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}

?>