<?php
function insert_item($pdo, $label, $description, $slug, $color, $size, $material, $side, $personality, $looking_for, $red_flag, $category_id, $main_image) {
    $stmt = $pdo->prepare('
        INSERT INTO item (label, description, slug, color, size, material, side, personality, looking_for, red_flag, category_id, main_image, statut, created_at, updated_at)
VALUES (:label, :description, :slug, :color, :size, :material, :side, :personality, :looking_for, :red_flag, :category_id, :main_image, 1, NOW(), NOW())
    ');
    $stmt->execute([
        ':label'       => $label,
        ':description' => $description,
        ':slug'        => $slug,
        ':color'       => $color,
        ':size'        => $size,
        ':material'    => $material,
        ':side'        => $side,
        ':personality' => $personality,
        ':looking_for' => $looking_for,
        ':red_flag'    => $red_flag,
        ':category_id' => $category_id,
        ':main_image' => $main_image,
    ]);
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