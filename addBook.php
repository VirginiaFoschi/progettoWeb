<?php

require_once("bootstrap.php");
$paginaCorrente='addBook';
$templateparams["nome"] = "addBook.php";
$templateparams["css"] = array("post.css", "base.css");
$templateparams["js"] = array ("changeImg.js", "addPost.js");
$templateparams["generi"] = $dbh->getGenresTable()->getGenres();
$image = "img/2200720.png";

if (
    isset($_POST["titolo"]) && isset($_POST["autore"]) && isset($_POST["casaEditrice"])
    && isset($_POST["trama"]) && isset($_POST["condizioni"])
    && isset($_POST["genere"])
) {
    var_dump($_POST);
    if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
        list($result, $msg) = uploadImage(UPLOAD_DIR, $_FILES["image"]);
        if ($result != 0) {
            $image = $msg;

            $dbh->getPostTable()->pubblicaLibro($_POST["titolo"], $_POST["autore"], $_POST["casaEditrice"], $_POST["trama"], $_POST["condizioni"], $image, $_SESSION["username"], $_POST["genere"]);

            header('Location: bacheca.php');
        } 
    }else{
        $dbh->getPostTable()->pubblicaLibro($_POST["titolo"], $_POST["autore"], $_POST["casaEditrice"], $_POST["trama"], $_POST["condizioni"], $image, "PinaGina", $_POST["genere"]);
        header('Location: bacheca.php');
    }
}
require("template/base-home.php");
?>