<?php
    require_once("bootstrap.php");

    $sottopagina="posts";
    $templateparams["nome1"] = "search-posts.php";

    if(isset($_POST["genere"])) {
        registerGenre($_POST["genere"] == 'Tutti' ? "" : $_POST["genere"]);
    }

    require("search.php");
?>