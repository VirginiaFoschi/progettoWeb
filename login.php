<?php
    require_once("bootstrap.php");

    $templateparams["erroreLogin"] = false;
    $templateparams["nome"] = "login.php";
    
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        $login_result = $dbh->getUsersTable()->checkLogin($_POST["username"], $_POST["password"]);
        if(count($login_result)==0){
            //login fallito
            $templateparams["erroreLogin"] = true;
        } else {
            registerLoggedUser($login_result[0]["Username"]);
            header('Location: bacheca.php');
        }
    }

    require("template/base-login.php");
?>