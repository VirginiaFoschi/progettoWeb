<?php
require_once("bootstrap.php");

$paginaCorrente = 'notifica';
$templateparams["notifiche"] = $dbh->getNotificationsTable()->getNotifications($_SESSION["username"]);
$templateparams["interesse"] = $dbh->getNotificationsTable()->getInterests($_SESSION["username"]);
$templateparams["interazione"] = $dbh->getNotificationsTable()->getInteraction($_SESSION["username"]);
$templateparams["commenti"] = $dbh->getNotificationsTable()->getComments($_SESSION["username"]);
$templateparams["notificheGenerali"] = array_merge($templateparams["notifiche"], $templateparams["interesse"], $templateparams["interazione"], $templateparams["commenti"]);
$templateparams["nome"] = "notifications.php";
$templateparams["css"] = array("notifications.css");
$templateparams["js"] = array("notification.js", "selectBook.js", "base.js");

usort($templateparams["notificheGenerali"], function ($a, $b) {

    $dataA = strtotime($a['DataPubblicazione']);
    $dataB = strtotime($b['DataPubblicazione']);

    return $dataB - $dataA;
});
if (isset($_POST["rifiuta"])) {
    $dbh->getNotificationsTable()->updateNotificationType($_POST["rifiuta"], "rifiutato");
}

if (isset($_POST["accetta"])) {
    $dbh->getNotificationsTable()->updateNotificationType($_POST["accetta"], "accettata");
}

if (isset($_POST["selected_book"]) && isset($_POST["selected_book2"])) {

    $dbh->getScambioTable()->setScambio($_POST["selected_book"], $_POST["selected_book2"]);
}

if (isset($_POST["back"])) {
    foreach ($templateparams["notifiche"] as $notifica) {
        if ($notifica['Visualizzato'] == 0) {
            $dbh->getNotificationsTable()->updateNotificationViewed($notifica['ID_Notifica']);
        }
    }
    foreach ($templateparams["commenti"] as $commento) {
        if ($commento['Visualizzato'] == 0) {
            $dbh->getNotificationsTable()->updateCommentsViewed($commento['ID_Evento'], $commento['Autore_Commento'], $commento['DataPubblicazione']);
        }
    }
    foreach ($templateparams["interesse"] as $interesse) {
        if ($interesse['Visualizzato'] == 0) {
            $dbh->getNotificationsTable()->updateInterestViewed($interesse['ID_Evento'], $interesse['Username_Int']);
        }
    }
    foreach ($templateparams["interazione"] as $interazione) {
        if ($interazione['Visualizzato'] == 0) {
            $dbh->getNotificationsTable()->updateInteractionViewed($interazione['Autore_Recensione'], $interazione['Titolo_Libro'], $interazione['Autore_Libro'], $interazione['Username_Int']);
        }
    }
}

require("template/base-notifiche.php");
