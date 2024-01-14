<?php
    require_once("bootstrap.php");

    $templateparams["nome"] = "impostazioni-genere.php";
    $templateparams["js"] = array("impostazioni.js");
    $templateparams["css"] = array("impostazioni.css");
    $templateparams["generi"] = $dbh->getGenresTable()->getGenres();
    $templateparams["genere-utente"] = $dbh->getGenresTable()->getGenereUtente("chiaCasti6");
    
    require("template/base-menu.php");
?>