<?php
require_once("db/database.php");
$dbh = new DatabaseHelper("localhost", "root", "", "elaboratoweb", 3307); //per la creazione del database
define("UPLOAD_DIR", "./upload/")
?>