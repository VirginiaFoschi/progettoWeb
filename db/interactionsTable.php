<?php
class InteractionsTable{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function isInterested($user, $autore_rec, $libro, $autore_lib) {
        $stmt = $this->db->prepare("SELECT * FROM interazione WHERE username_int = ? AND autore_recensione = ? AND titolo_libro = ? AND autore_libro = ? "); 
        $stmt->bind_param('ssss',$user, $autore_rec, $libro, $autore_lib);  
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

    public function insert($user, $autore_rec, $libro, $autore_lib) {
        $stmt = $this->db->prepare("INSERT INTO interazione(username_int, autore_recensione, titolo_libro, autore_libro) VALUES(?,?,?,?) ");
        $stmt->bind_param('ssss',$user, $autore_rec, $libro, $autore_lib);  
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function delete($user, $autore_rec, $libro, $autore_lib) {
        $stmt = $this->db->prepare("DELETE FROM interazione WHERE username_int = ? AND autore_recensione = ? AND titolo_libro = ? AND autore_libro = ? ");
        $stmt->bind_param('ssss',$user, $autore_rec, $libro, $autore_lib);  
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function getUserLikes($user) {
        $stmt = $this->db->prepare("SELECT autore_recensione, titolo_libro, autore_libro FROM interazione WHERE username_int = ? "); 
        $stmt->bind_param('s',$user);  
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

}
?>