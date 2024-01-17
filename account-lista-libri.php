<?php

require_once("bootstrap.php");

$postCorrente = 'libri';
$templateparams["nome-articolo"] = "account-lista-libri.php";
$idAccount = -1;
if(isset($_GET["id"])){
    $idAccount = $_GET["id"];
}

$templateparams["libro-postato"] = $dbh->getPostTable()->getPostLibroProfilo($idAccount);
$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile($idAccount);
$templateparams["follower"] = $dbh->getUsersTable()->getFollower($idAccount);
$templateparams["follow"] = $dbh->getUsersTable()->getFollow($idAccount);
$templateparams["nome-profilo"] = "$idAccount";
$templateparams["notifiche"] = $dbh->getNotificationsTable()->getSuspendNotify($idAccount);

usort($templateparams["libro-postato"], function ($a, $b) {
    $dataA = strtotime($a['DataPubblicazione']);
    $dataB = strtotime($b['DataPubblicazione']);

    return $dataB - $dataA;
});

require("account.php");

?>

