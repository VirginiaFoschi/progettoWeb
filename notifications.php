<?php
    require_once("bootstrap.php");
    $idAccount = -1;
if(isset($_GET["id"])){
    $idAccount = $_GET["id"];
}
    $paginaCorrente = 'notifica';
    $templateparams["notifiche"] = $dbh->getNotificationsTable()->getNotifications("luigi_bianchi");
    $templateparams["nome"] = "notifications.php";
    $templateparams["css"] = array("notifications.css");
    $templateparams["js"] = array("notification.js");
    require("template/base-notifiche.php");
?>