<?php

require_once("bootstrap.php");

$paginaCorrente = 'profilo';
$postCorrente = 'libri';
$templateparams["nome-articolo"] = "profilo-lista-libri.php";
$templateparams["libro-postato"] = $dbh->getPostTable()->getPostLibroProfilo("chiaCasti6");

require("profilo.php");

?>