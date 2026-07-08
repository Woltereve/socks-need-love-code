<?php
function home_index($pdo) {
    $message = $_GET['message'] ?? '';
    $info = '';
    if ($message === 'desinscription') {
        $info = 'Ta désinscription a bien été prise en compte. À bientôt ! 🧦';
    }
    return render(__DIR__ . '/../views/home.php', ['info' => $info]);
}
