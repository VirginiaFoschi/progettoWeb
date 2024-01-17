<?php
require_once("bootstrap.php");

$paginaCorrente = 'notifica';
$templateparams["notifiche"] = $dbh->getNotificationsTable()->getNotifications("luigi_bianchi");
$templateparams["interesse"] = $dbh->getNotificationsTable()->getInterests("luigi_bianchi");
$templateparams["interazione"] = $dbh->getNotificationsTable()->getInterests("luigi_bianchi");
$templateparams["commenti"] = $dbh->getNotificationsTable()->getComments("luigi_bianchi");
$templateparams["notificheGenerali"]= array_merge( $templateparams["notifiche"], $templateparams["interesse"],$templateparams["interazione"], $templateparams["commenti"]);
$templateparams["nome"] = "notifications.php";
$templateparams["css"] = array("notifications.css");
$templateparams["js"] = array("notification.js", "selectBook.js");

usort($templateparams["notificheGenerali"], function ($a, $b) {
    
    $dataA = strtotime($a['DataPubblicazione']);
    $dataB = strtotime($b['DataPubblicazione']);

    return $dataB - $dataA;
   
});
if (isset($_POST["selected_book"]) && isset($_POST["selected_book2"])) {
    $dbh->getScambioTable()->setScambio($_POST["selected_book"], $_POST["selected_book2"]);
}

require("template/base-notifiche.php");
