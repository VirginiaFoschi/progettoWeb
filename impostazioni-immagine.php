<?php
require_once("bootstrap.php");

$username = $_SESSION['username'];
$templateparams["nome"] = "impostazioni-immagine.php";
$templateparams["js"] = array("impostazioni.js", "changeImg.js");
$templateparams["css"] = array("impostazioni.css");
$username = $_SESSION['username'];
$templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile($username);

if (isset($_FILES["img"]) && $_FILES["img"]["size"] > 0) {
    list($result, $msg) = uploadImage(UPLOAD_DIR, $_FILES["img"]);
    if ($result != 0) {
        $dbh->getUsersTable()->changeImage($username, $_FILES["img"]["name"]);
        $templateparams["img-profilo"] = $dbh->getUsersTable()->getImgProfile($username);
    }
}

require("template/base-menu.php");
?>