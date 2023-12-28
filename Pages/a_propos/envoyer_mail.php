<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'projet.seville@gmail.com'; // Votre adresse email
    $mail->Password = 'nxedvowefmyprlns'; // Votre mot de passe
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST['email'], $_POST['nom'] . ' ' . $_POST['prenom']);
    $mail->addAddress('projet.seville@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = $_POST['objet'];
    $mail->Body = 'Nom: ' . $_POST['nom'] . '<br>Prenom: ' . $_POST['prenom'] . '<br>Email: ' . $_POST['email'] . '<br>Message: ' . $_POST['message'];

    if ($mail->send()) {
        echo "
        <script>
        alert('Message envoyé ! Merci :)');
        document.location.href = 'a_propos.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer plus tard.');
        document.location.href = 'a_propos.php';
        </script>
        ";
    }
} else {
    header('location: index.html');
    exit;
}
?>