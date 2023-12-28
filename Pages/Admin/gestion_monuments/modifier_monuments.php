<link rel="stylesheet" href="Style/modifier_parcours.css">
<link rel="stylesheet" href="../../../Style/style_charte_graphique.css">
<?php
include("../../../connexion.inc.php");
if (isset($_POST['Envoyer'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['titre']) && !empty($_POST['duree']) && !empty($_POST['description']) && !empty($_POST['image'])) {
            $titre = $_POST['titre'];
            $ancienTitre = $_POST['ancienTitre'];

            $quartier = $_POST['quartier'];

            $image = $_POST['image'];
            $ancienneImage = $_POST['ancienneImage'];

            $duree = $_POST['duree'];
            $ancienneDuree = $_POST['ancienneDuree'];

            $description = $_POST['description'];

            $distance_marche = $_POST['distance_marche'];
            $ancienneDistance_marche = $_POST['ancienneDistance_marche'];

            $distance_voiture = $_POST['distance_voiture'];
            $ancienneDistance_voiture = $_POST['ancienneDistance_voiture'];

            $langue = $_POST['langue'];
            $monument = $_POST['monument'];


            $queryUpdate = $cnx->prepare("UPDATE seville.monuments SET duree = ?, image = ? WHERE monument = ? and quartier = ?");
            $queryUpdate->execute([$duree, $image, pg_escape_string($monument), $quartier]);
            if ($distance_marche != '') {
                $queryUpdate = $cnx->prepare("UPDATE seville.monuments SET distance_marche = ? WHERE monument = ? and quartier = ?");
                $queryUpdate->execute([$distance_marche, pg_escape_string($monument), $quartier]);
            }
            if ($distance_voiture != '') {
                $queryUpdate = $cnx->prepare("UPDATE seville.monuments SET distance_voiture = ? WHERE monument = ? and quartier = ?");
                $queryUpdate->execute([$distance_voiture, pg_escape_string($monument), $quartier]);
            }
            if ($titre != $ancienTitre) {
                $queryUpdate = $cnx->prepare("UPDATE seville.monuments SET titre = ? WHERE langue = ? and monument = ?");
                $queryUpdate->execute([pg_escape_string($titre), $langue, pg_escape_string($monument)]);
            }

            $queryUpdateTitreDesc = $cnx->prepare("UPDATE seville.monuments SET titre = ?, description = ? WHERE monument = ? and langue = ?");
            $queryUpdateTitreDesc->execute([pg_escape_string($titre), $description, pg_escape_string($monument), $langue]);
            echo $quartier;

            header('location: gerer_monuments.php');
            exit;
        }
    } else {
        echo "Erreur : les informations du parcours à modifier sont manquantes.";
    }
}


$titre = $_POST['titre'];
$duree = $_POST['duree'];
$description = $_POST['description'];
$image = $_POST['image'];
$quartier = $_POST['quartier'];
$monument = $_POST['monument'];
$langue = $_POST['langue'];
$distance_voiture = $_POST['distance_voiture'];
$distance_marche = $_POST['distance_marche'];
?>

<p id="logo">Modifier le parcours : <?php echo htmlspecialchars($titre, ENT_QUOTES); ?><span id="highlight">.</span></p>
<form action="" method="post">
    <label for="titre">Titre :</label>
    <input type="text" name="titre" value="<?php echo htmlspecialchars($titre, ENT_QUOTES); ?>"><br><br>
    <label for="duree">Durée :</label>
    <input type="number" name="duree" value="<?php echo htmlspecialchars($duree, ENT_QUOTES); ?>"><br><br>
    <label for="description">Description :</label>
    <textarea name="description"><?php echo htmlspecialchars($description, ENT_QUOTES); ?></textarea><br><br>
    <label for="image">Image :</label>
    <input type="text" name="image" value="<?php echo htmlspecialchars($image, ENT_QUOTES); ?>"><br><br>
    <label for="distance_marche">Distance à pied :</label>
    <input type="number" name="distance_marche" value="<?php echo htmlspecialchars($distance_marche, ENT_QUOTES); ?>"><br><br>
    <label for="distance_voiture">Distance en voiture :</label>
    <input type="number" name="distance_voiture" value="<?php echo htmlspecialchars($distance_voiture, ENT_QUOTES); ?>"><br><br>
    <input type='hidden' name='langue' value='<?php echo $langue; ?>'>
    <input type='hidden' name='ancienneDuree' value='<?php echo $duree; ?>'>
    <input type='hidden' name='ancienneImage' value='<?php echo $image; ?>'>
    <input type='hidden' name='ancienTitre' value='<?php echo $titre; ?>'>
    <input type='hidden' name='quartier' value='<?php echo $quartier; ?>'>
    <input type='hidden' name='monument' value=<?php echo "\"". $monument ."\""; ?>>
    <input type='hidden' name='ancienneDistance_voiture' value='<?php echo $distance_voiture; ?>'>
    <input type='hidden' name='ancienneDistance_marche' value='<?php echo $distance_marche; ?>'>
    <input type="submit" name="Envoyer" value="Enregistrer les modifications">
</form>