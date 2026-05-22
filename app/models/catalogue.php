<?php


function get_all_items ($pdo){

 $sql = ' SELECT * FROM item';
 $stmt = $pdo->query($sql);
 return $stmt->fetchAll();
}





?>