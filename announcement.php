<?php

    require_once("bootstrap.php");
    $templateparams["nome"] = "announcement.php";
    $templateparams["css"] = array("post.css");
    $templateparams["js"] = array("addPost.js");
    

   if(isset($_POST["nomeEvento"]) && isset($_POST["dataEvento"]) && isset($_POST["luogo"]) && isset($_POST["descrizione"])){

            $dbh->getPostTable()->pubblicaAnnuncio($_POST["dataEvento"],$_POST["nomeEvento"], $_POST["luogo"], $_POST["descrizione"], "PinaGina" );
         
            header('Location: bacheca.php');
    
    
   }
   require("template/base-home.php");
?>