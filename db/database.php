<?php
require_once("genresTable.php");
require_once("preferencesTable.php");
require_once("usersTable.php");
require_once("postTable.php");

class DatabaseHelper{
    private $db;
    private $genresTable;
    private $userTable;
    private $preferencesTable;
    private $postTable;
    private $currentUsername; /*Utente che ha effettuato il login*/

    public function __construct($servername, $username, $password, $dbname){
        $this->db = new mysqli($servername,$username,$password,$dbname); /*this variabile che fa riferimento all'oggetto in questione*/
        /*devo andare a verificare se c'è stato qualche tipo di errore nella connessione con il db*/
        if($this->db->connect_error){
            die("Connection failed: " . $this->db->connect_error);
        }

        $this->genresTable = new GenresTable($this->db);
        $this->usersTable = new UsersTable($this->db);
        $this->preferencesTable = new PreferencesTable($this->db);
        $this->postTable = new PostTable($this->db);

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

    public function getPostTable() {
        return $this->postTable;
    }

    /*Funzione che salva l'username dell'attuale utente che ha effettuato l'accesso */
    public function setCurrentUsername($username) {
        $this->currentUsername = $username;
    }

    public function getCurrentUsername() {
        return $this->currentUsername;
    }
}
?>