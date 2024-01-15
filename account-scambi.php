<?php

require_once("bootstrap.php");


$postCorrente = 'scambi';
$templateparams["nome-articolo"] = "account-scambi.php";

$idAccount = -1;
if(isset($_GET["id"])){
    $idAccount = $_GET["id"];
}
$templateparams["scambi"] = $dbh->getPostTable()->getScambiUtente($idAccount);

$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile($idAccount);
$templateparams["follower"] = $dbh->getUsersTable()->getFollower($idAccount);
$templateparams["follow"] = $dbh->getUsersTable()->getFollow($idAccount);
$templateparams["nome-profilo"] = "$idAccount";

require("account.php");
?>