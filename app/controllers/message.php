<?php
require __DIR__ . '/../models/message.php';

function message_send($pdo) {
$sender_id = $_SESSION ['operator_id'];
$receiver_id= $_POST ['receiver_id'];
$item_id = $_POST ['item_id'];
$content = $_POST ['content'];
send_message ($pdo, $sender_id,$receiver_id, $item_id, $content);


redirect('/message/conversation?item_id=' . $item_id . '&with=' . $receiver_id);
}

function message_conversation($pdo) {
    $user1_id = $_SESSION['operator_id'];
    $user2_id = $_GET['with'];
    $item_id = $_GET['item_id'];
    
    $messages = get_messages($pdo, $user1_id, $user2_id, $item_id);
    
    return render(__DIR__ . '/../views/conversation.php', [
        'messages' => $messages,
        'user1_id' => $user1_id,
        'user2_id' => $user2_id,
        'item_id' => $item_id
    ]);
}
function message_index($pdo) {
    if (empty($_SESSION['operator_id'])) {
        redirect('/connection');
        return;
    }
    $user_id = $_SESSION['operator_id'];
    $conversations = get_conversations($pdo, $user_id);

    return render(__DIR__ . '/../views/messages.php', [
        'conversations' => $conversations,
        'user_id'       => $user_id
    ]);
}