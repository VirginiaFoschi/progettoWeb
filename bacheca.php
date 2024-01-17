<?php
    require_once("bootstrap.php");

    $paginaCorrente='bacheca';
    $templateparams["eventi"] = $dbh->getPostTable()->getEvents();
    $templateparams["recensioni"] = $dbh->getPostTable()->getReviews();
    $templateparams["nome"] = "bacheca.php";
    $templateparams["css"] = array("bacheca.css", "likes-follow.css");
    $templateparams["js"] = array("likes-follow.js", "bacheca.js");
    $templateparams["follows"] = array_column($dbh->getFollowsTable()->getFollows($_SESSION["username"]), "username_seguito");
    $templateparams["likes-reviews"] = $dbh->getInteractionsTable()->getUserLikes($_SESSION["username"]);
    $templateparams["likes-events"] = array_column($dbh->getInterestsTable()->getUserLikes($_SESSION["username"]), "id_evento");
    $templateparams["posts"] = array_merge($templateparams["eventi"], $templateparams["recensioni"]);

    
    usort($templateparams["posts"], function($a, $b) {
        $dataA = strtotime($a['dataPubblicazione']);
        $dataB = strtotime($b['dataPubblicazione']);
    
        return $dataB - $dataA;
    });

    function getComments($id_evento) {
        global $dbh;
        $commenti=$dbh->getPostTable()->getCommentEvent($id_evento);
        usort($commenti, function ($a, $b) {
            $dataA = strtotime($a['DataPubblicazione']);
            $dataB = strtotime($b['DataPubblicazione']);
    
            return $dataA - $dataB;
        });
        return $commenti;
    }

    if (isset($_POST["commento"]) && isset($_POST["id_evento"])) {
        $commento = $_POST["commento"];
        $id_evento = $_POST["id_evento"];
        $autore_commento = $_SESSION["username"];
        $dbh->getPostTable()->addComment($commento, $id_evento, $autore_commento);
        header("Location: bacheca.php");
    }

    require("template/base-home.php");
?>