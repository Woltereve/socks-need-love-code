<?php
function contact_index (){
    return render(__DIR__ . '/../views/contact.php', []);
}

function contact_send ($pdo){
    $nom        = $_POST ['nom'];
    $prenom     = $_POST ['prenom'];
    $email      = $_POST ['email'];
    $message    = $_POST ['message'];

return render(__DIR__ . '/../views/contact.php', [
        'success' => 'Votre message a bien été envoyé !'
    ]);
}