<?php
require __DIR__ . '/../models/connection.php';

function user_index ($pdo) {
    $operators = get_all_operators($pdo);
    return render (__DIR__ . '/../views/user-index.php',['operators' => $operators
    ]);
}
