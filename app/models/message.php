<?php

function send_message($pdo, $sender_id, $receiver_id, $item_id, $content){
$stmt =$pdo -> prepare ('INSERT INTO conversation_message (sender_id, receiver_id, item_id, content) VALUES (:sender_id, :receiver_id, :item_id, :content)');
$stmt -> execute ([
   ':sender_id'   => $sender_id ,
   ':receiver_id' =>$receiver_id,
   ':item_id'     =>$item_id,
   ':content'     => $content,
]);
}

function get_messages($pdo, $user1_id, $user2_id, $item_id) {

    $stmt =$pdo -> prepare ('SELECT * from conversation_message WHERE item_id= :item_id 
    AND (sender_id = :user1a AND receiver_id = :user2a)
    OR (sender_id = :user2b AND receiver_id = :user1b)
    
    ');

    $stmt -> execute ([
    ':item_id' => $item_id,
    ':user1a' =>$user1_id, 
    ':user2a'=>$user2_id, 
    ':user2b' =>$user2_id,
    ':user1b'=>$user1_id]);
    
return $stmt->fetchAll();
}
