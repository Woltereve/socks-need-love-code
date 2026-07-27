<?php
function get_operator_by_email($pdo, $email) {
    $stmt =$pdo->prepare('SELECT * FROM operator WHERE email = :email');
    $stmt->execute([':email' => $email]);
    return $stmt->fetch();
}
function get_all_operators($pdo) {
    $stmt = $pdo->query('SELECT * FROM operator');
    return $stmt->fetchAll();
}