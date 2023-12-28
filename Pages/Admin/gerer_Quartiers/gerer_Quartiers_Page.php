<?php
session_start();

if (!isset($_SESSION['connecte'])) {
    header("location: ../../../index.php");
    exit;
}

if (!isset($_POST['choices'])) {
    header('location: gerer_Quartiers.php');
    exit;
} else {
    $table = $_POST['choices'];
    $_SESSION['table'] = $table;
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../../../linkStyle.php"; ?>
    <title>Gérer les Quartiers</title>
    <style>
        select {
            margin-left: 20px;
            border: none;
            width: 400px;
            height: 40px;
            font-size: 15px;
            border-radius: 10px;
        }

        form {
            margin-left: 10px;
        }

        label {
            font-size: 30px;
            font-family: "Barlow";
            color: #f7af3e;
            font-weight: 700;
        }

        input {
            text-decoration: none;
            font-size: 15px;
            background-color: rgb(29, 29, 29);
            padding: 10px 25px;
            border: 2px #f7af3e solid;
            color: #f7af3e;
            cursor: pointer;
            border-radius: 10px;
            margin-left: 15px;
        }

        input:hover {
            text-decoration: underline;
        }

        .retour {
            display: inline-block;
            margin: 20px;
            text-decoration: none;
            background-color: #bb4e11;
            color: black;
            padding: 10px 30px;
            border-radius: 10px;
            font-size: 20px;
        }

        textarea {
            border-radius: 10px;
            width: 200px;
            height: 200px;
            resize: none;
            overflow: auto;
            margin-left: 10px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <a href="gerer_Quartiers.php" class="retour">Retour</a>
    <p id="logo">Gérer les Quartiers<span id="highlight">.</span></p>

    <?php

    //Si une requête à été exécuté

    //Si une requête n'a pas été exécuté


    include("../../../connexion.inc.php");
    $query = $cnx->prepare("SELECT * FROM seville.$table");

    if ($query->execute()) {
        while ($ligne = $query->fetch(PDO::FETCH_OBJ)) {
            echo "
            <form method='post' action='script_gerer_Quartiers.php'>
            <label class='avantages' for='avantages'>Avantages :</label>
            <select name='avantages' id='avantages'>";

            $query = $cnx->prepare("SELECT * FROM seville.$table WHERE type = 'avantages'");

            if ($query->execute()) {
                while ($ligne = $query->fetch(PDO::FETCH_OBJ)) {
                    echo "<option value=\"".$ligne->texte."\">$ligne->texte</option>";
                } 
            }

            echo "</select>
            ";
            echo "<input type='hidden' name='supprimer_avantage' value='supprimer_avantage'>";
            echo "<input type='hidden' name='reponse' value='reponse'>";
            echo "<input type='submit' class='btn-supprimer' value='Supprimer'>
            </form><br>";

            echo "<form method='post' action='script_gerer_Quartiers.php'>
            <label class='desavantages' for='desavantages'>Inconvénients :</label>
            <select name='desavantages' id='desavantages'>";

            $query = $cnx->prepare("SELECT * FROM seville.$table WHERE type = 'inconvénients'");

            if ($query->execute()) {
                while ($ligne = $query->fetch(PDO::FETCH_OBJ)) {
                    echo "<option value=\"".$ligne->texte."\">$ligne->texte</option>";
                }
            }

            echo "</select>
            ";
            echo "<input type='hidden' name='supprimer_inconvénient' value='supprimer_inconvénient'>";
            echo "<input type='hidden' name='reponse' value='reponse'>";
            echo "<input type='submit' class='btn-supprimer' value='Supprimer'>
            </form>";

            echo "<form method='post' action='script_gerer_Quartiers.php'>
            <label for='avantage'>Ajouter un avantage : </label>
            <input type='text' id='avantage' name='avantage' required>
            <label for='langue'>Langue : </label>
            <select name='langue' id='langue' required>
                <option value='fr'>Français</option>
                <option value='en'>Anglais</option>
                <option value='es'>Espagnol</option>
            </select>
            <input type='hidden' name='ajouter_avantage' value='ajouter_avantage'>
            <input type='hidden' name='reponse' value='reponse'>
            <input type='submit' name='submit' value='Inserer'>
            </form><br>
            ";

            echo "<form method='post' action='script_gerer_Quartiers.php'>
            <label for='desavantage'>Ajouter un inconvénient : </label>
            <input type='text' id='desavantage' name='desavantage' required>
            <label for='langue'>Langue : </label>
            <select name='langue' id='langue' required>
                <option value='fr'>Français</option>
                <option value='en'>Anglais</option>
                <option value='es'>Espagnol</option>
            </select>
            <input type='hidden' name='ajouter_inconvénient' value='ajouter_inconvénient'>
            <input type='hidden' name='reponse' value='reponse'>
            <input type='submit' name='submit' value='Inserer'>
            </form><br>
            ";

            // description
    
            echo "<form method='post' action='script_gerer_Quartiers.php'>
            <label for='description'>Modifier la description : </label><br>";

            $results = $cnx->query("SELECT * FROM seville.$table WHERE type = 'texte' ORDER BY language");
            $counter = 1;
            while ($ligne = $results->fetch(PDO::FETCH_OBJ)) {
                echo "<textarea type='text' id='description_$counter' name='description_$counter' required>" . $ligne->texte . "</textarea>";
                $counter++;
            }

            echo "
            <input type='hidden' name='modifier_description' value='modifier_description'>
            <input type='hidden' name='reponse' value='reponse'>
            <input type='submit' name='submit' value='Modifier'>
            </form><br>
            ";

            // monuments
    
            echo "<form method='post' action='script_gerer_Quartiers.php'>
            <label class='monuments' for='monuments'>Monuments :</label>
            <select name='monuments' id='monuments'>";

            $query = $cnx->prepare("SELECT * FROM seville.$table WHERE type = 'monuments'");

            if ($query->execute()) {
                while ($ligne = $query->fetch(PDO::FETCH_OBJ)) {
                    echo "<option value=\"".$ligne->texte."\">$ligne->texte</option>";
                }
            }

            echo "</select>
            ";
            echo "
            <input type='hidden' name='supprimer_monument' value='supprimer_monument'>
            <input type='hidden' name='reponse' value='reponse'>
            <input type='submit' class='btn-supprimer' value='Supprimer'>
            </form><br>";

            echo "<form method='post' action='script_gerer_Quartiers.php'>
            <label for='monument'>Ajouter un monument : </label>
            <input type='text' id='monument' name='monument' required>
            <input type='hidden' name='reponse' value='reponse'>
            <input type='hidden' name='ajouter_monument' value='ajouter_monument'>
            <input type='submit' name='submit' value='Inserer'>
            </form><br>
            ";

            // Bar & restaurants
    
            echo "<form method='post' action='script_gerer_Quartiers.php'>
            <label class='bar-restaus' for='bar-restaus'>Bars et Restaurants :</label>
            <select name='bar-restaus' id='bar-restaus'>";

            $query = $cnx->prepare("SELECT * FROM seville.$table WHERE type = 'bars_restaurants'");

            if ($query->execute()) {
                while ($ligne = $query->fetch(PDO::FETCH_OBJ)) {
                    echo "<option value=\"".$ligne->texte."\">$ligne->texte</option>";
                }
            }

            echo "</select>
            ";
            echo "<input type='hidden' name='supprimer_bar-restau' value='supprimer_bar-restau'>
            <input type='hidden' name='reponse' value='reponse'>";
            echo "<input type='submit' class='btn-supprimer' value='Supprimer'>
            </form><br>";

            echo "<form method='post' action='script_gerer_Quartiers.php'>
            <label for='bar-restau'>Ajouter un Bar ou un Restaurant : </label>
            <input type='text' id='bar-restau' name='bar-restau' required>
            <input type='hidden' name='ajouter_bar-restau' value='ajouter_bar-restau'>
            <input type='hidden' name='reponse' value='reponse'>
            <input type='submit' name='submit' value='Inserer'>
            </form><br>
            ";

            // alimentation
    
            echo "<form method='post' action='script_gerer_Quartiers.php'>
            <label class='alimentations' for='alimentations'>Alimentations :</label>
            <select name='alimentations' id='alimentations'>";

            $query = $cnx->prepare("SELECT * FROM seville.$table WHERE type = 'alimentation'");

            if ($query->execute()) {
                while ($ligne = $query->fetch(PDO::FETCH_OBJ)) {
                    echo "<option value=\"".$ligne->texte."\">$ligne->texte</option>";
                }
            }

            echo "</select>
            ";
            echo "<input type='hidden' name='supprimer_alimentation' value='supprimer_alimentation'>
            <input type='hidden' name='reponse' value='reponse'>";
            echo "<input type='submit' class='btn-supprimer' value='Supprimer'>
            </form><br>";

            echo "<form method='post' action='script_gerer_Quartiers.php'>
            <label for='alimentation'>Ajouter un endroit où s'alimenter : </label>
            <input type='text' id='alimentation' name='alimentation' required>
            <input type='hidden' name='ajouter_alimentation' value='ajouter_alimentation'>
            <input type='hidden' name='reponse' value='reponse'>
            <input type='submit' name='submit' value='Inserer'>
            </form><br>
            ";

            // image 
    
            echo "<form method='post' action='script_gerer_Quartiers.php'>
            <label class='image' for='image'>Image :</label>";

            $results = $cnx->query("SELECT * FROM seville.$table WHERE type = 'image'");
            while ($ligne = $results->fetch(PDO::FETCH_OBJ)) {
                echo "<input type='text' id='image' name='image' required value=\"".$ligne->texte."\"></input>";
            }

            echo "<input type='hidden' name='reponse' value='reponse'>
            <input type='hidden' name='modifier_image' value='modifier_image'>
            <input type='submit' name='submit' value='Modifier'>
            </form><br>
            ";

        }
    }
    ?>
</body>

</html>