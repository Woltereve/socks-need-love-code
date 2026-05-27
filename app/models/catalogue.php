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



?>