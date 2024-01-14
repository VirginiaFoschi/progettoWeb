<?php

require_once("bootstrap.php");


$postCorrente = 'scambi';
$templateparams["nome-articolo"] = "account-scambi.php";

$idAccount = -1;
if(isset($_GET["id"])){
    $idAccount = $_GET["id"];
}
$templateparams["scambi"] = $dbh->getPostTable()->getScambiUtente("virgi.foschi02");

$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile("virgi.foschi02");
$templateparams["follower"] = $dbh->getUsersTable()->getFollower("virgi.foschi02");
$templateparams["follow"] = $dbh->getUsersTable()->getFollow("virgi.foschi02");
$templateparams["nome-profilo"] = "virgi.foschi02";

require("account.php");
?>