<?php
session_start();
require_once("db/database.php");
require_once("utils/functions.php");
$dbh = new DatabaseHelper("localhost", "root", "", "elaborato_web", 3307); //per la creazione del database
define("UPLOAD_DIR", "./upload/")
?>