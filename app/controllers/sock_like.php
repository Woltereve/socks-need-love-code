<?php
require __DIR__ . '/../models/sock_like.php';
require __DIR__ . '/../models/item.php';

function sock_like_add ($pdo) {
if (empty($_SESSION ['operator_id'])){
    redirect ('/connection');
    return;
}

$liker_item_id = $_POST ['liker_item_id'];
$liked_item_id = $_POST ['liked_item_id'];

add_like ($pdo, $liker_item_id, $liked_item_id);

if (is_match($pdo, $liker_item_id, $liked_item_id)) {
    redirect ('/catalogue/show/' . $_POST['liked_slug'] . '?match=1');
}
else {
    redirect ('/catalogue/show/' . $_POST['liked_slug']);}
}



function sock_like_index($pdo) {
    if (empty($_SESSION['operator_id'])) {
        redirect('/connection');
        return;          
    }
    
    $operator_id = $_SESSION['operator_id'];
    $likes = get_likes_received($pdo, $operator_id);
    
    return render(__DIR__ . '/../views/sock_like.php', [
    'likes' => $likes
]);
}




