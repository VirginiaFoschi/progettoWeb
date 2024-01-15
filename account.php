<?php


require_once("bootstrap.php");

$username = $_SESSION['username'];
$templateparams["nome"] = "account.php";
$templateparams["js"] = array("profile-post.js", "likes-follow.js");
$templateparams["css"] = array("profilo.css", "likes-follow.css");
$templateparams["follows"] = array_column($dbh->getFollowsTable()->getFollows($username), "username_seguito");

require("template/base-home.php");

?>