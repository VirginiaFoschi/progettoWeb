<?php

require_once("bootstrap.php");

$username = $_SESSION['username'];
$paginaCorrente = 'profilo';
$postCorrente = 'libri';
$templateparams["nome-articolo"] = "profilo-lista-libri.php";
$templateparams["libro-postato"] = $dbh->getPostTable()->getPostLibroProfilo($username);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_libro= $_POST["id_libro"];
    $dbh->getPostTable()->deleteLibro($id_libro);
}

require("profilo.php");

?>