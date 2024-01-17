<?php

require_once("bootstrap.php");

$username = $_SESSION['username'];
$paginaCorrente = 'profilo';
$postCorrente = 'libri';
$templateparams["nome-articolo"] = "profilo-lista-libri.php";
$templateparams["libro-postato"] = $dbh->getPostTable()->getPostLibroProfilo($username);
$templateparams["notifiche"] = $dbh->getNotificationsTable()->getSuspendNotify($username);

function getNotificheLibro($id_libro) {
    global $dbh;
    $notificheLibro = $dbh->getNotificationsTable()->getSuspendNotifyLibro($_SESSION["username"], $id_libro);
    return empty($notificheLibro);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_libro = $_POST["id_libro"];
    $dbh->getPostTable()->deleteLibro($id_libro);
    echo $id_libro;
}

usort($templateparams["libro-postato"], function ($a, $b) {
    $dataA = strtotime($a['DataPubblicazione']);
    $dataB = strtotime($b['DataPubblicazione']);

    return $dataB - $dataA;
});

require("profilo.php");

?>