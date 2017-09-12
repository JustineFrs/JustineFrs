<?php

$name = $_POST['name'];
$email = $_POST['email'];
$textMsg = $_POST['textMsg'];
$alert = 'Une erreur est survenue, veuillez recharger la page et rééssayer';

if (empty($name) || empty($email) || empty($textMsg)) {
    $empty = 'Tous les champs doivent être renseignés';
} 
elseif (!empty($name) || !empty($email) || !empty($textMsg)){
    /* Destinataire (votre adresse e-mail) */
    $to = 'justine.frasier@gmail.com';

    /* Construction du message */
    $msg = 'Bonjour,' . "\r\n\r\n";
    $msg .= 'Ce mail a été envoyé depuis ecoletaiji.com par ' . $name . ' ' . $email . "\r\n\r\n";
    $msg .= 'Voici le message qui vous est adressé :' . "\r\n";
    $msg .= '***************************' . "\r\n";
    $msg .= $textMsg . "\r\n";
    $msg .= '***************************' . "\r\n";

    /* En-têtes de l'e-mail */
    $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n\r\n";

    /* Envoi de l'e-mail */
    mail($to, $sujet, $msg, $headers);
    echo 'Msg envoyé !';
}
else {
    echo $alert;
}
?>
