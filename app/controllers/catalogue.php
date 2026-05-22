<?php
require __DIR__.'/../models/catalogue.php';
function catalogue_index ($pdo){

    $data=[];
    $data['items'] = get_all_items($pdo);
    return render('app/views/catalogue.php', $data);
 
} 
function catalogue_show ($pdo){
    
    $data=[];
    $data['item'] = get_one_item($pdo);
    return render('app/views/item.php', $data);
 
} 

?>

