<?php

require_once("bootstrap.php");

$templateparams["nome-articolo"] = "profilo-post.php";
$templateparams["annuncio"] = $dbh->getPostTable()->getAnnuncioProfilo("chiaCasti6");

require("profilo.php");
?>