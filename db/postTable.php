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

    /*funzioni che permettono di pubblicare un post */

    public function pubblicaAnnuncio($dataEvento, $luogo, $descrizione, $immagine, $usernameAutore ){
        $stmt = $this->db->prepare("INSERT INTO EVENTO(ID_Evento, Data, Luogo, Descrizione, Immagine, Usurname_Autore) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('isssss', $data, $luogo, $descrizione, $immagine, $usernameAutore);
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function pubblicaRecensione($autoreRecensione, $voto, $titolo, $autoreLibro, $immagine, $recensione){
        $stmt = $this->db->prepare("INSERT INTO RECENSIONE(Autore_Recensione, Voto, Titolo_Libro, Autore_Libro, Immagine,Recensione) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sissss', $autoreRecensione, $voto, $titolo, $autoreLibro, $immagine, $recensione);
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function pubblicaLibro($titolo, $autore, $casaEditrice, $trama, $condizioni , $Immagine, $usernameAutore, $genere){
        $stmt = $this->db->prepare("INSERT INTO LIBRO_POSTATO(ID_Libro, Titolo, Autore, Casa_Editrice, Trama, Condizioni, Immagine, Username_Autore, Nome_Genere) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('issssssss',$titolo, $autore, $casaEditrice, $trama, $condizioni , $Immagine, $usernameAutore, $genere);
        $stmt->execute();
        $result = $stmt->get_result();
    }
}
?>