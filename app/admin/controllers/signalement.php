<?php

function signalement_index($pdo){
$stmt = $pdo ->query('SELECT * FROM message ORDER BY date DESC');
$messages = $stmt ->FetchAll();
return render (__DIR__ . '/../views/signalement.php',['messages' => $messages]);



}