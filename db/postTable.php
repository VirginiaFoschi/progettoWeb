<?php

/*Classe che contiene i tre tipi di post: annuncio, recensione e post libro*/
class PostTable {
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getAnnuncioProfilo($username) {
        $stmt = $this->db->prepare("SELECT dataEvento, luogo, nomeEvento, descrizione, immagine FROM evento WHERE Usurname_Autore = ?"); 
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

    public function getRecensioneProfilo($username) {
        $stmt = $this->db->prepare("SELECT * FROM recensione WHERE Autore_Recensione = ? "); 
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }

    public function getPostLibroProfilo($username) {
        $stmt = $this->db->prepare("SELECT Titolo, Autore, Casa_Editrice, Trama, Condizioni, Immagine, Nome_Genere FROM libro_postato WHERE Usurname_Autore = ? "); 
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }
}
?>