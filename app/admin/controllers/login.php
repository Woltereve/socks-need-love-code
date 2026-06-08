<?php
require __DIR__ . '/../models/connection.php';

function login_index ($pdo) {
   return render(__DIR__ . '/../views/login.php', []);}


function login_check($pdo) {
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $operator = get_operator_by_email($pdo, $email);
   

   
   if ($operator && password_verify($password, $operator['password']) && $operator['is_active'] == 1)  {
        session_start();
        $_SESSION['user_id']    = $operator['id'];
        $_SESSION['user_email'] = $operator['email'];
        redirect('/admin/dashboard');
    } 

    else {
        return render(__DIR__ . '/../views/connection.php', ['error' => 'Email ou mot de passe incorrect']);
    }}



function login_logout($pdo) {
    session_destroy();
    redirect('/');
}
?>