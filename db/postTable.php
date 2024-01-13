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
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getPostLibroProfilo($username)
    {
        $stmt = $this->db->prepare("SELECT Titolo, Autore, Casa_Editrice, Trama, Condizioni, Immagine, Nome_Genere FROM libro_postato WHERE Usurname_Autore = ? ");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>