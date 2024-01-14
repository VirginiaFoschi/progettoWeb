<?php

require_once("bootstrap.php");
$templateparams["nome"] = "account.php";
$templateparams["js"] = array("profile-post.js", "bacheca.js");
$templateparams["css"] = array("profilo.css");

$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile("virgi.foschi02");
$templateparams["follower"] = $dbh->getUsersTable()->getFollower("virgi.foschi02");
$templateparams["follow"] = $dbh->getUsersTable()->getFollow("virgi.foschi02");
$templateparams["nome-profilo"] = "virgi.foschi02";

require("template/base-home.php");

?>