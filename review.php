<?php
$paginaCorrente='addBook';
require_once("bootstrap.php");
$templateparams["nome"] = "review.php";
$templateparams["css"] = array("post.css");
$templateparams["js"] = array("changeImg.js", "stars.js");
$templateparams["generi"] = $dbh->getGenresTable()->getGenres();
$image = "InserisciImg.jpeg";

if (
    isset($_POST["titolo"]) && isset($_POST["autoreLibro"]) && isset($_POST["voto"])
    && isset($_POST["recensione"])
) {

    if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
        list($result, $msg) = uploadImage(UPLOAD_DIR, $_FILES["image"]);
        if ($result != 0) {
            $image = $_FILES["image"]["name"];

            $dbh->getPostTable()->pubblicaRecensione($_SESSION["username"], $_POST["voto"], $_POST["titolo"], $_POST["autoreLibro"], $image, $_POST["recensione"]);

            header('Location: bacheca.php');
        } else {
            $templateparams["errormsg"] = $msg;
        } 
    }else{
        $dbh->getPostTable()->pubblicaRecensione($_SESSION["username"], $_POST["voto"], $_POST["titolo"], $_POST["autoreLibro"], $image, $_POST["recensione"]);
    }
}
require("template/base-home.php");
?>