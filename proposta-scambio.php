<?php
    require_once("bootstrap.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_libro= $_POST["id_libro"];
        $username= $_POST["username"];
        $dbh->getNotificationsTable()->addNotification($id_libro,$username,"richiesta");
    }
?>