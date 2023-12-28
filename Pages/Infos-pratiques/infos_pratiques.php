<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style_infos_pratiques.css">
    <link rel="stylesheet" href="../../Style/style_footer.css">
    <?php include "../../linkStyle.php"; ?>
    <script src="../../Js/script_navfixe.js"></script>
    <script src="../../Js/script_menuBurger.js"></script>
    <script src="https://kit.fontawesome.com/163cbdd365.js" crossorigin="anonymous"></script>
    <title>Infos-pratiques</title>

</head>

<body>

    <?php include "../../navbar.php"; ?>

    <div class="navfixeg">

        <div class="navfixe" id="navfixe">
            <ul>
                <?php if ($_SESSION['langue'] == 'fr') { ?>
                    <li> <a href="#meteo">Météo</a></li>
                    <li> <a href="#saisons">Saisons</a></li>
                    <li> <a href="#conseils">Conseils</a></li>
                    <li> <a href="#comparateurs">Comparateurs</a></li>
                <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                    <li> <a href="#meteo">Weather</a></li>
                    <li> <a href="#saisons">Seasons</a></li>
                    <li> <a href="#conseils">Tips</a></li>
                    <li> <a href="#comparateurs">Comparators</a></li>
                <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                    <li> <a href="#meteo">Clima</a></li>
                    <li> <a href="#saisons">Estaciones</a></li>
                    <li> <a href="#conseils">Consejos</a></li>
                    <li> <a href="#comparateurs">Comparadores</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>

    <?php include "../../langue.php"; ?>

    <?php if ($_SESSION['langue'] == 'fr') { ?>
        <p id="logo">Infos-Pratiques<span id="highlight">.</span></p>
    <?php } elseif ($_SESSION['langue'] == 'en') { ?>
        <p id="logo">Practical-Information<span id="highlight">.</span></p>
    <?php } elseif ($_SESSION['langue'] == 'es') { ?>
        <p id="logo">Información-Práctica<span id="highlight">.</span></p>
    <?php } ?>

    <div class="content-infos-pratiques">
        <div class="meteo" id="meteo">
            <?php if ($_SESSION['langue'] == 'fr') { ?>
                <span class="title">Météo Actuelle</span> <br>
                <div id="ww_9ce0829e75300" v='1.3' loc='id' a='{"t":"horizontal","lang":"fr","sl_lpl":1,"ids":["wl4484"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#FFB300","cl_font":"rgba(255,255,255,1)","cl_cloud":"rgba(255,255,255,1)","cl_persp":"rgba(129,212,250,1)","cl_sun":"rgba(255,193,7,1)","cl_moon":"rgba(15,0,120,1)","cl_thund":"rgba(255,255,255,1)"}'><a href="https://meteolabs.fr/widgets/" id="ww_9ce0829e75300_u" target="_blank">Meteo html</a></div>
                <script async src="https://app1.weatherwidget.org/js/?id=ww_9ce0829e75300"></script>
            <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                <span class="title">Current Weather</span> <br>
                <div id="ww_9ce0829e75300" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":["wl4484"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#FFB300","cl_font":"rgba(255,255,255,1)","cl_cloud":"rgba(255,255,255,1)","cl_persp":"rgba(129,212,250,1)","cl_sun":"rgba(255,193,7,1)","cl_moon":"rgba(15,0,120,1)","cl_thund":"rgba(255,255,255,1)"}'><a href="https://meteolabs.fr/widgets/" id="ww_9ce0829e75300_u" target="_blank">Meteo html</a></div>
                <script async src="https://app1.weatherwidget.org/js/?id=ww_9ce0829e75300"></script>
            <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                <span class="title">Clima Actual</span> <br>
                <div id="ww_9ce0829e75300" v='1.3' loc='id' a='{"t":"horizontal","lang":"es","sl_lpl":1,"ids":["wl4484"],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"#FFB300","cl_font":"rgba(255,255,255,1)","cl_cloud":"rgba(255,255,255,1)","cl_persp":"rgba(129,212,250,1)","cl_sun":"rgba(255,193,7,1)","cl_moon":"rgba(15,0,120,1)","cl_thund":"rgba(255,255,255,1)"}'><a href="https://meteolabs.fr/widgets/" id="ww_9ce0829e75300_u" target="_blank">Meteo html</a></div>
                <script async src="https://app1.weatherwidget.org/js/?id=ww_9ce0829e75300"></script>
            <?php } ?>
        </div>
        <span class="title">
            <?php if ($_SESSION['langue'] == 'fr') { ?>
                Périodes de l'année
            <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                Periods of the year
            <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                Períodos del año
            <?php } ?>
        </span>

        <div class="temps info" id="saisons">
            <div class="saisons">
                <p class="saison_titre">
                    <?php if ($_SESSION['langue'] == 'fr') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Hiver
                    <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Winter
                    <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Invierno
                    <?php } ?>
                </p>
                <ul>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            max : 17°C
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            max: 17°C
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            máx.: 17 °C
                        <?php } ?>
                    </li>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            min : 7°C
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            min: 7°C
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            mín: 7 °C
                        <?php } ?>
                    </li>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            temps : possibilité de pluie max mais généralement ensoleillé.
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            weather: maximum possibility of rain but generally sunny.
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            clima: máxima posibilidad de lluvia pero generalmente soleado.
                        <?php } ?>
                    </li>
                </ul>
            </div>

            <div class="saisons">
                <p class="saison_titre">
                    <?php if ($_SESSION['langue'] == 'fr') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Printemps
                    <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Spring
                    <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Primavera
                    <?php } ?>
                </p>
                <ul>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            max : 25°C
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            max: 25°C
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            máx.: 25°C
                        <?php } ?>
                    </li>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            min : 12°C
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            min: 12°C
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            mín: 12°C
                        <?php } ?>
                    </li>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            temps : très ensoleillé temps doux. Sûrement la meilleur saison pour partir.
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            weather: very sunny mild weather. Surely the best season to go.
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            clima: clima templado muy soleado. Seguramente la mejor temporada para ir.
                        <?php } ?>
                    </li>
                </ul>
            </div>

            <div class="saisons">
                <p class="saison_titre">
                    <?php if ($_SESSION['langue'] == 'fr') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Éte
                    <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Summer
                    <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Verano
                    <?php } ?>
                </p>
                <ul>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            max : 35°C
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            max: 35°C
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            máx.: 35°C
                        <?php } ?>
                    </li>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            min : 20°C
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            min: 20°C
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            mín: 20°C
                        <?php } ?>
                    </li>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            temps : très chaud pratiquement aucune pluie
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            weather: very hot hardly any rain
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            clima: mucho calor apenas llueve
                        <?php } ?>
                    </li>
                </ul>
            </div>

            <div class="saisons">
                <p class="saison_titre">
                    <?php if ($_SESSION['langue'] == 'fr') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Automne
                    <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Fall
                    <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                        <i class="fa-regular fa-snowflake" style="padding-right: 10px;"></i> Otoño
                    <?php } ?>
                </p>
                <ul>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            max : 30°C
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            max: 30°C
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            máx.: 30°C
                        <?php } ?>
                    </li>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            min : 17°C
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            min: 17°C
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            mín: 17°C
                        <?php } ?>
                    </li>
                    <li>
                        <?php if ($_SESSION['langue'] == 'fr') { ?>
                            temps : toujours chaud, pluie en octobre
                        <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                            weather: still sunny, rain in october
                        <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                            clima: siempre cálido, lluvia en octubre
                        <?php } ?>
                    </li>
                </ul>
            </div>

        </div>

        <div class="conseil_compa" id="conseils">
            <div class="conseils info">
                <?php if ($_SESSION['langue'] == 'fr') { ?>
                    <span class=" title">Les meilleurs conseils</span>
                <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                    <span class=" title">The best advice</span>
                <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                    <span class=" title">El mejor consejo</span>
                <?php } ?>
                <div>
                    <?php if ($_SESSION['langue'] == 'fr') { ?>
                        <ol>
                            <li>Comparer sur plusieurs sites de voyages</li>
                            <li>Utilisez les réseaux sociaux pour trouver des offres spéciales et des codes de réduction.
                            </li>
                            <li>Soyez flexibles sur les dates de voyage, vous pouvez souvent trouver des offres plus
                                avantageuses en
                                voyageant en dehors des périodes de pointe.</li>
                        </ol>
                    <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                        <ol>
                            <li>Compare on several travel sites</li>
                            <li>Use social media to find special offers and discount codes.</li>
                            <li>Be flexible with travel dates, you can often find better deals by
                                traveling outside peak periods.</li>
                        </ol>
                    <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                        <ol>
                            <li>Comparar en varios sitios de viajes</li>
                            <li>Use las redes sociales para encontrar ofertas especiales y códigos de descuento.</li>
                            <li>Sea flexible con las fechas de viaje, a menudo puede encontrar mejores ofertas por
                                viajar fuera de los períodos pico.</li>
                        </ol>
                    <?php } ?>
                </div>
            </div>
            <div class="compa info" id="comparateurs">
                <div class="comparateur ">
                    <?php if ($_SESSION['langue'] == 'fr') { ?>
                        <span class="comparateur_titre title">Les meilleurs Comparateurs (liste non exhaustive)</span>
                    <?php } elseif ($_SESSION['langue'] == 'en') { ?>
                        <span class="comparateur_titre title">The best Comparators (non exhaustive list)</span>
                    <?php } elseif ($_SESSION['langue'] == 'es') { ?>
                        <span class="comparateur_titre title">Los mejores comparadores (lista no exhaustiva)</span>
                    <?php } ?>
                    <ul>
                        <li>Trivago</li>
                        <li>Momondo</li>
                        <li>Booking</li>
                        <li>Kayak</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include "../../footer.php"; ?>
    <!-- Main JS -->
    <script src="../../Js/main.js"></script>
</body>

</html>

<script>
    var nav = document.getElementById('navfixe');
</script>