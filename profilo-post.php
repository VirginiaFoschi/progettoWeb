<?php

require_once("bootstrap.php");

$username = $_SESSION['username'];
$paginaCorrente = 'profilo';
$postCorrente = 'post';
$templateparams["nome-articolo"] = "profilo-post.php";
$templateparams["annuncio"] = $dbh->getPostTable()->getAnnuncioProfilo($username);
$templateparams["recensione"] = $dbh->getPostTable()->getRecensioneProfilo($username);
$templateparams["nome-profilo"] = $username;

$templateparams["likes-reviews"] = $dbh->getInteractionsTable()->getUserLikes($_SESSION["username"]);
$templateparams["likes-events"] = array_column($dbh->getInterestsTable()->getUserLikes($_SESSION["username"]), "id_evento");

require("profilo.php");
?>