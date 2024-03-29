<?php
require_once("bootstrap.php");

$username = $_SESSION['username'];
$templateparams["nome"] = "impostazioni-genere.php";
$templateparams["js"] = array("impostazioni.js");
$templateparams["css"] = array("impostazioni.css");
$templateparams["generi"] = $dbh->getGenresTable()->getGenres();
$templateparams["genere-utente"] = $dbh->getGenresTable()->getGenereUtente($username);
if (isset($_POST["genere"])) {
    $dbh->getGenresTable()->deleteGenereUtente($username);
    foreach ($_POST["genere"] as $genere) {
        $dbh->getPreferencesTable()->saveUserFavouriteGenre($genere, $username);
    }

}

require("template/base-menu.php");
?>