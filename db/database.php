<?php
require_once("genresTable.php");
require_once("preferencesTable.php");
require_once("usersTable.php");
require_once("postTable.php");
require_once("scambiTable.php");
require_once("reviewsTable.php");
require_once("eventsTable.php");
require_once("followsTable.php");
require_once("interactionsTable.php");
require_once("interestsTable.php");
require_once("notificationsTable.php");

class DatabaseHelper{
    private $db;
    private $genresTable;
    private $userTable;
    private $preferencesTable;
    private $postTable;
    private $scambiTable;
    private $notificationsTable;
    private $reviewsTable;
    private $eventsTable;
    private $followsTable;
    private $interactionsTable;
    private $interestsTable;

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
        $this->scambiTable = new ScambiTable($this->db);
        $this->notificationsTable = new NotificationsTable($this->db);

        $this->reviewsTable = new ReviewsTable($this->db);
        $this->eventsTable = new EventsTable($this->db);
        $this->followsTable = new FollowsTable($this->db);
        $this->interactionsTable = new InteractionsTable($this->db);
        $this->interestsTable = new InterestsTable($this->db);
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

    public function getScambioTable() {
        return $this->scambiTable;
    }

    public function getReviewsTable() {
        return $this->reviewsTable;
    }

    public function getEventsTable() {
        return $this->eventsTable;
    }

    public function getFollowsTable(){
        return $this->followsTable;
    }

    public function getInteractionsTable(){
        return $this->interactionsTable;
    }

    public function getInterestsTable(){
        return $this->interestsTable;
    }
    

}
?>