<?php
require __DIR__ . '/../models/item.php';

function item_new($pdo) {
    $materials = get_all_materials($pdo);
    $themes = get_all_themes($pdo);
    $sizes = get_all_sizes($pdo);
    $states = get_all_states ($pdo);

    return render (__DIR__ . '/../views/item-alter.php',[
    'materials' => $materials ,
    'themes' => $themes,
    'sizes' => $sizes,
    'states'=> $states,
    ]);

}

function item_edit ($pdo,$slug){
   
    $materials = get_all_materials($pdo);
    $item = get_one_item($pdo,$slug);
    $themes = get_all_themes($pdo);
    $sizes = get_all_sizes($pdo);
     $states = get_all_states ($pdo);
    
    return render ( __DIR__. '/../views/item-alter.php',[
    'item' =>$item,
    'materials' => $materials,
    'themes' => $themes,
    'sizes' => $sizes ,
     'states'=> $states,  ]);
}
function item_gestion($pdo) {
    $items = get_all_items($pdo);
    $materials = get_all_materials ($pdo);
    $sizes = get_all_sizes ($pdo);
    return render(__DIR__ . '/../views/admin-gestion.php', [
        'items' => $items,
        'materials' => $materials,
        'sizes' => $sizes
        
    ]);
}
  

function item_save($pdo) {
    $label       = $_POST['label'];
    $description = $_POST['description'];
    $color       = $_POST['color'];
    $size        = $_POST['size'];
    $material_id = $_POST['material_id'];
    $side        = $_POST['side'];
    $personality = $_POST['personality'];
    $looking_for = $_POST['looking_for'];
    $red_flag    = $_POST['red_flag'];
    $state_id    = $_POST['state_id'];
    $slug        = slugify($label);
        
    $main_image = '';
    if (isset($_FILES['main_image']) && $_FILES['main_image']['error'] === 0) {
        $ext      = pathinfo($_FILES['main_image']['name'], PATHINFO_EXTENSION);
        $filename = $slug . '.' . $ext;
       $dest = __DIR__ . '/../../../asset/images-SM/' . $filename;
        
        move_uploaded_file($_FILES['main_image']['tmp_name'], $dest);
        $main_image = 'asset/images-SM/' . $filename;
    }

    if(empty($_POST['id'])){
        insert_item($pdo, $label, $description, $slug, $color, $size, $material_id,$state_id, $side, $personality, $looking_for, $red_flag, $main_image);
    }
    else{
        update_item($pdo, $_POST['id'], $label, $description, $slug, $color, $size, $material_id,$state_id, $side, $personality, $looking_for, $red_flag, $main_image);
    }
    
    redirect('/admin/item/edit/'.$slug.'?success=1');
}

