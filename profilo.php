<?php

require_once("bootstrap.php");
$templateparams["nome"] = "profilo.php";
$templateparams["js"] = array("profile-post.js", "bacheca.js");
$templateparams["css"] = array("profilo.css");

/*$username = $_SESSION['username'];*/
$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile("chiaCasti6");
$templateparams["follower"] = $dbh->getUsersTable()->getFollower("chiaCasti6");
$templateparams["follow"] = $dbh->getUsersTable()->getFollow("chiaCasti6");
$templateparams["nome-profilo"] = "chiaCasti6";

require("template/base-home.php");

?>