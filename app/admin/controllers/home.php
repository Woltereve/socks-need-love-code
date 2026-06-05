<?php
require_once __DIR__ . '/../../models/operator.php';

function home_index(PDO $pdo, ?string $id = null): string
{
    if (!is_logged()) {
        redirect('/login');
    }

    return render('app/admin/views/index.php', [
        'page_title' => 'Administration',
    ]);
}