<?php
function insert_item($pdo, $label, $description, $slug, $color, $size, $material_id, $state_id, $side, $personality, $looking_for, $red_flag, $main_image, $creator_id = null) {
    $stmt = $pdo->prepare('
        INSERT INTO item (label, description, slug, color, size, material_id, state_id, side, personality, looking_for, red_flag, main_image, statut, creator_id, created_at, updated_at)
        VALUES (:label, :description, :slug, :color, :size, :material_id, :state_id, :side, :personality, :looking_for, :red_flag, :main_image, 1, :creator_id, NOW(), NOW())
    ');
    $stmt->execute([
        ':label'       => $label,
        ':description' => $description,
        ':slug'        => $slug,
        ':color'       => $color,
        ':size'        => $size,
        ':material_id' => $material_id,
        ':state_id'    => $state_id,
        ':side'        => $side,
        ':personality' => $personality,
        ':looking_for' => $looking_for,
        ':red_flag'    => $red_flag,
        ':main_image'  => $main_image,
        ':creator_id'  => $creator_id,
    ]);
}

function get_all_sizes($pdo) {
    $stmt = $pdo->query('SELECT * FROM size');
    return $stmt->fetchAll();
}
function get_all_states($pdo) {
    $stmt = $pdo->query('SELECT * FROM state');
    return $stmt->fetchAll();
}
function slugify($text) {
    // minuscules
    $text = strtolower($text);
    // remplace les espaces par des tirets
    $text = str_replace(' ', '-', $text);
    // enlève les caractères spéciaux
    $text = preg_replace('/[^a-z0-9-]/', '', $text);
    return $text;
}
function get_all_materials($pdo) {
    $stmt = $pdo->query('SELECT * FROM material');
    return $stmt->fetchAll();
}
function get_all_themes($pdo) {
    $stmt = $pdo->query('SELECT * FROM theme');
    return $stmt->fetchAll();
}
function delete_item($pdo, $id) {
    $stmt = $pdo->prepare('UPDATE item SET statut = 0 WHERE id = :id');
    $stmt->execute([':id' => $id]);
}