<?php
include("../../../connexion.inc.php");

// Vérifier si le quartier et la langue du parcours à supprimer sont spécifiés (par exemple, en tant que paramètres d'URL)
if (isset($_POST['quartier']) && isset($_POST['langue'])) {
    $quartier = $_POST['quartier'];
    $langue = $_POST['langue'];

    // Préparer la requête de suppression
    $query = $cnx->prepare("DELETE FROM seville.parcours WHERE quartier = :quartier AND langue = :langue");
    $query->bindParam(':quartier', $quartier);
    $query->bindParam(':langue', $langue);

    // Exécuter la requête de suppression
    if ($query->execute()) {
        echo "Le parcours a été supprimé avec succès.";
        header('location: gerer_Parcours.php');
        exit;
    } else {
        $errorInfo = $query->errorInfo();
        echo "Erreur lors de la suppression du parcours : " . $errorInfo[2];
    }
} else {
    echo "Quartier et/ou langue du parcours non spécifiés.";
}
?>
