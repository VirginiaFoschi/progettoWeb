<?php
    require_once("bootstrap.php");

    $templateparams["eventi"] = $dbh->getEventsTable()->getEvents();
    $templateparams["recensioni"] = $dbh->getReviewsTable()->getReviews();
    $templateparams["nome"] = "bacheca.php";
    $templateparams["css"] = array("css/bacheca.css");
    $templateparams["js"] = array("js/bacheca.js");
    $templateparams["follows"] = array_column($dbh->getFollowsTable()->getFollows($_SESSION["username"]), "username_seguito");
    $templateparams["likes-reviews"] = $dbh->getInteractionsTable()->getUserLikes($_SESSION["username"]);
    $templateparams["likes-events"] = array_column($dbh->getInterestsTable()->getUserLikes($_SESSION["username"]), "id_evento");

    require("template/base.php");
?>