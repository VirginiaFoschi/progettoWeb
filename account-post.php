<?php

require_once("bootstrap.php");


$postCorrente = 'post';
$templateparams["nome-articolo"] = "account-post.php";
$templateparams["annuncio"] = $dbh->getPostTable()->getAnnuncioProfilo("virgi.foschi02");

require("account.php");
?>
