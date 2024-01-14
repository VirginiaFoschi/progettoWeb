<?php
    require_once("bootstrap.php");

    $paginaCorrente='bacheca';
    $templateparams["eventi"] = $dbh->getEventsTable()->getEvents();
    $templateparams["recensioni"] = $dbh->getReviewsTable()->getReviews();
    $templateparams["nome"] = "bacheca.php";
    $templateparams["css"] = array("bacheca.css", "likes-follow.css");
    $templateparams["js"] = array("likes-follow.js");
    $templateparams["follows"] = array_column($dbh->getFollowsTable()->getFollows($_SESSION["username"]), "username_seguito");
    $templateparams["likes-reviews"] = $dbh->getInteractionsTable()->getUserLikes($_SESSION["username"]);
    $templateparams["likes-events"] = array_column($dbh->getInterestsTable()->getUserLikes($_SESSION["username"]), "id_evento");
    $templateparams["posts"] = array_merge_recursive($templateparams["eventi"], $templateparams["recensioni"]);
    
    usort($templateparams["posts"], function($a, $b) {
        $dataA = strtotime($a['dataPubblicazione']);
        $dataB = strtotime($b['dataPubblicazione']);
    
        return $dataA - $dataB;
    });

    require("template/base-home.php");
?>