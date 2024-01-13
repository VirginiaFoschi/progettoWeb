<?php
class FollowsTable{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function isFollowing($seguitoDa, $seguito) {
        $stmt = $this->db->prepare("SELECT * FROM segue WHERE username_seguitoda = ? AND username_seguito = ? "); 
        $stmt->bind_param('ss',$seguitoDa, $seguito);  
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

    public function insert($seguitoDa, $seguito) {
        $stmt = $this->db->prepare("INSERT INTO segue(username_seguitoda, username_seguito) VALUES(?,?) ");
        $stmt->bind_param('ss',$seguitoDa, $seguito);  
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function delete($seguitoDa, $seguito) {
        $stmt = $this->db->prepare("DELETE FROM segue WHERE username_seguitoda = ? AND username_seguito = ? ");
        $stmt->bind_param('ss',$seguitoDa, $seguito);  
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function getFollows($seguitoDa) {
        $stmt = $this->db->prepare("SELECT username_seguito FROM segue WHERE username_seguitoda = ? "); 
        $stmt->bind_param('s',$seguitoDa);  
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

}
?>