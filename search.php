<?php
    require_once("bootstrap.php");

    $paginaCorrente="search";
    $text="";
    $templateparams["nome"] = "base-search.php";
    $templateparams["css"] = array("search.css"); //, "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    $templateparams["js"] = array("search.js");
    $templateparams["users"] = $dbh->getUsersTable()->getUserByInitialLetters($text);
    $templateparams["generi"] = $dbh->getPreferencesTable()->getGenres();
    $templateparams["follows"] = array_column($dbh->getFollowsTable()->getFollows($_SESSION["username"]), "username_seguito");

    if(isset($_POST["search"])) {
        $text=$_POST["search"];
        $templateparams["users"] = $dbh->getUsersTable()->getUserByInitialLetters($text);
    }

    require("template/base-home.php");
?>