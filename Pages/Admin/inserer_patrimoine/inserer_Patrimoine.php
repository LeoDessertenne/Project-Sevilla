<?php
    session_start();
    if (!isset($_SESSION['connecte'])) {
        header("location: ../../../index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style_parcours.css">
    <?php include "../../../linkStyle.php"; ?>
    <title>Insérer les Patrimoines</title>
    <style>

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
        }

        input:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <p id="logo">Insérer les Patrimoines<span id="highlight">.</span></p>
    <a href="../admin.php" class="retour">Retour</a>
    <form method="POST" action="inserer_Patrimoine_Page.php">
        <label class="Page" for="choices">Page :</label>
        <select name="choices" id="choices">
            <option value="histoire">Histoire</option>
            <option value="architecture">Architecture</option>
            <option value="patrimoine_naturel">Patrimoine Naturel</option>
            <option value="urbanisme">Urbanisme</option>
        </select>
        <br><br>
        <input type="submit" value="Valider">
    </form>
</body>

</html>