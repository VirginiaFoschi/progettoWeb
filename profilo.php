<?php

require_once("bootstrap.php");

$username = $_SESSION['username'];
$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile($username);
$templateparams["nome-profilo"] = $username;
$templateparams["nome"] = "profilo.php";
$templateparams["js"] = array("profile-post.js", "likes-follow.js", "search.js");
$templateparams["css"] = array("profilo.css", "likes-follow.css");
$templateparams["follower"] = $dbh->getUsersTable()->getFollower($username);
$templateparams["follow"] = $dbh->getUsersTable()->getFollow($username);
$templateparams["num-notifiche"] = $dbh->getNotificationsTable()->getNotificationsNotDisplayed($username);



require("template/base-home.php");

?>