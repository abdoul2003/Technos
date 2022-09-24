<?php
    require '../db/connexion.php';
    $idTechno = isset($_GET['idTechno']) ? $_GET['idTechno'] : 0;
    $req = 'DELETE FROM technos WHERE id = ?';
    $params = array($idTechno);
    $result = $connect->prepare($req);
    $result->execute($params);
    header('location: ../index.php');
?>