<?php
    require_once("bootstrap.php");
    $paginaCorrente = 'notifica';
    $templateparams["notifiche"] = $dbh->getNotificationsTable()->getNotifications($_SESSION["username"]);
    $templateparams["nome"] = "notifications.php";
    $templateparams["css"] = array("notifications.css");
   // $templateparams["js"] = array("notifications.js");
    require("template/base-home.php");
?>