<?php
    require_once("bootstrap.php");

    $templateparams["nome"] = "impostazioni-indirizzo.php";
    $templateparams["js"] = array("impostazioni.js");
    $templateparams["css"] = array("impostazioni.css");
    $templateparams["indirizzo"] = $dbh->getUsersTable()->getIndirizzo("chiaCasti6");
    
    require("template/base-menu.php");
?>