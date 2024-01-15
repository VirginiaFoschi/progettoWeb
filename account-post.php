<?php

require_once("bootstrap.php");


$postCorrente = 'post';
$templateparams["nome-articolo"] = "account-post.php";

$idAccount = -1;
if(isset($_GET["id"])){
    $idAccount = $_GET["id"];
}
$templateparams["annuncio"] = $dbh->getPostTable()->getAnnuncioProfilo($idAccount);
$templateparams["recensione"] = $dbh->getPostTable()->getRecensioneProfilo($idAccount);

$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile($idAccount);
$templateparams["follower"] = $dbh->getUsersTable()->getFollower($idAccount);
$templateparams["follow"] = $dbh->getUsersTable()->getFollow($idAccount);
$templateparams["nome-profilo"] = $idAccount;

require("account.php");
?>
