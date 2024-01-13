<?php
require_once("bootstrap.php");

$paginaCorrente = 'profilo';
$postCorrente = 'scambi';
$templateparams["nome-articolo"] = "profilo-scambi.php";
$templateparams["scambio"] = $dbh->getScambioTable()->getScambiAttivi("chiaCasti6");

require("profilo.php");

?>