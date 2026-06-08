<?php

function dashboard_index($pdo) {
    return render(__DIR__ . '/../views/dashboard.php', []);
}