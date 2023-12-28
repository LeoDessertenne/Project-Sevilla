<link rel="stylesheet" href="Style/modifier_parcours.css">
<link rel="stylesheet" href="../../../Style/style_charte_graphique.css">
<?php
include("../../../connexion.inc.php");
if (isset($_POST['Envoyer'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['titre']) && !empty($_POST['duree']) && !empty($_POST['description']) && !empty($_POST['lien']) && !empty($_POST['image']) && !empty($_POST['quartier'])) {
            $titre = $_POST['titre'];
            $duree = $_POST['duree'];
            $description = $_POST['description'];
            $lienAutrePage = $_POST['lien'];
            $image = $_POST['image'];
            $quartier = $_POST['quartier'];
            $langue = $_POST['langue'];
            $ancienneDuree = $_POST['ancienneDuree'];
            $ancienTitre = $_POST['ancienTitre'];
            $ancienneImage = $_POST['ancienneImage'];
            $ancienQuartier = $_POST['ancienQuartier'];

            if ($duree != $ancienneDuree || $image != $ancienneImage || $quartier != $ancienQuartier) {
                $queryUpdate = $cnx->prepare("UPDATE seville.parcours SET duree = ?, image = ?, quartier = ? WHERE quartier = ?");
                $queryUpdate->execute([$duree, $image, $quartier, $ancienQuartier]);
            }

            if ($titre != $ancienTitre) {
                $queryUpdate = $cnx->prepare("UPDATE seville.parcours SET titre = ? WHERE langue = ? and quartier = ?");
                $queryUpdate->execute([$titre, $langue, $quartier]);
            }

            $queryUpdateTitreDesc = $cnx->prepare("UPDATE seville.parcours SET titre = ?, description = ?, lienautrepage = ? WHERE titre = ?");
            $queryUpdateTitreDesc->execute([$titre, $description, $lienAutrePage, $ancienTitre]);

            echo "Les modifications ont été enregistrées avec succès.";
            header('location: gerer_Parcours.php');
            exit;
        }
    } else {
        echo "Erreur : les informations du parcours à modifier sont manquantes.";
    }
}


$titre = $_POST['titre'];
$duree = $_POST['duree'];
$description = $_POST['description'];
$lienAutrePage = $_POST['lien'];
$image = $_POST['image'];
$quartier = $_POST['quartier'];
$langue = $_POST['langue'];
?>

<p id="logo">Modifier le parcours : <?php echo htmlspecialchars($titre, ENT_QUOTES); ?><span id="highlight">.</span></p>
<form action="" method="post">
    <label for="titre">Titre :</label>
    <input type="text" name="titre" value="<?php echo htmlspecialchars($titre, ENT_QUOTES); ?>"><br><br>
    <label for="duree">Durée :</label>
    <input type="number" name="duree" value="<?php echo htmlspecialchars($duree, ENT_QUOTES); ?>"><br><br>
    <label for="description">Description :</label>
    <textarea name="description"><?php echo htmlspecialchars($description, ENT_QUOTES); ?></textarea><br><br>
    <label for="lien">Lien autre page :</label>
    <input type="text" name="lien" value="<?php echo htmlspecialchars($lienAutrePage, ENT_QUOTES); ?>"><br><br>
    <label for="image">Image :</label>
    <input type="text" name="image" value="<?php echo htmlspecialchars($image, ENT_QUOTES); ?>"><br><br>
    <label for="quartier">Quartier :</label>
    <input type="text" name="quartier" value="<?php echo htmlspecialchars($quartier, ENT_QUOTES); ?>"><br><br>
    <input type='hidden' name='langue' value='<?php echo $langue; ?>'>
    <input type='hidden' name='ancienneDuree' value='<?php echo $duree; ?>'>
    <input type='hidden' name='ancienneImage' value='<?php echo $image; ?>'>
    <input type='hidden' name='ancienTitre' value='<?php echo $titre; ?>'>
    <input type='hidden' name='ancienQuartier' value='<?php echo $quartier; ?>'>
    <input type="submit" name="Envoyer" value="Enregistrer les modifications">
</form>