<?php

require_once("bootstrap.php");

$username = $_SESSION['username'];
$paginaCorrente = 'profilo';
$postCorrente = 'post';
$templateparams["nome-articolo"] = "profilo-post.php";
$templateparams["annuncio"] = $dbh->getPostTable()->getAnnuncioProfilo($username);
$templateparams["recensione"] = $dbh->getPostTable()->getRecensioneProfilo($username);

require("profilo.php");
?>