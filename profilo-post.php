<?php

require_once("bootstrap.php");

$username = $_SESSION['username'];
$paginaCorrente = 'profilo';
$postCorrente = 'post';
$templateparams["nome-articolo"] = "profilo-post.php";
$templateparams["annuncio"] = $dbh->getPostTable()->getAnnuncioProfilo($username);
$templateparams["recensione"] = $dbh->getPostTable()->getRecensioneProfilo($username);
$templateparams["nome-profilo"] = $username;

$templateparams["likes-reviews"] = $dbh->getInteractionsTable()->getUserLikes($_SESSION["username"]);
$templateparams["likes-events"] = array_column($dbh->getInterestsTable()->getUserLikes($_SESSION["username"]), "id_evento");
$templateparams["posts"] = array_merge($templateparams["annuncio"], $templateparams["recensione"]);

usort($templateparams["posts"], function($a, $b){
    $dataA = isset($a['Evento']) ? $a['Evento']['DataPubblicazione'] : $a['Recensione']['DataPubblicazione'];
    $dataB = isset($b['Evento']) ? $b['Evento']['DataPubblicazione'] : $b['Recensione']['DataPubblicazione'];

    return strtotime($dataB) - strtotime($dataA);
});

require("profilo.php");
?>