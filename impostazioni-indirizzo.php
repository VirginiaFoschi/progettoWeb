<?php
    require_once("bootstrap.php");

    $username = $_SESSION['username'];
    $templateparams["nome"] = "impostazioni-indirizzo.php";
    $templateparams["js"] = array("impostazioni.js");
    $templateparams["css"] = array("impostazioni.css");
    $templateparams["indirizzo"] = $dbh->getUsersTable()->getIndirizzo($username);

    if(isset($_POST["indirizzo"])) {
        $dbh->getUsersTable()->updateIndirizzo($username, $_POST["indirizzo"]);
        $templateparams["indirizzo"] = $dbh->getUsersTable()->getIndirizzo($username);
    }
    
    require("template/base-menu.php");
?>