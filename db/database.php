<?php
require_once("genresTable.php");
require_once("preferencesTable.php");
require_once("usersTable.php");

class DatabaseHelper{
    private $db;
    private $genresTable;
    private $userTable;
    private $preferencesTable;

    public function __construct($servername, $username, $password, $dbname){
        $this->db = new mysqli($servername,$username,$password,$dbname); /*this variabile che fa riferimento all'oggetto in questione*/
        /*devo andare a verificare se c'è stato qualche tipo di errore nella connessione con il db*/
        if($this->db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }

        $this->genresTable = new GenresTable($this->db);
        $this->usersTable = new UsersTable($this->db);
        $this->preferencesTable = new PreferencesTable($this->db);
    }

    public function getUsersTable(){
        return $this->usersTable;
    }

    public function getPreferencesTable() {
        return $this->preferencesTable;
    }

    public function getGenresTable() {
        return $this->genresTable;
    }

}
?>