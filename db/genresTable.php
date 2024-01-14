<?php
class GenresTable{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getGenres() {
        $stmt = $this->db->prepare("SELECT nome FROM genere "); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

    public function getGenereUtente($username) {
        $stmt = $this->db->prepare("SELECT Nome_Genere as nome FROM preferenze WHERE Username = ? "); 
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

}
?>