<?php
require __DIR__ . '/../models/contact.php';
function contact_index ($pdo){
    return render(__DIR__ . '/../views/contact.php', []);
}

function contact_send($pdo) {
    $nom      =$_POST ['nom'];
    $prenom   =$_POST ['prenom'];
    $email    =$_POST ['email'];
    $message  =$_POST ['message'];
    $name     = $nom . ' ' . $prenom;
insert_message($pdo, $name, $email, $message, 1);

    return render(__DIR__ . '/../views/contact.php', [
        'success' => 'Votre message a bien été envoyé !'
    ]);


}