<?php
require_once("bootstrap.php");

$templateparams["nome"] = "etichetta.php";
$templateparams["js"] = array("etichetta.js");
$templateparams["css"] = array("etichetta.css");

$libro1 = -1;
$libro2 = -1;
if (isset($_GET["libro1"]) && isset($_GET["libro2"])) {
    $libro1 = $_GET["libro1"];
    $libro2 = $_GET["libro2"];
}

$templateparams["dati"] = $dbh->getScambioTable()->getEtichetta($libro1, $libro2);
require("template/base-menu.php");
?>