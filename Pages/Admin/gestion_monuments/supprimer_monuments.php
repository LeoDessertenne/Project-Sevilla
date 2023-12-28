<?php
include("../../../connexion.inc.php");

// Vérifier si le monument et la langue du parcours à supprimer sont spécifiés (par exemple, en tant que paramètres d'URL)
if (isset($_POST['monument']) && isset($_POST['langue'])) {
    $monument = $_POST['monument'];
    $langue = $_POST['langue'];

    // Préparer la requête de suppression
    $query = $cnx->prepare("DELETE FROM seville.monuments WHERE monument = :monument AND langue = :langue");
    $query->bindParam(':monument', $monument);
    $query->bindParam(':langue', $langue);

    // Exécuter la requête de suppression
    if ($query->execute()) {
        echo "Le monuments a été supprimé avec succès.";
        header('location: gerer_monuments.php');
        exit;
    } else {
        $errorInfo = $query->errorInfo();
        echo "Erreur lors de la suppression du parcours : " . $errorInfo[2];
    }
} else {
    echo "Quartier et/ou langue du parcours non spécifiés.";
}
?>
