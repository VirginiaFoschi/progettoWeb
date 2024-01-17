<?php
require_once("bootstrap.php");
$idAccount = -1;
if (isset($_GET["id"])) {
    $idAccount = $_GET["id"];
}
$paginaCorrente = 'notifica';
$templateparams["notifiche"] = $dbh->getNotificationsTable()->getNotifications("luigi_bianchi");
$templateparams["interesse"] = $dbh->getNotificationsTable()->getInterests("luigi_bianchi");
$templateparams["interazione"] = $dbh->getNotificationsTable()->getInterests("luigi_bianchi");
$templateparams["commenti"] = $dbh->getNotificationsTable()->getComments("luigi_bianchi");
$templateparams["nome"] = "notifications.php";
$templateparams["css"] = array("notifications.css");
$templateparams["js"] = array("notification.js", "selectBook.js");

if (isset($_POST["selected_book"]) && isset($_POST["selected_book2"])) {
    $dbh->getScambioTable()->setScambio($_POST["selected_book"], $_POST["selected_book2"]);
}

require("template/base-notifiche.php");
