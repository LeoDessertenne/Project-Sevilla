<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./Style/style_a_propos.css">
   <link rel="stylesheet" href="./Style/loading.css">
   <?php include "../../linkStyle.php"; ?>
   <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
   <script src="../../Js/script_navfixe.js"></script>
   <script src="../../Js/script_menuBurger.js"></script>
   <title>A Propos</title>
</head>

<body>
   <?php include "../../navbar.php"; ?>

   <div class="navfixeg">

      <div class="navfixe" id="navfixe">
         <ul>
            <?php if ($_SESSION['langue'] == 'fr') { ?>
               <li> <a href="#presentation-projet">Présentation </a></li>
               <li> <a href="#but-projet">But</a></li>
               <li> <a href="#notre-equipe">Notre équipe</a></li>
               <li> <a href="#nous-contacter">Nous contacter</a></li>
            <?php } elseif ($_SESSION['langue'] == 'en') { ?>
               <li> <a href="#presentation-projet">Presentation </a></li>
               <li> <a href="#but-projet">Goal</a></li>
               <li> <a href="#notre-equipe">The team</a></li>
               <li> <a href="#nous-contacter">Contact us</a></li>
            <?php } elseif ($_SESSION['langue'] == 'es') { ?>
               <li> <a href="#presentation-projet">Presentación </a></li>
               <li> <a href="#but-projet">Objetivo</a></li>
               <li> <a href="#notre-equipe">Nuestro equipo</a></li>
               <li> <a href="#nous-contacter">Contactarnos</a></li>
            <?php } ?>
         </ul>
      </div>
   </div>

   <?php include "../../langue.php"; ?>

   </div>


   <?php if ($_SESSION['langue'] == 'fr') { ?>
      <p id="logo">A Propos<span id="highlight">.</span></p>
   <?php } elseif ($_SESSION['langue'] == 'en') { ?>
      <p id="logo">About<span id="highlight">.</span></p>
   <?php } elseif ($_SESSION['langue'] == 'es') { ?>
      <p id="logo">Acerca de<span id="highlight">.</span></p>
   <?php } ?>
   <div class="all">
      <section class="droite">
         <?php if ($_SESSION['langue'] == 'fr') { ?>
            <h2 id="presentation-projet">Présentation du projet</h2>
            <p>
               Notre équipe composée de Léo Dessertenne, Chamsedine Amouche, Ahmed Galoul, Elias Lahlouh et Nael Ait
               Assi avait pour projet de première année de BUT Informatique de créer un site internet qui promeut la
               culture d'une ville sur une sélection proposée. Nous avons choisi la ville de Séville, car elle est
               riche en culture, avec différentes époques, religions et nations. Ce projet a une durée de 10 mois et
               est réalisé en partenariat avec l'UNESCO, une grande organisation implantée dans le monde entier. Ce
               partenariat avec l'UNESCO nous a permis d'accéder à leurs bases de données.
            </p>
         <?php } elseif ($_SESSION['langue'] == 'en') { ?>
            <h2 id="presentation-projet">Presentation of the project</h2>
            <p>
               Our team, made up of Léo Dessertenne, Chamsedine Amouche, Ahmed Galoul, Elias Lahlouh and Nael Ait Assi,
               had a first-year BUT Informatique project to create a website promoting the culture of a selected city.
               We chose the city of Seville, as it is rich in culture, with different eras, religions and nations. The
               project will last 10 months and is being carried out in partnership with UNESCO, a major organisation
               with a worldwide presence. This partnership with UNESCO has given us access to their databases.
            </p>
         <?php } elseif ($_SESSION['langue'] == 'es') { ?>
            <h2 id="presentation-projet">Presentación del proyecto</h2>
            <p>
               Nuestro equipo, formado por Léo Dessertenne, Chamsedine Amouche, Ahmed Galoul, Elias Lahlouh y Nael Ait
               Assi, tenía como proyecto de primer año de BUT Informatique crear un sitio web que promoviera la cultura
               de una ciudad seleccionada. Elegimos la ciudad de Sevilla, ya que es rica en cultura, con diferentes
               épocas, religiones y naciones. El proyecto durará 10 meses y se lleva a cabo en colaboración con la
               UNESCO, una gran organización con presencia en todo el mundo. Esta asociación con la UNESCO nos ha
               permitido acceder a sus bases de datos.
            </p>
         <?php } ?>
      </section>
      <section class="gauche">
         <?php if ($_SESSION['langue'] == 'fr') { ?>
            <h2 id="but-projet">But du projet UNESCO</h2>
            <p>
               <i> "notre ambition est de créer et de mettre en œuvre un
                  dispositif pédagogique qui envisage une professionnalisation accrue de nos étudiants
                  mais qui offre également une ouverture culturelle dépassant le seul cadre institutionnel
                  des établissements d’enseignement supérieur et de recherche."</i> <br><br>
               <b>FORUM UNESCO - 18/05/2015</b>
            </p>
         <?php } elseif ($_SESSION['langue'] == 'en') { ?>
            <h2 id="but-projet">Aim of the UNESCO project</h2>
            <p>
               <i>"our ambition is to create and implement an educational
                  which aims to increase the professionalism of our students, but which also offers
                  but which also offers a cultural perspective that goes beyond the institutional framework of higher
                  education and research establishments".
                  of higher education and research establishments".</i> <br><br>
               <b>UNESCO FORUM - 18/05/2015</b>
            </p>
         <?php } elseif ($_SESSION['langue'] == 'es') { ?>
            <h2 id="but-projet">Objetivo del proyecto de la UNESCO</h2>
            <p>
               <i>"nuestra ambición es crear y poner en práctica un sistema educativo
                  que pretende aumentar la profesionalidad de nuestros estudiantes, pero que también ofrece
                  pero que también ofrece una perspectiva cultural que va más allá del marco institucional de los
                  centros de enseñanza superior e investigación".
                  de los centros de enseñanza superior e investigación".</i> <br><br>
               <b>FORO DE LA UNESCO - 18/05/2015</b>
            </p>
         <?php } ?>
      </section>

      <?php if ($_SESSION['langue'] == 'fr') { ?>
         <h2 id="notre-equipe">Notre Équipe</h2>
      <?php } elseif ($_SESSION['langue'] == 'en') { ?>
         <h2 id="notre-equipe">The Team</h2>
      <?php } elseif ($_SESSION['langue'] == 'es') { ?>
         <h2 id="notre-equipe">Nuestro Équipo</h2>
      <?php } ?>

      <div class="membres">
         <div class="membre">
            <img class="photo-membre" src="./Image/elias.lahlouh.png" alt="">
            <div class="nom-membre">Elias Lahlouh</div>
            <?php if ($_SESSION['langue'] == 'fr') { ?>
               <div class="role">Chef de projet</div>
            <?php } elseif ($_SESSION['langue'] == 'en') { ?>
               <div class="role">Project Manager</div>
            <?php } elseif ($_SESSION['langue'] == 'es') { ?>
               <div class="role">Jefe de Proyecto</div>
            <?php } ?>
            <div class="flex-contact">
               <a href="https://github.com/Eliaslhl" target="_blank"><img src="./Image/github.png" alt=""></a>
               <a href="https://www.linkedin.com/in/elias-lahlouh-1332a1243/" target="_blank"><img src="./Image/linkedin.png" alt=""></a>
               <a href="mailto:eliaslahlouh@gmail.com" target="_blank"><img src="./Image/mail.png" alt=""></a>
            </div>
         </div>

         <div class="membre">
            <img class="photo-membre" src="./Image/chamsedine.amouche.jpg" alt="">
            <div class="nom-membre">Chamsedine Amouche</div>
            <?php if ($_SESSION['langue'] == 'fr') { ?>
               <div class="role">Designeur</div>
            <?php } elseif ($_SESSION['langue'] == 'en') { ?>
               <div class="role">Designer</div>
            <?php } elseif ($_SESSION['langue'] == 'es') { ?>
               <div class="role">Diseñador</div>
            <?php } ?>
            <div class="flex-contact">
               <a href="https://github.com/ChamsedineAmouche" target="_blank"><img src="./Image/github.png" alt=""></a>
               <a href="https://www.linkedin.com/in/chamsedine-amouche-192022239/" target="_blank"><img src="./Image/linkedin.png" alt=""></a>
               <a href="mailto:amouche.chamsedine@gmail.com" target="_blank"><img src="./Image/mail.png" alt=""></a>
            </div>
         </div>

         <div class="membre">
            <img class="photo-membre" src="./Image/ahmed.galoul.png" alt="">
            <div class="nom-membre">Ahmed Galoul</div>
            <?php if ($_SESSION['langue'] == 'fr') { ?>
               <div class="role">Chargé de communication</div>
            <?php } elseif ($_SESSION['langue'] == 'en') { ?>
               <div class="role">Communications Manager</div>
            <?php } elseif ($_SESSION['langue'] == 'es') { ?>
               <div class="role">Responsable de comunicación</div>
            <?php } ?>
            <div class="flex-contact">
               <a href="https://github.com/AhmedGaloul" target="_blank"><img src="./Image/github.png" alt=""></a>
               <a href="https://www.linkedin.com/in/ahmed-galoul-08808326b/" target="_blank"><img src="./Image/linkedin.png" alt=""></a>
               <a href="mailto:ahmed.gbba@gmail.com" target="_blank"><img src="./Image/mail.png" alt=""></a>
            </div>
         </div>

         <div class="membre">
            <img class="photo-membre" src="./Image/leo.dessertenne.jpg" alt="">
            <div class="nom-membre">Léo Dessertenne</div>
            <?php if ($_SESSION['langue'] == 'fr') { ?>
               <div class="role">Finisseur</div>
            <?php } elseif ($_SESSION['langue'] == 'en') { ?>
               <div class="role">Completer</div>
            <?php } elseif ($_SESSION['langue'] == 'es') { ?>
               <div class="role">Finalizador</div>
            <?php } ?>
            <div class="flex-contact">
               <a href="https://github.com/LeoDessertenne" target="_blank"><img src="./Image/github.png" alt=""></a>
               <a href="https://www.linkedin.com/in/leo-dessertenne-3a571425b/" target="_blank"><img src="./Image/linkedin.png" alt=""></a>
               <a href="mailto:leodesse2@gmail.com" target="_blank"><img src="./Image/mail.png" alt=""></a>
            </div>
         </div>

         <div class="membre">
            <img class="photo-membre" src="./Image/nael.aitaissi.png" alt="">
            <div class="nom-membre">Naël Ait Aissi</div>
            <?php if ($_SESSION['langue'] == 'fr') { ?>
               <div class="role">Support</div>
            <?php } elseif ($_SESSION['langue'] == 'en') { ?>
               <div class="role">Supporter</div>
            <?php } elseif ($_SESSION['langue'] == 'es') { ?>
               <div class="role">Soporte</div>
            <?php } ?>
            <div class="flex-contact">
               <a href="https://github.com/Nael2222" target="_blank"><img src="./Image/github.png" alt=""></a>
               <a href="https://www.linkedin.com/in/na%C3%ABl-ait-aissi-66a11026b/" target="_blank"><img src="./Image/linkedin.png" alt=""></a>
               <a href="mailto:noumnoum222@gmail.com" target="_blank"><img src="./Image/mail.png" alt=""></a>
            </div>
         </div>
      </div>
      <br><br>
      <?php if ($_SESSION['langue'] == 'fr') { ?>
         <h2 id="nous-contacter">Pour envoyer un message à notre équipe</h2>
      <?php } elseif ($_SESSION['langue'] == 'en') { ?>
         <h2 id="nous-contacter">To send a message to our team</h2>
      <?php } elseif ($_SESSION['langue'] == 'es') { ?>
         <h2 id="nous-contacter">Para enviar un mensaje a nuestro equipo</h2>
      <?php } ?>
   </div>
   <div class="content">

      <form action="envoyer_mail.php" method="post" enctype="application/x-www-form-urlencoded" name="formulaire" class="contactform">

         <div class="iconblock">

            <?php

            if ($_SESSION['langue'] == 'fr') {
               $nom = "Nom";
               $prenom = "Prénom";
               $objet = "Objet";
               $message = "Message";
               $envoyer = "Envoyer";
            } elseif ($_SESSION['langue'] == 'en') {
               $nom = "Name";
               $prenom = "First name";
               $objet = "Subject";
               $message = "Message";
               $envoyer = "Send";
            } elseif ($_SESSION['langue'] == 'es') {
               
               $nom = "Nombre";
               $prenom = "Apellido";
               $objet = "Objeto";
               $message = "Mensaje";
               $envoyer = "Enviar";
            }
            ?>

            <input type="text" name="nom" size="45" maxlength="100" placeholder=<?php echo $nom;?> required>
            <span class="icon-validation"></span>
         </div>
         
         <div class="iconblock">
            <input type="text" name="prenom" size="45" maxlength="100" placeholder=<?php echo $prenom;?> required>
            <span class="icon-validation"></span>
         </div>

         <div class="iconblock">
            <input type="email" name="email" size="45" maxlength="100" placeholder="Email" required>
            <span class="icon-validation"></span>
         </div>

         <div class="iconblock">
            <input type="text" name="objet" size="45" maxlength="15" placeholder=<?php echo $objet;?> required>
            <span class="icon-validation"></span>
         </div>

         <div class="iconblock">
            <textarea name="message" cols="50" rows="10" placeholder=<?php echo $message;?> required></textarea>
            <span class="icon-validation"></span>
         </div>

         <button type="submit" name="submit" value="submit" class="read-more"><?php echo $envoyer;?></button>
      </form>
   </div>
   <?php include "../../footer.php"; ?>
</body>

</html>

<script>
   var nav = document.getElementById('navfixe');
</script>