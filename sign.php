<?php
    require_once("bootstrap.php");

    $templateparams["erroreSignIn"] = false;
    $templateparams["generi"] = $dbh->getGenresTable()->getGenres();
    $templateparams["nome"] = "sign.php";
    $templateparams["css"] = array("sign.css");
    $templateparams["js"] = array("sign.js", "impostazioni.js");
    $image="immagineProfilo.jpg";
    $templateparams["errormsg"] = "Errore! Esiste già un utente con lo stesso username";

    if(isset($_POST["username"]) && isset($_POST["password"])
    && isset($_POST["name"]) && isset($_POST["surname"]) 
    && isset($_POST["address"]) && isset($_POST["genres"])) {
        $login_result = $dbh->getUsersTable()->checkIfExists($_POST["username"]);
        if(count($login_result)!=0){
            //login fallito
            $templateparams["erroreSignIn"] = true;
            $templateparams["errormsg"] = "Errore! Esiste già un utente con lo stesso username";
        } 
        else {
            if(isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
                list($result, $msg) = uploadImage(UPLOAD_DIR, $_FILES["image"]);
                if($result != 0){
                    $image = $msg;
                    $pws =password_hash($_POST["password"], PASSWORD_DEFAULT);
                    $dbh->getUsersTable()->registerLoggedUser($_POST["name"], $_POST["surname"], $_POST["username"], $pws, $_POST["address"],$image);
                    $genres=$_POST["genres"];
                    foreach($genres as $genre) {
                        $dbh->getPreferencesTable()->saveUserFavouriteGenre($genre,$_POST["username"]);
                    }
                    registerLoggedUser($_POST["username"]);
                    registerGenre("");
                    header('Location: bacheca.php');
                } else {
                    $templateparams["erroreSignIn"] = true;
                    $templateparams["errormsg"] = $msg;
                }
            } else {
                $pws =password_hash($_POST["password"], PASSWORD_DEFAULT);
                $dbh->getUsersTable()->registerLoggedUser($_POST["name"], $_POST["surname"], $_POST["username"], $pws, $_POST["address"],$image);
                $genres=$_POST["genres"];
                foreach($genres as $genre) {
                    $dbh->getPreferencesTable()->saveUserFavouriteGenre($genre,$_POST["username"]);
                }
                registerLoggedUser($_POST["username"]);
                registerGenre("");
                header('Location: bacheca.php');
            }
        }
    }

    require("template/base-menu.php");
?>

