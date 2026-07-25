
<?php
require __DIR__ . '/../models/item.php';

function item_add($pdo) {
    $materials  = get_all_materials($pdo);
    $themes     = get_all_themes($pdo);
    $states     = get_all_states($pdo);
    $sizes      = get_all_sizes($pdo);
    return render(__DIR__ . '/../views/item-add.php', [
        'materials' => $materials,
        'themes'    => $themes,
        'states'    => $states,
        'sizes'     => $sizes,
    ]);
    
}
function item_create($pdo) {
    $creator_id   = $_SESSION['operator_id'];
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
    $theme_id    = $_POST['theme_id'] ?? NULL;
        
    $main_image = '';
    if (isset($_FILES['main_image']) && $_FILES['main_image']['error'] === 0) {
        $ext      = pathinfo($_FILES['main_image']['name'], PATHINFO_EXTENSION);
        $filename = $slug . '.' . $ext;
        $dest     = __DIR__ . '/../../asset/images-SM/' . $filename;
        
        move_uploaded_file($_FILES['main_image']['tmp_name'], $dest);
        $main_image = 'asset/images-SM/' . $filename;
    }

    insert_item($pdo, $label, $description, $slug, $color, $size, $material_id,$state_id, $side, $personality, $looking_for, $red_flag, $main_image,$creator_id, $theme_id);
    redirect('/catalogue?success=1');
}
function item_delete($pdo, $id) {
    if (empty($_SESSION['operator_id'])) {
        redirect('/connection');
        return;
    }
    delete_item($pdo, $id);
    redirect('/mes_chaussettes');
}