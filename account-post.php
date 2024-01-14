<?php

require_once("bootstrap.php");


$postCorrente = 'post';
$templateparams["nome-articolo"] = "account-post.php";
$templateparams["annuncio"] = $dbh->getPostTable()->getAnnuncioProfilo("virgi.foschi02");
$templateparams["recensione"] = $dbh->getPostTable()->getRecensioneProfilo("virgi.foschi02");

$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile("virgi.foschi02");
$templateparams["follower"] = $dbh->getUsersTable()->getFollower("virgi.foschi02");
$templateparams["follow"] = $dbh->getUsersTable()->getFollow("virgi.foschi02");
$templateparams["nome-profilo"] = "virgi.foschi02";

require("account.php");
?>
