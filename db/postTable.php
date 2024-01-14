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
        $stmt = $this->db->prepare("SELECT ID_Evento, Data_Evento, luogo, Nome_Evento, descrizione, DataPubblicazione FROM evento WHERE Username_Autore = ?");
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
        $stmt = $this->db->prepare("SELECT * FROM libro_postato WHERE Username_Autore = ? ");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getPosts($user, $text){
        $stmt = $this->db->prepare("SELECT L.id_libro, L.titolo, L.autore, L.trama, L.casa_editrice, L.condizioni, U.immagine AS fotoProfilo, L.immagine AS copertina, U.username, L.nome_genere 
                FROM libro_postato L 
                JOIN utente U ON L.Username_Autore = U.username
                LEFT JOIN scambio S ON L.id_libro = S.id_libro1 OR L.id_libro = S.id_libro2 
                WHERE U.username <> ? AND (S.data_fine IS NULL OR S.data_fine > NOW()) AND (L.autore LIKE ? OR L.titolo LIKE ?)");
        $str = $text . "%";
        $stmt->bind_param('sss', $user, $str, $str);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /*funzioni che permettono di pubblicare un post */

    public function pubblicaAnnuncio($dataEvento, $luogo, $descrizione, $immagine, $usernameAutore ){
        $stmt = $this->db->prepare("INSERT INTO EVENTO(ID_Evento, Data_Evento, Luogo, Descrizione, Immagine, Usurname_Autore) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('isssss', $dataEvento, $luogo, $descrizione, $immagine, $usernameAutore);
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function pubblicaRecensione($autoreRecensione, $voto, $titolo, $autoreLibro, $immagine, $recensione)
    {
        $stmt = $this->db->prepare("INSERT INTO RECENSIONE(Autore_Recensione, Voto, Titolo_Libro, Autore_Libro, Immagine,Recensione) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sissss', $autoreRecensione, $voto, $titolo, $autoreLibro, $immagine, $recensione);
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function pubblicaLibro($titolo, $autore, $casaEditrice, $trama, $condizioni, $Immagine, $usernameAutore, $genere)
    {
        $stmt = $this->db->prepare("INSERT INTO LIBRO_POSTATO(ID_Libro, Titolo, Autore, Casa_Editrice, Trama, Condizioni, Immagine, Username_Autore, Nome_Genere) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('issssssss', $titolo, $autore, $casaEditrice, $trama, $condizioni, $Immagine, $usernameAutore, $genere);
        $stmt->execute();
        $result = $stmt->get_result();
    }

    public function deleteLibro($id_libro)
    {
        $stmt = $this->db->prepare("DELETE FROM libro_postato WHERE ID_Libro = ? ");
        $stmt->bind_param('i', $id_libro);
        $stmt->execute();
    }

    public function getScambiUtente($account)
    {
        $libri = $this->getPostLibroProfilo($account);
        
        $resultTotale = array();
        foreach ($libri as $libro) {
            $id_libro = $libro["ID_Libro"];
            $stmt = $this->db->prepare("SELECT Data_Fine
                                        FROM scambio 
                                        WHERE ID_Libro1 = ? AND Data_Fine > NOW()");
            $stmt->bind_param('i', $id_libro);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            if ($row) {
                $resultTotale[] = array(
                    'Libro' => $libro,
                    'DataFine' => $row["Data_Fine"]
                );
            }

            $stmt = $this->db->prepare("SELECT Data_Fine
                                        FROM scambio 
                                        WHERE ID_Libro2 = ? AND Data_Fine > NOW()");
            $stmt->bind_param('i', $id_libro);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            if ($row) {
                $resultTotale[] = array(
                    'Libro' => $libro,
                    'DataFine' => $row["Data_Fine"]
                );
            }
        }

        return $resultTotale;
    }
}
?>