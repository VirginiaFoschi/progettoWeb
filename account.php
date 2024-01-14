<?php

require_once("bootstrap.php");
$templateparams["nome"] = "account.php";
$templateparams["js"] = array("profile-post.js", "bacheca.js");
$templateparams["css"] = array("profilo.css");
$templateparams["follows"] = array_column($dbh->getFollowsTable()->getFollows(/*$_SESSION["username"] */"chiaCasti6"), "usurname_seguito");

require("template/base-home.php");

?>