<?php
class InterestsTable{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function isInterested($user, $id_evento) {
        $stmt = $this->db->prepare("SELECT * FROM interesse WHERE username_int = ? AND id_evento = ? "); 
        $stmt->bind_param('ss',$user, $id_evento);  
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

    public function insert($user, $id_evento) {
        $stmt = $this->db->prepare("INSERT INTO interesse(username_int, id_evento) VALUES(?,?) ");
        $stmt->bind_param('ss',$user, $id_evento);  
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function delete($user, $id_evento) {
        $stmt = $this->db->prepare("DELETE FROM interesse WHERE username_int = ? AND id_evento = ? ");
        $stmt->bind_param('ss',$user, $id_evento);  
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function getUserLikes($user) {
        $stmt = $this->db->prepare("SELECT id_evento FROM interesse WHERE username_int = ? "); 
        $stmt->bind_param('s',$user);  
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

}
?>