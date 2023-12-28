<?php
$id = $_POST['id'];
include("../../../connexion.inc.php");
try {
    $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $cnx->beginTransaction();
    $cnx->exec('SET TRANSACTION ISOLATION LEVEL SERIALIZABLE;');

    $query = "DELETE FROM seville.patrimoine WHERE id = $id";
    $cnx->exec($query);
    $cnx->commit();
    header("location: gerer_Patrimoine_Page.php");
    exit;
} catch (PDOException $e) {
    $cnx->rollback();
    echo "Erreur : " . $e->getMessage();
}
?>