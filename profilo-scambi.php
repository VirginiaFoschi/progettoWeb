<?php
require_once("bootstrap.php");

$username = $_SESSION['username'];
$paginaCorrente = 'profilo';
$postCorrente = 'scambi';
$templateparams["nome-articolo"] = "profilo-scambi.php";
$templateparams["scambio"] = $dbh->getScambioTable()->getScambiAttivi($username);

require("profilo.php");

?>