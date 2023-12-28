<?php
session_start();
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Style/style_footer.css">
    <?php include "../../linkStyle.php"; ?>
    <script src="../../Js/script_navfixe.js"></script>
    <script src="../../Js/script_menuBurger.js"> </script>
    <link rel="stylesheet" href="Style/style_Map.css">
    <?php if ($_SESSION['langue'] == 'fr'): ?>
        <title>Carte de Séville</title>
    <?php endif; ?>
    <?php if ($_SESSION['langue'] == 'en'): ?>
        <title>Map of Seville</title>
    <?php endif; ?>
    <?php if ($_SESSION['langue'] == 'es'): ?>
        <title>Mapa de Sevilla</title>
    <?php endif; ?>
    <?php
    session_abort();
    ?>
</head>

<body>
    <?php include "../../navbar.php"; ?>

    <div class="navfixeg">

        <div class="navfixe" id="navfixe">
            <ul>
                <li> <a href="quartier/LaCartuja.php">La Cartuja</a></li>
                <li> <a href="quartier/Macarena.php">Macarena</a></li>
                <li> <a href="quartier/ElCentro.php">El Centro</a></li>
                <li> <a href="quartier/SantaCruz.php">Santa Cruz</a></li>
                <li> <a href="quartier/ElPorvenir.php">El Porvenir</a></li>
                <li> <a href="quartier/ElArenal.php">El Arenal</a></li>
                <li> <a href="quartier/Triana.php">Triana</a></li>
                <li> <a href="quartier/Nervion.php">Nervión</a></li>
            </ul>
        </div>
    </div>

    <?php include "../../langue.php"; ?>



    </div>

    <?php if ($_SESSION['langue'] == 'fr'): ?>
        <!-- Si la langue choisie est français -->
        <p id="logo">Carte<span id="highlight">.</span></p>
    <?php endif; ?>

    <?php if ($_SESSION['langue'] == 'en'): ?>
        <!-- Si la langue choisie est anglais -->
        <p id="logo">Map<span id="highlight">.</span></p>
    <?php endif; ?>

    <?php if ($_SESSION['langue'] == 'es'): ?>
        <!-- Si la langue choisie est espagnol -->
        <p id="logo">Mapa<span id="highlight">.</span></p>
    <?php endif; ?>

    <div class="big-cont-map">

        <div class="cont-carte">
            <img src="./Image/CarteSeville.jpg" style="border-radius: 20px;" usemap="#image-map" class="img-map">
        </div>

        <div class="container_maptxt">
            <?php if ($_SESSION['langue'] == 'fr'): ?>
                <!-- Si la langue choisie est français -->

                <SPAN class="Texte">Séville est une ville captivante, composée de 8 quartiers principaux offrant chacun leur
                    propre charme et atmosphère. Nous vous recommandons vivement d'explorer plusieurs de ces quartiers lors
                    de
                    votre séjour. Voici une liste des quartiers incontournables à Séville :<br><br>
                    <UL class="quartiers_lst">
                        <li>La Cartuja : Un quartier unique où l'ancien monastère se mêle à l'architecture moderne. Profitez
                            de
                            ses espaces verts et de ses musées.</li>
                        <li>Macarena : Un quartier authentique imprégné de traditions andalouses. Découvrez ses ruelles
                            pittoresques et son ambiance animée.</li>
                        <li>El Centro : Le cœur commerçant de Séville. Plongez dans une atmosphère vibrante grâce à ses
                            boutiques, ses restaurants et ses places animées.</li>
                        <li>Santa Cruz : Un quartier chargé d'histoire et de charme. Perdez-vous dans ses ruelles étroites,
                            découvrez ses patios fleuris et explorez le magnifique Alcazar.</li>
                        <li>El Porvenir : Un quartier verdoyant, réputé pour ses nombreux parcs et jardins. Profitez d'une
                            atmosphère paisible et détendue, propice à la promenade et à la détente.</li>
                        <li>El Arenal : Un quartier dynamique situé près du fleuve Guadalquivir. Découvrez ses nombreux bars
                            à
                            tapas, ses théâtres et son ambiance nocturne animée.</li>
                        <li>Triana : Un quartier emblématique de Séville, réputé pour son caractère flamenco et ses
                            céramiques
                            traditionnelles. Explorez ses rues animées, visitez le marché local et assistez à un spectacle
                            de
                            flamenco.</li>
                        <li>Nervión : Un quartier moderne et résidentiel, abritant le stade du FC Séville. Profitez de ses
                            espaces verts, de ses centres commerciaux et de son ambiance paisible.</li>
                    </UL><br>
                    Chacun de ces quartiers offre une expérience unique et vous trouverez certainement celui qui correspond
                    à
                    vos préférences. N'hésitez pas à cliquer sur l'un des quartiers de la carte située à gauche pour obtenir
                    toutes les informations détaillées sur le quartier de votre choix. Que vous recherchiez de l'animation
                    ou du
                    calme, Séville a tout ce qu'il faut pour rendre votre séjour mémorable.
                </SPAN>
            <?php endif; ?>
            <?php if ($_SESSION['langue'] == 'en'): ?>
                <!-- Si la langue choisie est anglais -->
                <SPAN class="Texte">Sevilla is a captivating city, made up of 8 main districts, each with its own charm and
                    atmosphere. We strongly recommend that you explore several of these districts during your stay. Here is
                    a
                    list of the must-see districts in Sevilla:<br><br>
                    <UL class="quartiers_lst">
                        <li>La Cartuja: A unique district where the ancient monastery blends with modern architecture. Enjoy
                            its green spaces and museums.</li>
                        <li>Macarena: An authentic neighborhood steeped in Andalusian traditions. Discover its picturesque
                            alleys and lively atmosphere.</li>
                        <li>El Centro: Sevilla's shopping heart. Immerse yourself in the vibrant atmosphere of its
                            boutiques, restaurants and lively squares.</li>
                        <li>Santa Cruz: A neighborhood steeped in history and charm. Escape yourself to his narrow streets,
                            discover his flower-filled patios and explore the magnificent Alcazar.</li>
                        <li>El Porvenir: A verdant neighborhood, renowned for its many parks and gardens. Enjoy a peaceful
                            and
                            relaxed atmosphere, perfect for strolling and relaxing.</li>
                        <li>El Arenal: A lively district on the banks of the Guadalquivir River. Discover its many tapas
                            bars,
                            theaters and lively nightlife.</li>
                        <li>Triana: An emblematic district of Sevilla, renowned for its flamenco character and traditional
                            ceramics. Explore its lively streets, visit the local market and take in a flamenco show.</li>
                        <li>Nervión: A modern, residential neighborhood, home to the FC Sevilla stadium. Enjoy its green
                            spaces,
                            shopping centers and peaceful atmosphere.</li>
                    </UL><br>
                    Each of these neighborhoods offers a unique experience, and you're sure to find one that suits your
                    preferences. Feel free to click on any of the neighborhoods on the map to the left for detailed
                    information
                    on the area of your choice. Whether you're looking for excitement or peace and quiet, Sevilla has
                    everything
                    you need to make your stay a memorable one.
                </SPAN>
            <?php endif; ?>
            <?php if ($_SESSION['langue'] == 'es'): ?>
                <!-- Si la langue choisie est espagnol -->
                <SPAN class="Texte">Sevilla es una ciudad cautivadora, compuesta por 8 distritos principales, cada uno con
                    su
                    propio encanto y ambiente. Le recomendamos encarecidamente que explore varios de estos barrios durante
                    su
                    estancia. Aquí tiene una lista de los barrios imprescindibles de Sevilla:<br><br><br>
                    <UL class="quartiers_lst">
                        <li>La Cartuja: Un distrito único donde el antiguo monasterio se mezcla con la arquitectura moderna.
                            Disfrute de sus zonas verdes y museos.</li>
                        <li>Macarena: Un distrito auténtico impregnado de tradiciones andaluzas. Descubra sus pintorescas
                            calles
                            y su animado ambiente.</li>
                        <li>El Centro: El corazón comercial de Sevilla. Sumérjase en el vibrante ambiente de sus tiendas,
                            restaurantes y animadas plazas.</i></li>
                        <li>Santa Cruz: Un distrito cargado de historia y encanto. Piérdase por sus callejuelas, descubra
                            sus
                            patios llenos de flores y explore el magnífico Alcázar.</i></li>
                        <li>El Porvenir : Un distrito frondoso conocido por sus numerosos parques y jardines. Disfrute de un
                            ambiente tranquilo y relajado, perfecto para pasear y descansar.</li>
                        <li>El Arenal: Un distrito vibrante situado cerca del río Guadalquivir. Descubra sus numerosos bares
                            de
                            tapas, teatros y animada vida nocturna.</li>
                        <li>Triana: Distrito emblemático de Sevilla, conocido por su carácter flamenco y su cerámica
                            tradicional. Explore sus animadas calles, visite el mercado local y asista a un espectáculo
                            flamenco.</li>
                        <li>Nervión: Distrito moderno y residencial, sede del estadio del FC Sevilla. Disfrute de sus zonas
                            verdes, centros comerciales y ambiente tranquilo.</li>
                    </UL><br>
                    Cada uno de estos distritos ofrece una experiencia única, y seguro que encontrará uno que se adapte a
                    sus
                    preferencias. No dude en hacer clic en cualquiera de los barrios del mapa de la izquierda para conocer
                    todos
                    los detalles de la zona de su elección. Tanto si busca emoción como tranquilidad, Sevilla tiene todo lo
                    que
                    necesita para que su estancia sea memorable.
                </SPAN>
            <?php endif; ?>


        </div>

    </div>



    <map name="image-map">
        <area target="" alt="LaCartuja" title="LaCartuja" href="quartier/LaCartuja.php"
            coords="147,12,338,13,285,97,256,142,223,180,203,216,185,239,167,262,155,287,154,299,149,304,147,320,154,327,156,343,81,353,83,318"
            shape="poly">
        <area target="" alt="Triana" title="Triana" href="quartier/Triana.php"
            coords="118,355,155,349,190,384,212,413,240,439,269,479,274,491,173,556,132,493,132,481,109,449,105,418"
            shape="poly">
        <area target="" alt="Macarena" title="Macarena" href="quartier/Macarena.php"
            coords="195,302,322,281,432,284,454,245,450,224,420,206,405,178,381,160,364,160,298,152,283,161,230,231,200,286"
            shape="poly">
        <area target="" alt="ElCentro" title="ElCentro" href="quartier/ElCentro.php"
            coords="194,305,215,382,220,389,262,344,305,381,304,395,318,393,318,331,423,331,425,306,432,285,325,282"
            shape="poly">
        <area target="" alt="ElArenal" title="ElArenal" href="quartier/ElArenal.php"
            coords="220,390,263,345,303,382,316,464,295,479" shape="poly">
        <area target="" alt="SantaCruz" title="SantaCruz" href="quartier/SantaCruz.php"
            coords="320,332,424,334,422,351,406,399,373,482,318,463,307,398,319,395" shape="poly">
        <area target="" alt="ElPorvenir" title="ElPorvenir" href="quartier/ElPorvenir.php"
            coords="297,480,319,465,484,520,477,543,493,652,391,677" shape="poly">
        <area target="" alt="Nervion" title="Nervion" href="quartier/Nervion.php"
            coords="470,509,471,441,489,393,642,389,633,471,630,526,615,570,532,541" shape="poly">
    </map>







    <?php include "../../footer.php"; ?>
            

    <script src="../../Js/mapresizer-min.js"></script>
    <script>
        imageMapResize();
    </script>
</body>

</html>

<script>
    var nav = document.getElementById('navfixe');
</script>