<?php
    require_once("bootstrap.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_evento= $_POST["evento"];
        $likes_result = $dbh->getInterestsTable()->isInterested($_SESSION["username"], $id_evento);
        if(count($likes_result)==0){
            $dbh->getInterestsTable()->insert($_SESSION["username"], $id_evento);
        } else {
            $dbh->getInterestsTable()->delete($_SESSION["username"], $id_evento);
        }
    }
?>