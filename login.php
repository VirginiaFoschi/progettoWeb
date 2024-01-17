<?php
    require_once("bootstrap.php");

    $templateparams["erroreLogin"] = false;
    $templateparams["nome"] = "login.php";
    $templateparams["css"] = array("sign.css");
    $templateparams["js"] = array("impostazioni.js");
    
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $login_result = $dbh->getUsersTable()->checkIfExists($_POST["username"]);
        if(count($login_result)==0){
            //login fallito
            $templateparams["erroreLogin"] = true;
        } else {
            if(password_verify($_POST["password"], $login_result[0]["Password"])){
                registerLoggedUser($login_result[0]["Username"]);
                registerGenre("");
                header('Location: bacheca.php');
            } else {
                $templateparams["erroreLogin"] = true;
            }
        }
    }

    require("template/base-menu.php");
?>