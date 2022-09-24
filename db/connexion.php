<?php
    try {
        $connect = new PDO("mysql:host=localhost;dbname=technos", "root", "");
    } catch (Exception $e) {
        die('Erreur de connexion: ' .$e->getMessage());
    }
?>