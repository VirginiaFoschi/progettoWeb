<?php

require_once("bootstrap.php");

$templateparams["nome-articolo"] = "profilo-lista-libri.php";
$templateparams["libro-postato"] = $dbh->getPostTable()->getPostLibroProfilo("chiaCasti6");

require("profilo.php");

?>