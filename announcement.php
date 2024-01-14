<?php

    require_once("bootstrap.php");
    $templateparams["nome"] = "announcement.php";
    $templateparams["css"] = array("post.css");
    

   if(isset($_POST["dataEvento"]) && isset($_POST["luogo"]) && isset($_POST["descrizione"])){

            $dbh->getPostTable()->pubblicaAnnuncio($_POST["dataEvento"], $_POST["luogo"], $_POST["descrizione"], $_SESSION["username"] );
         
            header('Location: bacheca.php');
    
    
   }
?>