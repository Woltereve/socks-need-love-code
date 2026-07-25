<?php
require __DIR__ . '/../../models/item.php';
require __DIR__ . '/../../models/catalogue.php';
function update_item($pdo, $id, $label, $description, $slug, $color, $size, $material_id,$state_id, $side, $personality, $looking_for, $red_flag, $main_image,$theme_id = NULL) {
    if ($main_image !== '') {
        $stmt = $pdo->prepare('
            UPDATE item SET
                label = :label, description = :description, slug = :slug,
                color = :color, size = :size, material_id = :material_id,
                state_id = :state_id, theme_id = :theme_id,
                side = :side, personality = :personality, looking_for = :looking_for,
                red_flag = :red_flag, main_image = :main_image, updated_at = NOW()
            WHERE id = :id
        ');
        $stmt->execute([
            ':label' => $label, ':description' => $description, ':slug' => $slug,
            ':color' => $color, ':size' => $size, ':material_id' => $material_id,
            ':state_id' => $state_id,':theme_id' => $theme_id,
            ':side' => $side, ':personality' => $personality, ':looking_for' => $looking_for,
            ':red_flag' => $red_flag, ':main_image' => $main_image, ':id' => $id
        ]);
    } else {
        $stmt = $pdo->prepare('
            UPDATE item SET
                label = :label, description = :description, slug = :slug,
                color = :color, size = :size, material_id = :material_id,state_id = :state_id, theme_id = :theme_id,
                side = :side, personality = :personality, looking_for = :looking_for,
                red_flag = :red_flag, updated_at = NOW()
            WHERE id = :id
        ');
        $stmt->execute([
            ':label' => $label, ':description' => $description, ':slug' => $slug,
            ':color' => $color, ':size' => $size, ':material_id' => $material_id,
            ':state_id' => $state_id,
            ':side' => $side, ':personality' => $personality, ':looking_for' => $looking_for,
            ':red_flag' => $red_flag, ':id' => $id , ':theme_id'=>$theme_id
        ]);
    }
}