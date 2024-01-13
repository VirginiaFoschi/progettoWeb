<?php
class ReviewsTable{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getReviews() {
        $stmt = $this->db->prepare("SELECT voto, titolo_libro, autore_libro, autore_recensione, recensione.immagine, recensione, username, utente.immagine AS userImage FROM recensione, utente WHERE autore_recensione=username "); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

}
?>