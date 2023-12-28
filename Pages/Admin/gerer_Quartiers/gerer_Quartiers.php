<?php
session_start();

if (!isset($_SESSION['connecte'])) {
    header("location: ../../../index.php");
    exit;
}

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}
?>


<!DOCTYPE html>
<html>

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
    </style>
</head>

<body>

    <a href="../admin.php" class="retour">Retour</a>
    <p id="logo">Gérer les Quartiers<span id="highlight">.</span></p>

    <?php if (isset($_SESSION['message'])): ?>
        <p style="color: white;"><?php echo $message;?></p>
    <?php endif; ?>

    <form method="POST" action="gerer_Quartiers_Page.php">
        <label class="Page" for="choices">Quartier :</label>
        <select name="choices" id="choices">
            <option value="la_cartuja">La Cartuja</option>
            <option value="macarena">Macarena</option>
            <option value="el_centro">El Centro</option>
            <option value="santa_cruz">Santa Cruz</option>
            <option value="el_porvenir">El Porvenir</option>
            <option value="el_arenal">El Arenal</option>
            <option value="triana">Triana</option>
            <option value="nervion">Nervión</option>

        </select>
        <br><br>
        <input type="submit" value="Valider">
    </form>
</body>

</html>