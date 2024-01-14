<?php

/*Classe che contiene i tre tipi di post: annuncio, recensione e post libro*/
class PostTable
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function getAnnuncioProfilo($username)
    {
        $stmt = $this->db->prepare("SELECT ID_Evento, dataEvento, luogo, nomeEvento, descrizione, immagine FROM evento WHERE Usurname_Autore = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $annunci = $result->fetch_all(MYSQLI_ASSOC);

        $risultatoFinale = array();

        foreach ($annunci as $annuncio) {

            $stmt = $this->db->prepare("SELECT COUNT(*) AS numLike FROM interesse WHERE ID_Evento = ?");
            $stmt->bind_param('i', $annuncio["ID_Evento"]);
            $stmt->execute();
            $result1 = $stmt->get_result();
            $row = $result1->fetch_assoc();

            $risultatoFinale[] = array(
                'Evento' => $annuncio,
                'NumLike' => $row['numLike']
            );

        }
        return $risultatoFinale;
    }

    public function getRecensioneProfilo($username)
    {
        $stmt = $this->db->prepare("SELECT * FROM recensione WHERE Autore_Recensione = ? ");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $recensioni = $result->fetch_all(MYSQLI_ASSOC);

        $risultatoFinale = array();

        foreach ($recensioni as $recensione) {

            $stmt = $this->db->prepare("SELECT COUNT(*) AS numLike FROM interazione WHERE Autore_Recensione = ? AND Titolo_Libro = ? AND Autore_Libro = ?");
            $stmt->bind_param('sss', $recensione["Autore_Recensione"], $recensione["Titolo_Libro"], $recensione["Autore_Libro"]);
            $stmt->execute();
            $result1 = $stmt->get_result();
            $row = $result1->fetch_assoc();

            $risultatoFinale[] = array(
                'Recensione' => $recensione,
                'NumLike' => $row['numLike']
            );

        }
        return $risultatoFinale;
    }

    public function getPostLibroProfilo($username)
    {
        $stmt = $this->db->prepare("SELECT Titolo, Autore, Casa_Editrice, Trama, Condizioni, Immagine, Nome_Genere FROM libro_postato WHERE Usurname_Autore = ? ");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /*funzioni che permettono di pubblicare un post */

    public function pubblicaAnnuncio($dataEvento, $luogo, $descrizione, $usernameAutore ){
        $stmt = $this->db->prepare("INSERT INTO EVENTO(ID_Evento, Data_Evento, Luogo, Descrizione, Usurname_Autore) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('isssss', $dataEvento, $luogo, $descrizione, $usernameAutore);
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