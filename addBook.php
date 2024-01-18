<?php

require_once("bootstrap.php");
$paginaCorrente='addBook';
$templateparams["nome"] = "addBook.php";
$templateparams["css"] = array("post.css", "base.css");
$templateparams["js"] = array ("changeCopertina.js");
$templateparams["generi"] = $dbh->getGenresTable()->getGenres();
$image = "upload/inseirisciImg.jpeg";

if (
    isset($_POST["titolo"]) && isset($_POST["autore"]) && isset($_POST["casaEditrice"])
    && isset($_POST["trama"]) && isset($_POST["condizioni"])
    && isset($_POST["genere"])
) {
    echo $_POST["titolo"];
    echo $_POST["autore"];
    echo $_POST["casaEditrice"];
    echo $_POST["trama"];
    echo $_POST["condizioni"];
    echo $_POST["genere"];
    var_dump($_POST);
    if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
        list($result, $msg) = uploadImage(UPLOAD_DIR, $_FILES["image"]);
        if ($result != 0) {
            $image = $msg;

            $dbh->getPostTable()->pubblicaLibro($_POST["titolo"], $_POST["autore"], $_POST["casaEditrice"], $_POST["trama"], $_POST["condizioni"], $image, $_SESSION["username"], $_POST["genere"]);

            header('Location: bacheca.php');
        } 
    }else{
        $dbh->getPostTable()->pubblicaLibro($_POST["titolo"], $_POST["autore"], $_POST["casaEditrice"], $_POST["trama"], $_POST["condizioni"], $image, $_SESSION["username"], $_POST["genere"]);
        header('Location: bacheca.php');
    }
}
require("template/base-home.php");
?>