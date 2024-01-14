<?php

require_once("bootstrap.php");
$templateparams["nome"] = "addBook.php";
$templateparams["css"] = array("post.css");
$templateparams["js"] = array("changeImg.js");
$templateparams["generi"] = $dbh->getGenresTable()->getGenres();
$image = "img/2200720.png";

if (
    isset($_POST["titolo"]) && isset($_POST["autore"]) && isset($_POST["casaEditrice"])
    && isset($_POST["trama"]) && isset($_POST["condizioni"])
    && isset($_POST["genere"])
) {

    if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
        list($result, $msg) = uploadImage(UPLOAD_DIR, $_FILES["image"]);
        if ($result != 0) {
            $image = $msg;

            $dbh->getPostTable()->pubblicaLibro($_POST["titolo"], $_POST["autore"], $_POST["casaEditrice"], $_POST["trama"], $_POST["condizioni"], $image, $_SESSION["username"], $_POST["genere"]);

            header('Location: bacheca.php');
        } else {
            $templateparams["errormsg"] = $msg;
        }
    }
}
?>