<?php
class ScambiTable
{

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    private function getLibriUtente($username)
    {
        $stmt = $this->db->prepare("SELECT ID_Libro FROM libro_postato WHERE Username_Autore=? ");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getScambiAttivi($username)
    {
        $libriUtente = $this->getLibriUtente($username);


        $risultatoTotale = array();

        foreach ($libriUtente as $id_libro) {
            $resultPerLibro = array();

            // Titolo, Immagine e Usurname_Utente del libro corrente
            $stmt = $this->db->prepare("SELECT Titolo, Immagine, Username_Autore FROM libro_postato WHERE ID_Libro = ?");
            $stmt->bind_param('i', $id_libro["ID_Libro"]);
            $stmt->execute();
            $resultLibro = $stmt->get_result();
            $rowLibro = $resultLibro->fetch_assoc(); //Una riga del risultato

            // Esegui la query per trovare tutti i libri2 associati al libro corrente e la data di scadenza
            $stmt = $this->db->prepare("SELECT ID_Libro2, Data_Fine FROM scambio WHERE ID_Libro1 = ? AND Data_Fine > NOW()");
            $stmt->bind_param('i', $id_libro["ID_Libro"]);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                $libro2 = $row['ID_Libro2'];

                // Titolo, Immagine e Usurname_Utente del libro corrente
                $stmt = $this->db->prepare("SELECT Titolo, Immagine, Username_Autore FROM libro_postato WHERE ID_Libro = ?");
                $stmt->bind_param('i', $libro2);
                $stmt->execute();
                $resultLibro2 = $stmt->get_result();
                $row2 = $resultLibro2->fetch_assoc();

                if ($row2) {
                    array_push($resultPerLibro, array(
                        'Libro1' => array('ID_Libro1' => $id_libro["ID_Libro"], 'DettagliLibro1' => $rowLibro),
                        'Libro2' => array('ID_Libro2' => $libro2, 'DettagliLibro2' => $row2),
                        'Data_Fine' => $row['Data_Fine']
                    ));
                }

            }


            // Esegui la query per trovare tutti i libri2 associati al libro corrente e la data di scadenza
            $stmt = $this->db->prepare("SELECT ID_Libro1, Data_Fine FROM scambio WHERE ID_Libro2 = ? AND Data_Fine > NOW()");
            $stmt->bind_param('i', $id_libro["ID_Libro"]);
            $stmt->execute();
            $resultLibro1 = $stmt->get_result();

            while ($row = $resultLibro1->fetch_assoc()) {
                $libro1 = $row['ID_Libro1'];

                // Titolo, Immagine e Usurname_Utente del libro corrente
                $stmt = $this->db->prepare("SELECT Titolo, Immagine, Username_Autore FROM libro_postato WHERE ID_Libro = ?");
                $stmt->bind_param('i', $libro1);
                $stmt->execute();
                $resultLibroUno = $stmt->get_result();
                $row2 = $resultLibroUno->fetch_assoc();


                if ($row2) {
                    array_push($resultPerLibro, array(
                        'Libro1' => array('ID_Libro1' => $id_libro["ID_Libro"], 'DettagliLibro1' => $rowLibro),
                        'Libro2' => array('ID_Libro2' => $libro1, 'DettagliLibro2' => $row2),
                        'Data_Fine' => $row['Data_Fine']
                    ));
                }

            }
            $risultatoTotale = array_merge($risultatoTotale, $resultPerLibro);
        }
        return $risultatoTotale;
    }

    public function getEtichetta($libro1, $libro2) {
        $resultTotale = array();
        $stmt = $this->db->prepare("SELECT utente.* FROM utente JOIN libro_postato ON utente.Username = libro_postato.Username_Autore WHERE libro_postato.ID_Libro=? ");
        $stmt->bind_param('i', $libro1);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        $stmt = $this->db->prepare("SELECT utente.* FROM utente JOIN libro_postato ON utente.Username = libro_postato.Username_Autore WHERE libro_postato.ID_Libro=? ");
        $stmt->bind_param('i', $libro2);
        $stmt->execute();
        $result2 = $stmt->get_result();
        $row2 = $result2->fetch_assoc();

        if ($row && $row2) {
            $resultTotale[] = array(
                'Mittente' => $row,
                'Destinatario' => $row2
            );
        }

        return $resultTotale;
    }

    public function setScambio($IDlibro1, $IDlibro2){
        $stmt = $this->db->prepare("INSERT INTO SCAMBIO( Data_Inizio, ID_Libro1, ID_Libro2, Data_Fine ) VALUES ( NOW(), ?, ?,DATE_ADD(NOW(), INTERVAL 30 DAY))");
        $stmt->bind_param('ii',$IDlibro1 ,$IDlibro2);
        $stmt->execute();
    }
}
?>