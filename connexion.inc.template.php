<?php

/*
 * création d'objet PDO de la connexion qui sera représenté par la variable $cnx
 */
$user =  '';
$pass =  '';
try {
    $cnx = new PDO('pgsql:host=; dbname=', $user, $pass); 
}
catch (PDOException $e) {
    echo "ERREUR : La connexion a échouée";

}

?>

