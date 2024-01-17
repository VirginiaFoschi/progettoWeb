<?php
    require_once("bootstrap.php");

    $paginaCorrente="search";
    $templateparams["nome"] = "base-search.php";
    $templateparams["css"] = array("search.css", "likes-follow.css"); //, "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    $templateparams["js"] = array("search.js", "likes-follow.js");
    $templateparams["users"] = $dbh->getUsersTable()->getUserByInitialLetters($_SESSION["username"],$_SESSION["text"]);
    $templateparams["genere"] = $dbh->getGenresTable()->getGenres();
    $templateparams["generi"] = $dbh->getPreferencesTable()->getGenres();
    $templateparams["follows"] = array_column($dbh->getFollowsTable()->getFollows($_SESSION["username"]), "username_seguito");
    $templateparams["posts"] = $dbh->getPostTable()->getPosts($_SESSION["username"],$_SESSION["text"]);
    $templateparams["notifiche"] = $dbh->getNotificationsTable()->getSuspendNotify($_SESSION["username"]);

    if(isset($_POST["search"])) {
        registerLastResearch($_POST["search"]);
        $templateparams["users"] = $dbh->getUsersTable()->getUserByInitialLetters($_SESSION["username"],$_SESSION["text"]);
        $templateparams["posts"] = $dbh->getPostTable()->getPosts($_SESSION["username"],$_SESSION["text"]);
    }

    if(isset($_POST["annulla"])) {
        registerLastResearch("");
        $templateparams["users"] = $dbh->getUsersTable()->getUserByInitialLetters($_SESSION["username"],$_SESSION["text"]);
        $templateparams["posts"] = $dbh->getPostTable()->getPosts($_SESSION["username"],$_SESSION["text"]);
    }

    usort($templateparams["posts"], function($a, $b) {
        $dataA = strtotime($a['dataPubblicazione']);
        $dataB = strtotime($b['dataPubblicazione']);

        return $dataB - $dataA;
    });

    function getUserGenres($username) {
        global $dbh;
        return $dbh->getPreferencesTable()->getUserGenres($username);
    }

    require("template/base-home.php");
?>