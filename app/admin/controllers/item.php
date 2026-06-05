<?php
require __DIR__ . '/../models/item.php';

function item_new($pdo) {
    $materials = get_all_materials($pdo);
    $themes = get_all_themes($pdo);
    $sizes = get_all_sizes($pdo);

    return render (__DIR__ . '/../views/item-new.php',[
    'materials' => $materials ,
    'themes' => $themes,
    'sizes' => $sizes
    ]);

}

function item_edit ($pdo,$slug){
   
    $materials = get_all_materials($pdo);
    $item = get_one_item($pdo,$slug);
    $themes = get_all_theme($pdo);
    
    return render ( __DIR__. '/../views/item-edit.php',[
    'item' =>$item,
    'materials' => $materials,
    'themes' => $themes   ]);
    }
  
function item_create($pdo) {
    $label       = $_POST['label'];
    $description = $_POST['description'];
    $color       = $_POST['color'];
    $size        = $_POST['size_id'];
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
    insert_item($pdo, $label, $description, $slug, $color, $size, $material_id, $side, $personality, $looking_for, $red_flag, $main_image);
    redirect('/admin/item');
}

