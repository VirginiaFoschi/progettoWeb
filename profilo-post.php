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
$templateparams["commenti"] = $dbh->getPostTable()->getComment();

usort($templateparams["commenti"], function ($a, $b) {
    $dataA = strtotime($a['DataPubblicazione']);
    $dataB = strtotime($b['DataPubblicazione']);

    return $dataA - $dataB;
});

usort($templateparams["posts"], function ($a, $b) {
    $dataA = isset($a['Evento']) ? $a['Evento']['DataPubblicazione'] : $a['Recensione']['DataPubblicazione'];
    $dataB = isset($b['Evento']) ? $b['Evento']['DataPubblicazione'] : $b['Recensione']['DataPubblicazione'];

    return strtotime($dataB) - strtotime($dataA);
});

if (isset($_POST["commento"]) && isset($_POST["id_evento"])) {
    echo "ciao";
    $commento = $_POST["commento"];
    $id_evento = $_POST["id_evento"];
    $autore_commento = $_SESSION["username"];
    $dbh->getPostTable()->addComment($commento, $id_evento, $autore_commento);
    header("Location: profilo-post.php");
    $templateparams["commenti"] = $dbh->getPostTable()->getComment();

    usort($templateparams["commenti"], function ($a, $b) {
        $dataA = strtotime($a['DataPubblicazione']);
        $dataB = strtotime($b['DataPubblicazione']);

        return $dataA - $dataB;
    });
}

require("profilo.php");
?>