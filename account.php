<?php

require_once("bootstrap.php");
$templateparams["nome"] = "account.php";
$templateparams["js"] = array("profile-post.js", "bacheca.js");
$templateparams["css"] = array("profilo.css");

require("template/base-home.php");

?>