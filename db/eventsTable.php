<?php
class EventsTable{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getEvents() {
        $stmt = $this->db->prepare("SELECT id_evento, nome_evento, data_evento, luogo, descrizione, username, utente.immagine AS userImage, dataPubblicazione FROM evento, utente WHERE username_autore=username "); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

}
?>