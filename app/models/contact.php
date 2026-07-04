<?php

function insert_message($pdo, $name, $email, $subject, $content, $assigned_to) {
    $sql = "INSERT INTO message (name, email, subject, content, status, assigned_to) 
            VALUES (:name, :email, :subject, :content, 0, :assigned_to)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name'        => $name,
        ':email'       => $email,
        ':subject'     => 'Contact depuis le site',
        ':content'     => $content,
        ':assigned_to' => $assigned_to
    ]);
}