<?php
require_once("bootstrap.php");

$templateparams["nome-articolo"] = "profilo-scambio.php";
$templateparams["scambio"] = $dbh->getScambioTable()->getScambiAttivi("chiaCasti6");

?>