<?php
    require_once("bootstrap.php");

    $templateparams["erroreSignIn"] = false;
    $templateparams["generi"] = $dbh->getGenresTable()->getGenres();
    $templateparams["nome"] = "sign.php";

    if(isset($_POST["username"]) && isset($_POST["password"])
    && isset($_POST["name"]) && isset($_POST["surname"]) 
    && isset($_POST["address"]) && isset($_POST["genres"])) {
        $login_result = $dbh->getUsersTable()->checkIfExists($_POST["username"]);
        if(count($login_result)!=0){
            //login fallito
            $templateparams["erroreSignIn"] = true;
        } 
        else {
            if(isset($_POST["image"])) {
                $image = $_POST["image"];
            } else {
                $image= "img/immagineProfilo.img";
            }
            $dbh->getUsersTable()->registerLoggedUser($_POST["name"], $_POST["surname"], $_POST["username"], $_POST["password"], $_POST["address"],$image);
            $genres=$_POST["genres"];
            print_r($genres);
            foreach($genres as $genre) {
                $dbh->getPreferencesTable()->saveUserFavouriteGenre($genre,$_POST["username"]);
            }
            header('Location: bacheca.php');
        }
    }

    require("template/base-login.php");
?>

