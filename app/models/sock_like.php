<?php

function add_like ($pdo, $liker_item_id, $liked_item_id) {
$stmt = $pdo -> prepare ('INSERT IGNORE INTO sock_like (liker_item_id, liked_item_id) VALUES (:liker,:liked)');
$stmt -> execute ([':liker' => $liker_item_id , ':liked' => $liked_item_id]);
}

function is_match($pdo, $item1_id ,$item2_id){
$stmt = $pdo ->prepare 
('SELECT COUNT(*) FROM sock_like
WHERE (liker_item_id = :a AND liked_item_id = :b)
AND EXISTS (
SELECT 1 FROM sock_like
WHERE liker_item_id = :c AND liked_item_id = :d)
');

$stmt->execute ([':a'=> $item1_id, ':b' =>$item2_id,
 ':c' =>$item2_id, ':d'=> $item1_id
]);return $stmt ->fetchColumn() > 0;
}


function get_likes_received($pdo, $operator_id) {

$stmt = $pdo->prepare('
    SELECT * FROM sock_like 
    JOIN item ON item.id = sock_like.liker_item_id
    WHERE sock_like.liked_item_id IN (
        SELECT id FROM item WHERE creator_id = :operator_id
    )
');
$stmt->execute([':operator_id' => $operator_id]);
return $stmt ->fetchAll();
}



function has_liked ($pdo, $liker_item_id ,$liked_item_id){

$stmt = $pdo -> prepare ('SELECT COUNT(*) FROM sock_like WHERE liker_item_id = :liker AND liked_item_id = :liked');
$stmt ->execute ([':liker' => $liker_item_id, ':liked' => $liked_item_id]);
return $stmt->fetchColumn () > 0;

}