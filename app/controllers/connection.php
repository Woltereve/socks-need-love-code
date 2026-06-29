
<?php
require __DIR__ . '/../models/connection.php';


function connection_index($pdo) {
    $message = $_GET['message'] ?? '';
    $info = '';
if ($message === 'matcher') {
    $info = 'Pour matcher une chaussette, veuillez vous identifier.';}
    
    if ($message === 'espace') {
    $info = 'Veuillez vous identifier pour accéder à votre espace.';
}

return render(__DIR__ . '/../views/connection.php', ['info' => $info]);
    }
    
    function connection_check($pdo) {
        $email    = $_POST['email'];
        $password = $_POST['password'];
        
        
        $operator = get_operator_by_email($pdo, $email);
        
        
        if ($operator && password_verify($password, $operator['password'])) {
            session_start();
            $_SESSION['operator_id']    = $operator['id'];
            $_SESSION['operator_email'] = $operator['email'];
            
            if($operator['is_admin'] === 1){
                redirect('/admin');
                exit;
                }
                
                redirect('/profile');
                } else {
                    return render(__DIR__ . '/../views/connection.php', ['error' => 'Email ou mot de passe incorrect']);
                    }
                    } 
                    function connection_logout($pdo) {
                        session_destroy();
                        redirect('/');
                        }
                        ?>

