<?php

require_once("bootstrap.php");

$postCorrente = 'libri';
$templateparams["nome-articolo"] = "account-lista-libri.php";
$templateparams["libro-postato"] = $dbh->getPostTable()->getPostLibroProfilo("virgi.foschi02");

$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile("virgi.foschi02");
$templateparams["follower"] = $dbh->getUsersTable()->getFollower("virgi.foschi02");
$templateparams["follow"] = $dbh->getUsersTable()->getFollow("virgi.foschi02");
$templateparams["nome-profilo"] = "virgi.foschi02";

require("account.php");

?>

