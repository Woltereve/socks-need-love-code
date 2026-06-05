<?php
require __DIR__ . '/../models/item.php';

function item_add($pdo) {
    $categories = get_all_materials($pdo);
    $themes     = get_all_themes($pdo);
    return render(__DIR__ . '/../views/item-add.php', [
        'categories' => $categories,
        'themes'     => $themes
    ]);
}
function item_create($pdo) {
    $label       = $_POST['label'];
    $description = $_POST['description'];
    $color       = $_POST['color'];
    $size        = $_POST['size'];
    $material_id = $_POST['material_id'];
    $side        = $_POST['side'];
    $personality = $_POST['personality'];
    $looking_for = $_POST['looking_for'];
    $red_flag    = $_POST['red_flag'];
    $slug        = slugify($label);
        
    $main_image = '';
    if (isset($_FILES['main_image']) && $_FILES['main_image']['error'] === 0) {
        $ext      = pathinfo($_FILES['main_image']['name'], PATHINFO_EXTENSION);
        $filename = $slug . '.' . $ext;
        $dest     = __DIR__ . '/../../asset/images-SM/' . $filename;
        
        move_uploaded_file($_FILES['main_image']['tmp_name'], $dest);
        $main_image = 'asset/images-SM/' . $filename;
    }

    insert_item($pdo, $label, $description, $slug, $color, $size, $material, $side, $personality, $looking_for, $red_flag, $category_id, $main_image);
    redirect('/catalogue');
}
