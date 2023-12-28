<?php
    session_start();
    include('../../../connexion.inc.php');
    $path = "set search_path to seville;";
    $results = $cnx->exec($path);
    if (!isset($_SESSION['connecte'])) {
        header("location: ../../../index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../../style_charte_graphique.css">
    <link rel="stylesheet" href="../../style_navbar.css">
    <link rel="stylesheet" href="./style_ajouter_parcours.css">
    <?php include "../../../linkStyle.php"; ?>
    <title>Ajouter un Parcours</title>
</head>
<body>

    <p id="logo">Ajouter un parcours<span id="highlight">.</span></p>
    <a href="../admin.php" class="retour">Retour</a>
  <?php
  if (isset($_POST['submit'])) {
    // Traitez les données du formulaire 1
    $titre_parcours = $_POST["titre_parcours"];
    $duree_parcours = $_POST["duree_parcours"];
    $image_parcours = $_POST["image_parcours"];
    $description_parcours = $_POST["description_parcours"];
    $langue_parcours = $_POST["langue_parcours"];
    $quartier_parcours = $_POST["quartier_parcours"];
    $all_fields = true;

    // Vérifier chaque variable et afficher un message d'erreur si la variable n'est pas remplie
    if (empty($titre_parcours)) {
        $all_fields = false;
    }
    if (empty($duree_parcours)) {
        $all_fields = false;
    }
    if (empty($image_parcours)) {
        $all_fields = false;
    }
    if (empty($description_parcours)) {
        $all_fields = false;
    }
    if (empty($langue_parcours)) {
        $all_fields = false;
    }
    if (empty($quartier_parcours)) {
        $all_fields = false;
    }
    if ($all_fields) {
        $_SESSION['quartier'] = $quartier_parcours;
        $query = $cnx->prepare("SELECT * FROM parcours WHERE titre = ?");
        $query->execute([$titre_parcours]);
        $result = $query->fetch();

        if ($result) {
            echo "<p class='erreur-add-conf'>Le titre du parcours existe déjà.</p>";
        } else {
            $query = "INSERT INTO parcours VALUES ('$titre_parcours', $duree_parcours, '$image_parcours', '$description_parcours', './plus/enSavoirPlus.php',  '$langue_parcours' ,'$quartier_parcours')";
            $cnx->exec($query);
        }
    } else {
        echo "<p class='erreur-add-conf' style='color: red;padding-left: 30px;font-size: 20px;'>Veuillez remplir tous les champs.</p>";
    }
    // Affiche le formulaire 2
    echo '
    <form id="form2" method="post">
      <!-- Champs du formulaire 2 -->


    <div>
        <label for="titre_monument" maxlength="255">Titre monuments</label>
        <input type="text" id="titre_monument" name="titre_monument"><br>
    </div>

    <div>
        <label for="duree_monument">Durée de trajet</label>
        <input type="number" id="duree_monument" name="duree_monument"><br>
    </div>

    <div>
        <label for="image_monument" maxlength="255">Image monument</label>
        <input type="text" id="image_monument" name="image_monument"><br>
    </div>

    <div>
        <label for="description_monument">Description du monuments</label><br>
        <textarea id="description_monument" name="description_monument" maxlength="1500"></textarea><br>
    </div>

    <div>
        <label for="langue_monument" maxlength="2">Langue</label>
        <input type="text" id="langue_monument" name="langue_monument"><br>
    </div>

    <div>
        <label for="distance_marche">Marche</label>
        <input type="number" id="distance_marche" name="distance_marche"><br>
    </div>

    <div>
        <label for="distance_voiture">Voiture</label>
        <input type="number" id="distance_voiture" name="distance_voiture"><br>
    </div>

      <input type="submit" name="finis" value="Finis">
      <input type="submit" name="continuer" value="Continuer">
    </form>';
  } elseif (isset($_POST['finis'])) {
    // Traitez les données du formulaire 2
    $titre_monument = $_POST["titre_monument"];
    $duree_monument = $_POST["duree_monument"];
    $image_monument = $_POST["image_monument"];
    $description_monument = $_POST["description_monument"];
    $langue_monument = $_POST["langue_monument"];
    $distance_marche = $_POST["distance_marche"];
    $distance_voiture = $_POST["distance_voiture"];
    $quartier = $_SESSION['quartier'];
    $all_fields = true;

    // Vérifier chaque variable et afficher un message d'erreur si la variable n'est pas remplie
    if (empty($titre_monument)) {
        $all_fields = false;
    }
    if (empty($duree_monument)) {
        $all_fields = false;
    }
    if (empty($image_monument)) {
        $all_fields = false;
    }
    if (empty($description_monument)) {
        $all_fields = false;
    }
    if (empty($langue_monument)) {
        $all_fields = false;
    }
    if ($all_fields) {
        if (empty($distance_marche)) {
            $query = "INSERT INTO monuments (quartier, titre, duree, image, description, langue, distance_marche, distance_voiture) VALUES ('$quartier', '$titre_monument', $duree_monument, '$image_monument', '$description_monument',  '$langue_monument' , null, $distance_voiture)";
        } elseif (empty($distance_voiture)) {
            $query = "INSERT INTO monuments (quartier, titre, duree, image, description, langue, distance_marche, distance_voiture) VALUES ('$quartier', '$titre_monument', $duree_monument, '$image_monument', '$description_monument',  '$langue_monument' , $distance_marche,  null)";
        } else {
            $query = "INSERT INTO monuments (quartier, titre, duree, image, description, langue, distance_marche, distance_voiture) VALUES ('$quartier', '$titre_monument', $duree_monument, '$image_monument', '$description_monument',  '$langue_monument' , null,  null)";
        }
        $cnx->exec($query);
        echo "<p style='padding-left: 50px; color: white; font-size: 25px'>Insertion réussie</p>";
    } else {
        echo "<p class='erreur-add-conf' style='color: red;padding-left: 30px;font-size: 20px;'>Veuillez remplir tous les champs.</p>";
    }
    // Affiche un message de confirmation
  } elseif (isset($_POST['continuer'])) {
    // Traitez les données du formulaire 2
    $titre_monument = $_POST["titre_monument"];
    $duree_monument = $_POST["duree_monument"];
    $image_monument = $_POST["image_monument"];
    $description_monument = $_POST["description_monument"];
    $langue_monument = $_POST["langue_monument"];
    $distance_marche = $_POST["distance_marche"];
    $distance_voiture = $_POST["distance_voiture"];
    $quartier = $_SESSION['quartier'];
    $all_fields = true;

    // Vérifier chaque variable et afficher un message d'erreur si la variable n'est pas remplie
    if (empty($titre_monument)) {
        $all_fields = false;
    }
    if (empty($duree_monument)) {
        $all_fields = false;
    }
    if (empty($image_monument)) {
        $all_fields = false;
    }
    if (empty($description_monument)) {
        $all_fields = false;
    }
    if (empty($langue_monument)) {
        $all_fields = false;
    }
    if ($all_fields) {
        if (empty($distance_marche)) {
            $query = "INSERT INTO monuments (quartier, titre, duree, image, description, langue, distance_marche, distance_voiture) VALUES ('$quartier', '$titre_monument', $duree_monument, '$image_monument', '$description_monument',  '$langue_monument' , null, $distance_voiture)";
        } elseif (empty($distance_voiture)) {
            $query = "INSERT INTO monuments (quartier, titre, duree, image, description, langue, distance_marche, distance_voiture) VALUES ('$quartier', '$titre_monument', $duree_monument, '$image_monument', '$description_monument',  '$langue_monument' , $distance_marche,  null)";
        } else {
            $query = "INSERT INTO monuments (quartier, titre, duree, image, description, langue, distance_marche, distance_voiture) VALUES ('$quartier', '$titre_monument', $duree_monument, '$image_monument', '$description_monument',  '$langue_monument' , null,  null)";
        }
        $cnx->exec($query);
    } else {
        echo "<p class='erreur-add-conf' style='color: red;padding-left: 30px;font-size: 20px;'>Veuillez remplir tous les champs.</p>";
    }
    // Affiche un message de confirmation
    // Affiche à nouveau le formulaire 2
    echo '
    <form id="form2" method="post">
      <!-- Champs du formulaire 2 -->

      

    <div>
    <label for="titre_monument" maxlength="255">Titre monuments</label>
    <input type="text" id="titre_monument" name="titre_monument"><br>
    </div>

    <div>
        <label for="duree_monument">Durée de trajet</label>
        <input type="number" id="duree_monument" name="duree_monument"><br>
    </div>

    <div>
        <label for="image_monument" maxlength="255">Image monument</label>
        <input type="text" id="image_monument" name="image_monument"><br>
    </div>

    <div>
        <label for="description_monument">Description du monuments</label><br>
        <textarea id="description_monument" name="description_monument" maxlength="1500"></textarea><br>
    </div>

    <div>
        <label for="langue_monument" maxlength="2">Langue</label>
        <input type="text" id="langue_monument" name="langue_monument"><br>
    </div>

    <div>
        <label for="distance_marche">Marche</label>
        <input type="number" id="distance_marche" name="distance_marche"><br>
    </div>

    <div>
        <label for="distance_voiture">Voiture</label>
        <input type="number" id="distance_voiture" name="distance_voiture"><br>
    </div>
      
      <input type="submit" name="finis" value="Finis">
      <input type="submit" name="continuer" value="Continuer">
    </form>';
  } else {
    // Affiche le formulaire 1 par défaut
    echo '
    <form method="post">
      <!-- Champs du formulaire 1 -->
      <div>
          <label for="titre_parcours" maxlength="255">Titre Parcours</label>
          <input type="text" id="titre_parcours" name="titre_parcours"><br>
      </div>

      <div>
          <label for="duree_parcours">Durée</label>
          <input type="number" id="duree_parcours" name="duree_parcours"><br>
      </div>

      <div>
          <label for="image_parcours" maxlength="255">Image</label>
          <input type="text" id="image_parcours" name="image_parcours"><br>
      </div>

      <div>
          <label for="description_parcours">Description du parcours</label><br>
          <textarea id="description_parcours" name="description_parcours" maxlength="1500"></textarea><br>
      </div>

      <div>
          <label for="langue_parcours" maxlength="2">Langue</label>
          <input type="text" id="langue_parcours" name="langue_parcours"><br>
      </div>

      <div>
          <label for="quartier_parcours" maxlength="255">Quartier</label>
          <input type="text" id="quartier_parcours" name="quartier_parcours"><br>
      </div>

      <input type="submit" value="submit" name="submit">
    </form>';
  }
  ?>
</body>
</html>
