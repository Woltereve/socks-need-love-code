<?php
function inscription_index($pdo) {
    return render(__DIR__ . '/../views/inscription.php', []);
}


function profile_index($pdo) {
    return render(__DIR__ . '/../views/profile.php', []);
}
?>