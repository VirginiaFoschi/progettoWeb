<?php

require_once("bootstrap.php");
$templateparams["nome"] = "profilo.php";
$templateparams["js"] = array("profile-post.js", "bacheca.js");
$templateparams["css"] = array("profilo.css");

$username = $_SESSION['username'];
$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile($username);
$templateparams["follower"] = $dbh->getUsersTable()->getFollower($username);
$templateparams["follow"] = $dbh->getUsersTable()->getFollow($username);
$templateparams["nome-profilo"] = $username;

require("template/base-home.php");

?>