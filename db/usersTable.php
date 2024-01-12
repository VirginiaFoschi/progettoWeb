<?php
class UsersTable{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    /*query che mi permetteranno di andare a recuperare i vari post nel mio db-> saranno quelle che andrò ad utilizzare nella pagina di index*/
    
    
    public function checkLogin($u, $p){ 
        $stmt = $this->db->prepare("SELECT * FROM utente WHERE username=? AND `password`=? ");
        $stmt->bind_param('ss',$u, $p);  
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);    
    }

    public function checkIfExists($n){ 
        $stmt = $this->db->prepare("SELECT * FROM utente WHERE username=? ");
        $stmt->bind_param('s',$n);  
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);    
    }

    public function registerLoggedUser($name, $surname, $username, $password, $address, $image) {
        $stmt = $this->db->prepare("INSERT INTO utente (nome, cognome, username, `password`, indirizzo, immagine, follower, follow) VALUES (?,?,?,?,?,?,0,0) ");
        $stmt->bind_param('ssssss',$name, $surname, $username, $password, $address, $image);  
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function saveUserFavouriteGenre($s, $username) {
        $stmt = $this->db->prepare("INSERT INTO preferenze(nome_genere, username) VALUES(?,?)");
        $stmt->bind_param('ss',$s, $username);  
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function getGenres() {
        $stmt = $this->db->prepare("SELECT nome FROM genere "); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

    /*Ritorna il numero di follower di un utente*/
    public function getFollower($username) {
        $stmt = $this->db->prepare("SELECT COUNT(*) AS follower_count FROM segue WHERE Usurname_Seguito = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    /*Ritorna il numero di follow di un utente*/
    public function getFollow($username) {
        $stmt = $this->db->prepare("SELECT COUNT(*) AS follow_count FROM segue WHERE Usurname_SeguitoDa = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /*Ritorna l'immagine di profilo di un utente*/
    public function getImageProfile($username) {
        $stmt = $this->db->prepare("SELECT Immagine FROM utente WHERE Usurname = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>