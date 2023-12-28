<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style_infos_pratiques.css">
    <link rel="stylesheet" href="../../Style/style_footer.css">
    <link rel="stylesheet" href="style_credits.css">
    <?php include "../../linkStyle.php"; ?>
    <script src="../script_navfixe.js"></script>
    <script src="../script_menuBurger.js"></script>
    <script src="https://kit.fontawesome.com/163cbdd365.js" crossorigin="anonymous"></script>
    <title>Credits</title>

</head>

<body>

    <?php include "../../navbar.php"; ?>

    <div class="navfixeg">

        <div class="navfixe" id="navfixe">
            <ul>
                <?php
                if ($_SESSION['langue'] === 'fr') {
                    echo '<li><a href="#titre-seville">Crédits</a></li>';
                } elseif ($_SESSION['langue'] === 'en') {
                    echo '<li><a href="#titre-seville">Credits</a></li>';
                } elseif ($_SESSION['langue'] === 'es') {
                    echo '<li><a href="#titre-seville">Créditos</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>

    <?php include '../../langue.php';?>
    <?php
        if ($_SESSION['langue'] === 'fr') {
            echo '<p id="logo">Crédits<span id="highlight">.</span></p>';
        } elseif ($_SESSION['langue'] === 'en') {
            echo '<p id="logo">Credits<span id="highlight">.</span></p>';
        } elseif ($_SESSION['langue'] === 'es') {
            echo '<p id="logo">Créditos<span id="highlight">.</span></p>';
        }
    ?>

<section class="centered-section">
        <?php
        if ($_SESSION['langue'] === 'fr') {
            echo '
            <h2>Images libre de droit</h2>
            <ul>
                <li><a href="https://unsplash.com/fr/photos/62QRdDoe44M">Image De fond de l\'accueil - Henrique Ferreira Unsplash</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Amphith%C3%A9%C3%A2tre_d%27Italica_02.jpg">epoque pre romaine</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Niculoso_Alcazar_Seville.jpg">conquete wisigoth</a></li>
                <li><a href="https://pxhere.com/fr/photo/1013757">conquete arabe</a></li>
                <li><a href="https://www.espagne-facile.com/cathedrales-espagne/3322/">conquete chretienne</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Barcos_Sevilla_2022.jpg">essor commercial</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Escalier_des_Archives_G%C3%A9n%C3%A9rales_des_Indes_%288282622297%29.jpg">archives generales</a></li>
                <li><a href="https://fr.wikipedia.org/wiki/Giralda_de_Badajoz">regionalisme</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Sevilla_Spain_Pabellon-Mud%C3%A9jar-01.jpg">architecture mudejare</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:MetropolParasol4.JPG">metropol parasol</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Sevilla_Cathedral_-_Giralda.jpg">giralda</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Alc%C3%A1zar_of_Seville_2.JPG">alcazar</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Parque_de_Maria_Luisa,_Sevilla.jpg">parc maria luisa</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Plaza_de_Espa%C3%B1a_%28Sevilla%29_-_01.jpg">plaza de espana</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Plaza_de_Toros_de_la_Maestranza.jpg">plaza de toros</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Casa_de_Pilatos-Sevilla.jpg">casa de pilatos</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:SevillaBarrioDeSantaCruz04.jpg">quartier de santa cruz</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Triana_et_la_Calle_Betis.JPG">quartier de triana</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Parque_de_los_Pr%C3%ADncipes_-_Metro_de_Sevilla.jpg">parc de los principes</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:El_Arenal_desde_calle_Betis.JPG">quartier d\'el arenal</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Puerta_de_la_Macarena_%281%29.jpg">quartier de la macarena</a></li>
            </ul>
            <h2>Carte Interactive</h2>
            <ul>
            <li><a href="https://github.com/davidjbradshaw/image-map-resizer">Script Java Script pour créer une carte responsive et intéractive</a></li>
            <li><a href="umap.openstreetmap.fr">Carte réalisé grâce au site umap</a></li>
            <h2>Notre université</h2>
            <ul>
                <li><a href="https://www.univ-gustave-eiffel.fr">Université Gustave Eiffel</a></li>
            </ul>
            <h2>PHP Mailer</h2>
            <ul>
            <li><a href="https://github.com/PHPMailer/PHPMailer">PHP Mailer</a></li>
            </ul>
            <h2>Informations sur les quartiers</h2>
            <ul>
            <li><a href="https://www.veoapartment.com/fr/seville/quartier-centro.html">Veoapartement</a></li>
            <li><a href="https://visiter-seville.fr/ou-dormir-seville-quartier/">visiter-seville</a></li>
            </ul>';
        } elseif ($_SESSION['langue'] === 'en') {
            echo '
            <h2>Royalty-free images</h2>
            <ul>
                <li><a href="https://unsplash.com/fr/photos/62QRdDoe44M">Home background image - Henrique Ferreira Unsplash</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Amphith%C3%A9%C3%A2tre_d%27Italica_02.jpg">pre-Roman period</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Niculoso_Alcazar_Seville.jpg">conquete wisigoth</a></li>
                <li><a href="https://pxhere.com/fr/photo/1013757">Arab conquest</a></li>
                <li><a href="https://www.espagne-facile.com/cathedrales-espagne/3322/">christian conquest</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Barcos_Sevilla_2022.jpg">essor commercial</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Escalier_des_Archives_G%C3%A9n%C3%A9rales_des_Indes_%288282622297%29.jpg">generales archives</a></li>
                <li><a href="https://fr.wikipedia.org/wiki/Giralda_de_Badajoz">regionalism</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Sevilla_Spain_Pabellon-Mud%C3%A9jar-01.jpg">architecture mudejare</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:MetropolParasol4.JPG">metropol parasol</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Sevilla_Cathedral_-_Giralda.jpg">giralda</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Alc%C3%A1zar_of_Seville_2.JPG">alcazar</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Parque_de_Maria_Luisa,_Sevilla.jpg">park maria luisa</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Plaza_de_Espa%C3%B1a_%28Sevilla%29_-_01.jpg">plaza de espana</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Plaza_de_Toros_de_la_Maestranza.jpg">plaza de toros</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Casa_de_Pilatos-Sevilla.jpg">casa de pilatos</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:SevillaBarrioDeSantaCruz04.jpg">district de santa cruz</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Triana_et_la_Calle_Betis.JPG">district de triana</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Parque_de_los_Pr%C3%ADncipes_-_Metro_de_Sevilla.jpg">park de los principes</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:El_Arenal_desde_calle_Betis.JPG">district el arenal</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Puerta_de_la_Macarena_%281%29.jpg">district macarena</a></li>
            </ul>
            <h2>Interactive Map</h2>
            <ul>
            <li><a href="https://github.com/davidjbradshaw/image-map-resizer">Java Script Script to create a responsive and interactive map</a></li>
            <li><a href="umap.openstreetmap.fr">Map made with umap</a></li>
            <h2>Our university</h2>
            <ul>
                <li><a href="https://www.univ-gustave-eiffel.fr">University Gustave Eiffel</a></li>
            </ul>
            <h2>PHP Mailer</h2>
            <ul>
            <li><a href="https://github.com/PHPMailer/PHPMailer">PHP Mailer</a></li>
            </ul>
            <h2>Neighborhood information</h2>
            <ul>
            <li><a href="https://www.veoapartment.com/fr/seville/quartier-centro.html">Veoapartement</a></li>
            <li><a href="https://visiter-seville.fr/ou-dormir-seville-quartier/">visiter-seville</a></li>
            </ul>';
        } elseif ($_SESSION['langue'] === 'es') {
            echo '
            <h2>Imágenes libres de derechos</h2>
            <ul>
                <li><a href="https://unsplash.com/fr/photos/62QRdDoe44M">Inicio imagen de fondo - Henrique Ferreira Unsplash</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Amphith%C3%A9%C3%A2tre_d%27Italica_02.jpg">periodo prerromano</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Niculoso_Alcazar_Seville.jpg">conquete wisigoth</a></li>
                <li><a href="https://pxhere.com/fr/photo/1013757">Conquista árabe</a></li>
                <li><a href="https://www.espagne-facile.com/cathedrales-espagne/3322/">conquista cristiana</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Barcos_Sevilla_2022.jpg">desarrollo comercial</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Escalier_des_Archives_G%C3%A9n%C3%A9rales_des_Indes_%288282622297%29.jpg">archivos generales</a></li>
                <li><a href="https://fr.wikipedia.org/wiki/Giralda_de_Badajoz">regionalismo</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Sevilla_Spain_Pabellon-Mud%C3%A9jar-01.jpg">arquitectura mudejare</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:MetropolParasol4.JPG">parasol metropolitano</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Sevilla_Cathedral_-_Giralda.jpg">giralda</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Alc%C3%A1zar_of_Seville_2.JPG">alcazar</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Parque_de_Maria_Luisa,_Sevilla.jpg">parque maria luisa</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Plaza_de_Espa%C3%B1a_%28Sevilla%29_-_01.jpg">plaza de espana</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Plaza_de_Toros_de_la_Maestranza.jpg">plaza de toros</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Casa_de_Pilatos-Sevilla.jpg">casa de pilatos</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:SevillaBarrioDeSantaCruz04.jpg">distrito de santa cruz</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Triana_et_la_Calle_Betis.JPG">distrito de triana</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Parque_de_los_Pr%C3%ADncipes_-_Metro_de_Sevilla.jpg">parque de los principes</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:El_Arenal_desde_calle_Betis.JPG">distrito del arenal</a></li>
                <li><a href="https://commons.wikimedia.org/wiki/File:Puerta_de_la_Macarena_%281%29.jpg">distrito de la macarena</a></li>
            </ul>
            <h2>Carte Interactive</h2>
            <ul>
            <li><a href="https://github.com/davidjbradshaw/image-map-resizer">Java Script para crear un mapa interactivo y con capacidad de respuesta</a></li>
            <li><a href="umap.openstreetmap.fr">Mapa realizado con el sitio web umap</a></li>
            <h2>Nuestra universidad</h2>
            <ul>
                <li><a href="https://www.univ-gustave-eiffel.fr">Universidad Gustave Eiffel</a></li>
            </ul>
            <h2>PHP Mailer</h2>
            <ul>
            <li><a href="https://github.com/PHPMailer/PHPMailer">PHP Mailer</a></li>
            </ul>
            <h2>Informations sur les quartiers</h2>
            <ul>
            <li><a href="https://www.veoapartment.com/fr/seville/quartier-centro.html">Veoapartement</a></li>
            <li><a href="https://visiter-seville.fr/ou-dormir-seville-quartier/">visiter-seville</a></li>
            </ul>';
        }
        ?>


</section>

    
    <?php include "../../footer.php"; ?>
    <!-- Main JS -->
    <script src="../../Js/main.js"></script>
</body>

</html>

<script>
var nav = document.getElementById('navfixe');
</script>