<?php

require_once("bootstrap.php");

$paginaCorrente = 'profilo';
$postCorrente = 'post';
$templateparams["nome-articolo"] = "profilo-post.php";
$templateparams["annuncio"] = $dbh->getPostTable()->getAnnuncioProfilo("chiaCasti6");
$templateparams["recensione"] = $dbh->getPostTable()->getRecensioneProfilo("chiaCasti6");

require("profilo.php");
?>