<?php
session_start();
include "connexion.inc.php";

if (!isset($_SESSION['langue'])) {
   $_SESSION['langue'] = 'fr';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['langue'])) {
   $_SESSION['langue'] = $_POST['langue'];
}

if ($_SESSION['langue'] == 'fr') {
   $accueil = "Accueil";
   $carte = "Carte";
   $parcours = "Explorez Séville";
   $patrimoine = "Patrimoine-Culturel";
   $infoPratique = "Infos-Pratiques";
   $Apropos = "A-Propos";
   $histoire = "Histoire";
   $architecture = "Architecture";
   $naturel = "Patrimoine Naturel";
   $urbanisme = "Urbanisme";
} else if ($_SESSION['langue'] == 'en') {
   $accueil = "Home";
   $carte = "Map";
   $parcours = "Explore Sevilla";
   $patrimoine = "Cultural-Heritage";
   $infoPratique = "Practical-Information";
   $Apropos = "About";
   $histoire = "History";
   $architecture = "Architecture";
   $naturel = "Natural-Heritage";
   $urbanisme = "Urbanism";
} else if ($_SESSION['langue'] == 'es') {
   $accueil = "Inicio";
   $carte = "Mapa";
   $parcours = "Explorar Sevilla";
   $patrimoine = "Patrimonio-Cultural";
   $infoPratique = "Información-Práctica";
   $Apropos = "Acerca de";
   $histoire = "Historia";
   $architecture = "Arquitectura";
   $naturel = "Patrimonio Natural";
   $urbanisme = "Urbanismo";
}

$path = "https://etudiant.u-pem.fr/~leo.dessertenne/Projet-Seville";

echo "<div id=\"mySidenav\" class=\"sidenav\">
      <a id=\"closeBtn\" class=\"close\">×</a>
      <ul>
         <li><a href=\"$path/index.php\">$accueil</a></li>
         <li><a href=\"$path/Pages/Carte/Map.php\">$carte</a></li>
         <li><a href=\"$path/Pages/Parcours/parcours.php\">$parcours</a></li>
         <li><a href=\"$path/Pages/Patrimoine/patrimoine.php\">$patrimoine</a></li>
         <li><a href=\"$path/Pages/Infos-pratiques/infos_pratiques.php\">$infoPratique</a></li>
         <li><a href=\"$path/Pages/a_propos/a_propos.php\">$Apropos</a></li>";

         if (isset($_SESSION['connecte'])) {
            if ($_SESSION['connecte']) {
               echo       "<li>
               <a href=\"$path/Pages/Admin/admin.php\" class=\"onglet\">Admin</a>
            </li>";
            }
         }

      echo "</ul>
   </div>

   <a id=\"openBtn\">
      <span class=\"burger-icon\">
         <span></span>
         <span></span>
         <span></span>
      </span>
   </a>

   <script>
      var sidenav = document.getElementById(\"mySidenav\");
      var openBtn = document.getElementById(\"openBtn\");
      var closeBtn = document.getElementById(\"closeBtn\");

      openBtn.onclick = openNav;
      closeBtn.onclick = closeNav;
   </script>";

$query = $cnx->prepare("SELECT DISTINCT quartier FROM seville.parcours");
$query->execute();
$quartiers = $query->fetchAll(PDO::FETCH_COLUMN);

echo "<ul id=\"navbar\" class=\"navbar\">
      <li>
         <a href=\"$path/index.php\" class=\"onglet\">$accueil</a>
      </li>
      

      <li>
         <a href=\"$path/Pages/Carte/Map.php\" class=\"onglet\">$carte</a>
         <ul class=\"submenu\">
         <li> <a href=\"$path/Pages/Carte/quartier/LaCartuja.php\" class=\"sousonglet\">La Cartuja</a></li>
         <hr width=\"100%\">
         <li> <a href=\"$path/Pages/Carte/quartier/Macarena.php\" class=\"sousonglet\">Macarena</a></li>
         <hr width=\"100%\">
         <li> <a href=\"$path/Pages/Carte/quartier/ElCentro.php\" class=\"sousonglet\">El Centro</a></li>
         <hr width=\"100%\">
         <li> <a href=\"$path/Pages/Carte/quartier/SantaCruz.php\" class=\"sousonglet\">Santa Cruz</a></li>
         <hr width=\"100%\">
         <li> <a href=\"$path/Pages/Carte/quartier/ElPorvenir.php\" class=\"sousonglet\">El Porvenir</a></li>
         <hr width=\"100%\">
         <li> <a href=\"$path/Pages/Carte/quartier/ElArenal.php\" class=\"sousonglet\">El Arenal</a></li>
         <hr width=\"100%\">
         <li> <a href=\"$path/Pages/Carte/quartier/Triana.php\" class=\"sousonglet\">Triana</a></li>
         <hr width=\"100%\">
         <li> <a href=\"$path/Pages/Carte/quartier/Nervion.php\" class=\"sousonglet\">Nervión</a></li>
         </ul>
      </li>

      <li>
         <a href=\"$path/Pages/Parcours/parcours.php\" class=\"onglet\">$parcours</a>
         <ul class=\"submenu\">";
foreach ($quartiers as $index => $quartier) {
   echo "<li>
    <form action=\"$path/Pages/Parcours/plus/enSavoirPlus.php\" method='POST'>
    <input type='hidden' name='quartier' value='$quartier'>
    <input class=\"submit\" type='submit' value='$quartier'>
    </form>
   </li>";
   if ($index !== count($quartiers) - 1) {
      echo "<hr width=\"100%\">";
   }
}
echo "</ul>
      </li>

      <li>
         <a href=\"$path/Pages/Patrimoine/patrimoine.php\" class=\"onglet\">$patrimoine</a>
         <ul class=\"submenu\">
            <li>
               <a href=\"$path/Pages/Patrimoine/Histoire/pageHistoire.php\" class=\"sousonglet\">$histoire</a>
            </li>
            <hr width=\"100%\">
            <li>
               <a href=\"$path/Pages/Patrimoine/Architecture/pageArchitecture.php\" class=\"sousonglet\">$architecture</a>
            </li>
            <hr width=\"100%\">
            <li>
               <a href=\"$path/Pages/Patrimoine/Patrimoine_naturel/patrimoine_naturel.php\" class=\"sousonglet\">$naturel</a>
            </li>
            <hr width=\"100%\">
            <li>
               <a href=\"#\" class=\"sousonglet\">$urbanisme</a>
            </li>
         </ul>
      </li>

      <li>
         <a href=\"$path/Pages/Infos-pratiques/infos_pratiques.php\" class=\"onglet\">$infoPratique</a>
      </li>

      <li>
         <a href=\"$path/Pages/a_propos/a_propos.php\" class=\"onglet\">$Apropos</a>
      </li>

      ";
if (isset($_SESSION['connecte'])) {
   if ($_SESSION['connecte']) {
      echo       "<li>
      <a href=\"$path/Pages/Admin/admin.php\" class=\"onglet\">Admin</a>
   </li>";
   }
}
echo " </ul>";
