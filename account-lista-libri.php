<?php

require_once("bootstrap.php");

$postCorrente = 'libri';
$templateparams["nome-articolo"] = "account-lista-libri.php";
$templateparams["libro-postato"] = $dbh->getPostTable()->getPostLibroProfilo("virgi.foschi02");

require("account.php");

?>

