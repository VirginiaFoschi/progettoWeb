<?php
    require_once("bootstrap.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $autore_rec = $_POST["autore_rec"];
        $autore_lib = $_POST["autore_lib"];
        $titolo_lib = $_POST["titolo"];
        $likes_result = $dbh->getInteractionsTable()->isInterested($_SESSION["username"], $autore_rec, $titolo_lib, $autore_lib);
        if(count($likes_result)==0){
            $dbh->getInteractionsTable()->insert($_SESSION["username"], $autore_rec, $titolo_lib, $autore_lib);
        } else {
            $dbh->getInteractionsTable()->delete($_SESSION["username"], $autore_rec, $titolo_lib, $autore_lib);
        }
    }
?>