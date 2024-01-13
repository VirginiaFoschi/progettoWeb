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
        $stmt = $this->db->prepare("SELECT ID_Libro FROM libro_postato WHERE Usurname_Autore=? ");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        return $result = $stmt->get_result();
    }

    public function getScambiAttivi($username)
    {
        $libriUtente = $this->getLibriUtente($username);

        $risultatoTotale = array();

        foreach ($libriUtente as $id_libro) {
            $resultPerLibro = array();

            // Titolo, Immagine e Usurname_Utente del libro corrente
            $stmt = $this->db->prepare("SELECT Titolo, Immagine, Usurname_Utente FROM libro_postato WHERE ID_Libro = ?");
            $stmt->bind_param('s', $id_libro);
            $stmt->execute();
            $resultLibro = $stmt->get_result();
            $rowLibro = $resultLibro->fetch_assoc(); //Una riga del risultato

            // Esegui la query per trovare tutti i libri2 associati al libro corrente e la data di scadenza
            $stmt = $this->db->prepare("SELECT ID_Libro2, Data_Fine FROM scambio WHERE ID_Libro1 = ?");
            $stmt->bind_param('s', $id_libro);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
                $libro2 = $row['ID_Libro2'];

                // Titolo, Immagine e Usurname_Utente del libro corrente
                $stmt = $this->db->prepare("SELECT Titolo, Immagine, Usurname_Utente FROM libro_postato WHERE ID_Libro = ?");
                $stmt->bind_param('s', $libro2);
                $stmt->execute();
                $resultLibro2 = $stmt->get_result();
                $row2 = $resultLibro2->fetch_assoc();


                if ($row2) {
                    $resultPerLibro[] = array(
                        'Libro1' => array('ID_Libro1' => $id_libro, 'DettagliLibro1' => $rowLibro),
                        'Libro2' => array('ID_Libro2' => $libro2, 'DettagliLibro2' => $row2),
                        'Data_Fine' => $row['Data_Fine']
                    );
                }

            }

            $risultatoTotale = array_merge($risultatoTotale, $resultPerLibro);

            // Esegui la query per trovare tutti i libri2 associati al libro corrente e la data di scadenza
            $stmt = $this->db->prepare("SELECT ID_Libro1, Data_Fine FROM scambio WHERE ID_Libro2 = ?");
            $stmt->bind_param('s', $id_libro);
            $stmt->execute();
            $resultLibro1 = $stmt->get_result();

            while ($row = $resultLibro1->fetch_assoc()) {
                $libro1 = $row['ID_Libro1'];

                // Titolo, Immagine e Usurname_Utente del libro corrente
                $stmt = $this->db->prepare("SELECT Titolo, Immagine, Usurname_Utente FROM libro_postato WHERE ID_Libro = ?");
                $stmt->bind_param('s', $libro1);
                $stmt->execute();
                $resultLibroUno = $stmt->get_result();
                $row2 = $resultLibroUno->fetch_assoc();


                if ($row2) {
                    $resultPerLibro[] = array(
                        'Libro1' => array('ID_Libro1' => $id_libro, 'DettagliLibro1' => $rowLibro),
                        'Libro2' => array('ID_Libro2' => $libro1, 'DettagliLibro2' => $row2),
                        'Data_Fine' => $row['Data_Fine']
                    );
                }

            }
            $risultatoTotale = array_merge($risultatoTotale, $resultPerLibro);
        }
        return $risultatoTotale;
    }
}
?>