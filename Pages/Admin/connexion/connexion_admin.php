<?php
session_start();
if (isset($_SESSION['connecte'])) {
    header("location: ../../../index.php");
    exit;
}
session_abort();
?>

<!DOCTYPE html>
<html>

<head>
    
    <link rel="stylesheet" href="Style/style_connexion.css">
    <link rel="stylesheet" href="../../../Style/style_charte_graphique.css">
    <title>Formulaire PHP</title>
</head>

<body>

    <?php
    include("../../../connexion.inc.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $mdp = $_POST["mdp"];

        $query = $cnx->prepare("SELECT * FROM seville.admin");
        $query->execute();

        $validCredentials = false;

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $dbLogin = $row['login'];
            $dbMdp = $row['password_hash'];

            if ($login == $dbLogin && md5($mdp) == $dbMdp) {
                $validCredentials = true;
                break;
            }
        }

        if ($validCredentials) {
            session_start();
            $_SESSION['connecte'] = true;
            header("Location: ../admin.php");
            exit;
        } else {
            $message = "Les identifiants sont invalides.";
        }
    }
    ?>

    <p id="logo">Formulaire de connexion<span id="highlight">.</span></p>

    <div class="all_sign_in">
        <div class="rectangle_connexion">
            <p class="titre">Connexion</p>
            <?php if(isset($message)):?>
                <p class="error" style="color: white; text-align:center;"><?php echo $message;?></p>
            <?php endif; ?>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <input type="text" id="login" name="login" placeholder="Login*" class="connexion-infos" required><br><br>

                <input type="password" id="mdp" name="mdp" placeholder="Mot de passe*" class="connexion-infos" required><br><br>

                <input type="submit" value="Se connecter" class="connexion">
            </form>
        </div>
    </div>


</body>

</html>