<?php
session_start();
if (!isset($_SESSION['connecte'])) {
    header("location: ../../index.php");
    exit;
}
session_abort();
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Style/style_footer.css">
    <?php include "../../linkStyle.php"; ?>
    <script src="../../Js/script_navfixe.js"></script>
    <script src="../../Js/script_menuBurger.js"> </script>
    <link rel="stylesheet" href="Style/Style_admin.css">
    <title>Tableau de bord</title>
</head>

<body>
    <?php include "../../navbar.php"; ?>

    <?php if ($_SESSION['langue'] == 'fr'): ?>
        <!-- Si la langue choisie est français -->
        <p id="logo">Tableau de bord<span id="highlight">.</span></p>
    <?php endif; ?>

    <?php if ($_SESSION['langue'] == 'en'): ?>
        <!-- Si la langue choisie est anglais -->
        <p id="logo">Dashboard<span id="highlight">.</span></p>
    <?php endif; ?>

    <?php if ($_SESSION['langue'] == 'es'): ?>
        <!-- Si la langue choisie est espagnol -->
        <p id="logo">Tablero de mandos<span id="highlight">.</span></p>
    <?php endif; ?>

    <div class="container-box-admin">
        <a href="ajouter_parcours/ajouter_parcours.php">
            <div class="box-admin">Ajouter un Parcours</div>
        </a>
        <a href="Gestion_Parcours/gerer_Parcours.php">
            <div class="box-admin">Gérer les Parcours</div>
        </a>
        <a href="gestion_monuments/gerer_monuments.php">
            <div class="box-admin">Gérer les monuments</div>
        </a>
        <a href="inserer_patrimoine/inserer_Patrimoine.php">
            <div class="box-admin">Ajouter un Patrimoine</div>
        </a>
        <a href="gerer_patrimoines/gerer_Patrimoine.php">
            <div class="box-admin">Gérer les Patrimoines</div>
        </a>
        <a href="gerer_Quartiers/gerer_Quartiers.php">
            <div class="box-admin">Modifier un quartier</div>
        </a>
    </div>
    <form action="../../admin_logout.php" method="POST">
        <button type="submit" id="button-deco" name="submit">Se déconnecter</button>
    </form>

</body>

</html>