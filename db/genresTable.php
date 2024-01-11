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

}
?>