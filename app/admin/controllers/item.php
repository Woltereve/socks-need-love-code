<?php
require __DIR__ . '/../models/item.php';

function item_new($pdo) {
    $categories = get_all_categories($pdo);
    $themes = get_all_themes($pdo);

    return render (__DIR__ . '/../views/item-new.php',[
    'categories' => $categories ,
    'themes' => $themes
    ]);

}

function item_edit ($pdo,$slug){
   
    $categories=get_all_categories($pdo);
    $item = get_one_item($pdo,$slug);
    $themes = get_all_theme($pdo);
    
    return render ( __DIR__. '/../views/item-edit.php',[
    'item' =>$item,
    'categories' => $categories,
    'themes' => $themes   ]);
    


}
