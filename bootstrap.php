<?php
session_start();
require_once("db/database.php");
require_once("utils/functions.php");
$dbh = new DatabaseHelper("localhost", "root", "", "elaboratoweb", 3307); //per la creazione del database
define("UPLOAD_DIR", "./upload/")
?>