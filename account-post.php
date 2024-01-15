<?php

require_once("bootstrap.php");

$postCorrente = 'post';
$templateparams["nome-articolo"] = "account-post.php";

$idAccount = -1;
if (isset($_GET["id"])) {
    $idAccount = $_GET["id"];
}
$templateparams["annuncio"] = $dbh->getPostTable()->getAnnuncioProfilo($idAccount);
$templateparams["recensione"] = $dbh->getPostTable()->getRecensioneProfilo($idAccount);

$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile($idAccount);
$templateparams["follower"] = $dbh->getUsersTable()->getFollower($idAccount);
$templateparams["follow"] = $dbh->getUsersTable()->getFollow($idAccount);
$templateparams["nome-profilo"] = $idAccount;
$templateparams["likes-reviews"] = $dbh->getInteractionsTable()->getUserLikes($_SESSION["username"]);
$templateparams["likes-events"] = array_column($dbh->getInterestsTable()->getUserLikes($_SESSION["username"]), "id_evento");

$templateparams["posts"] = array_merge($templateparams["annuncio"], $templateparams["recensione"]);

usort($templateparams["posts"], function($a, $b){
    $dataA = isset($a['Evento']) ? $a['Evento']['DataPubblicazione'] : $a['Recensione']['DataPubblicazione'];
    $dataB = isset($b['Evento']) ? $b['Evento']['DataPubblicazione'] : $b['Recensione']['DataPubblicazione'];

    return strtotime($dataB) - strtotime($dataA);
});


require("account.php");
?>