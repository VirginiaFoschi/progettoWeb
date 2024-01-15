<?php
    require_once("bootstrap.php");

    $templateparams["nome"] = "home.php";
    $templateparams["css"] = array("sign.css", "home.css");
    $templateparams["js"] = array("impostazioni.js");

    require("template/base-menu.php");
?>