<?php

function profile_index($pdo) {
       
    if (!isset($_SESSION['operator_id'])) {
        redirect('/connection');
    }

    return render(__DIR__ . '/../views/profile.php', []);
}
?>