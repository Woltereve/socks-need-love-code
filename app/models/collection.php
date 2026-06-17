<?php
function get_collection ($pdo,$creator_id){
$stmt = $pdo ->prepare ('SELECT * FROM collection WHERE creator_id = :creator_id');
$stmt -> execute ([':creator_id' => $creator_id]);
return $stmt ->fetch();
}

function create_collection($pdo, $creator_id, $label){
$stmt =$pdo -> prepare ('INSERT INTO collection (creator_id, label) VALUES (:creator_id, :label)');
$stmt -> execute ([':creator_id' =>$creator_id, ':label' =>$label]);
return $pdo -> lastInsertId();
}


 function add_to_collection($pdo, $collection_id, $item_id) {

 $stmt =$pdo ->prepare ('INSERT INTO collection_item (collection_id, item_id) VALUES (:collection_id ,:item_id)') ;
 $stmt-> execute ([':collection_id' => $collection_id ,':item_id' => $item_id]);
 
 }
function is_in_collection ($pdo, $collection_id,$item_id){

$stmt =$pdo -> prepare('SELECT * from collection_item WHERE collection_id= :collection_id AND item_id= :item_id ');
$stmt -> execute ([':collection_id'=>$collection_id ,':item_id'=>$item_id ]);
return $stmt -> fetch();
}
  function get_collection_items($pdo, $collection_id) {
    $stmt = $pdo->prepare('
        SELECT item.* FROM item
        JOIN collection_item ON item.id = collection_item.item_id
        WHERE collection_item.collection_id = :collection_id
    ');
    $stmt->execute([':collection_id' => $collection_id]);
    return $stmt->fetchAll();
}
