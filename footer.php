<?php
include "connexion.inc.php";

$path = "https://perso-etudiant.u-pem.fr/~leo.dessertenne/Projet-Seville";

echo "
        <footer>
        <a href='$path/Pages/Credits/credits.php' id='credits'>";
        if ($_SESSION['langue'] === 'fr') {
            echo "Crédits";
        } elseif ($_SESSION['langue'] === 'en') {
            echo "Credits";
        } elseif ($_SESSION['langue'] === 'es') {
            echo "Créditos";
        }
        echo "</a>";
        echo "

        <div>
            <a href='https://whc.unesco.org/fr/list/' id='logo_unesco' target='_blank'><img
                    src='$path/Image/UNESCO_logo_white.png' alt=''></a>
            <a href='https://instagram.com/projet_seville?igshid=YmMyMTA2M2Y=' id='instagram' target='_blank'><img
                    src='https://cdn-icons-png.flaticon.com/512/87/87390.png' alt=''></a>
        </div>
        <hr>";
        if ($_SESSION['langue'] === 'fr') {
            echo "<p> Liens utiles :</p>";
        } elseif ($_SESSION['langue'] === 'en') {
            echo "<p> Useful links :</p>";
        } elseif ($_SESSION['langue'] === 'es') {
            echo "<p> Enlaces útiles :</p>";
        }
        echo"
        
        <div class='liens-utiles'>
        ";
        if ($_SESSION['langue'] === 'fr') {
            echo "
            <a href='$path/index.php'>Accueil</a>
            <a href='$path/Pages/Carte/Map.php'>Carte</a>
            <a href='$path/Pages/Parcours/parcours.php'>Parcours</a>
            <a href='$path/Pages/Patrimoine/patrimoine.php'>Patrimoine</a>
            <a href='$path/Pages/Infos-pratiques/infos_pratiques.php'>Infos-Pratiques</a>
            <a href='$path/Pages/a_propos/a_propos.php'>A-Propos</a>";
        } elseif ($_SESSION['langue'] === 'en') {
            echo "
            <a href='$path/index.php'>Home</a>
            <a href='$path/Pages/Carte/Map.php'>Map</a>
            <a href='$path/Pages/Parcours/parcours.php'>Explore Sevilla</a>
            <a href='$path/Pages/Patrimoine/patrimoine.php'>Cultural-Heritage</a>
            <a href='$path/Pages/Infos-pratiques/infos_pratiques.php'>Practical-Information</a>
            <a href='$path/Pages/a_propos/a_propos.php'>About us</a>";
        } elseif ($_SESSION['langue'] === 'es') {
            echo "
            <a href='$path/index.php'>Inicio</a>
            <a href='$path/Pages/Carte/Map.php'>Mapa</a>
            <a href='$path/Pages/Parcours/parcours.php'>Explorar Sevilla</a>
            <a href='$path/Pages/Patrimoine/patrimoine.php'>Patrimonio-Cultural</a>
            <a href='$path/Pages/Infos-pratiques/infos_pratiques.php'>Información-práctica</a>
            <a href='$path/Pages/a_propos/a_propos.php'>Acerca de</a>
            ";
        }    
        echo "
        </div>
        <div class='images'>
            <img src='$path/Image/MCN.png' alt='MCN'>
            <img src='$path/Image/gustave_eiffel.png' alt='logo université gustave eiffel'>
        </div>";
        if ($_SESSION['langue'] === 'fr') {
            echo "<p id='droits'>Léo Dessertenne, Ahmed Galoul, Chamsedine Amouche, Elias Lahlouh, Naël Ait Aissi © 2023 Tous droits réservés.</p>";
        } elseif ($_SESSION['langue'] === 'en') {
            echo "<p id='droits'>Léo Dessertenne, Ahmed Galoul, Chamsedine Amouche, Elias Lahlouh, Naël Ait Aissi © 2023 All rights reserved.</p>";
        } elseif ($_SESSION['langue'] === 'es') {
            echo "<p id='droits'>Léo Dessertenne, Ahmed Galoul, Chamsedine Amouche, Elias Lahlouh, Naël Ait Aissi © 2023 Todos los derechos reservados.</p>";
        }
        echo "<a href='$path/Pages/Admin/connexion/connexion_admin.php' id='connexion-admin'>connexion admin</a>
        </footer>";

?>


