<?php
session_start();
require_once("db/database.php");
require_once("utils/functions.php");
registerLastResearch(isset($_SESSION["text"]) ? $_SESSION["text"] : "");
registerGenre(isset($_SESSION["genere"]) ? $_SESSION["genere"] : "");
$dbh = new DatabaseHelper("localhost", "root", "", "elaborato_web", 3307); //per la creazione del database
define("UPLOAD_DIR", "./upload/")
?>