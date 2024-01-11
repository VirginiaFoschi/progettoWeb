<?php
require_once("bootstrap.php");

$templateparams["annunciProfilo"] = $dbh->getPostTable()->getAnnuncioProfilo($dbh->getCurrentUsername());
$templateparams["recensioneProfilo"] = $dbh->getPostTable()->getRecensioneProfilo($dbh->getCurrentUsername());
$templateparams["libroProfilo"] = $dbh->getPostTable()->getPostLibroProfilo($dbh->getCurrentUsername());
$templateparams["profiloImmagine"] = $dbh->getUsersTable()->getImageProfile($dbh->getCurrentUsername());
$templateparams["follower"] = $dbh->getUsersTable()->getFollower($dbh->getCurrentUsername());
$templateparams["follow"] = $dbh->getUsersTable()->getFollow($dbh->getCurrentUsername());

?>