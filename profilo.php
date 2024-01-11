<?php
require_once("bootstrap.php");

$templateparams["annunciProfilo"] = $dbh->getPostTable()->getAnnuncioProfilo();
$templateparams["recensioneProfilo"] = $dbh->getPostTable()->getRecensioneProfilo();
$templateparams["libroProfilo"] = $dbh->getPostTable()->getPostLibroProfilo();
$templateparams["profiloImmagine"] = $dbh->getUsersTable()->getImageProfile();
$templateparams["follower"] = $dbh->getUsersTable()->getFollower();
$templateparams["follow"] = $dbh->getUsersTable()->getFollow();

?>