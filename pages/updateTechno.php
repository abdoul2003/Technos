<?php
    require '../db/connexion.php';
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['category'])) {
        $idTechno = $_POST['id'];
        $name = $_POST['name'];
        $category = $_POST['category'];
        $req = "UPDATE technos SET name = ?, category = ? WHERE id = ?";
        $params = array($name, $category, $idTechno);
        $result = $connect->prepare($req);
        $result->execute($params);

        header('location: ../index.php');
    }
?>