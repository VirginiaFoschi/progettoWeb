<?php
    require_once("bootstrap.php");

    $templateparams["nome"] = "search.php";
    $templateparams["css"] = array("css/search.css", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    $templateparams["js"] = array("js/search.js");

    require("template/base.php");
?>