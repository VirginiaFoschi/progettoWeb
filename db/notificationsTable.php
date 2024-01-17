<?php

class NotificationsTable
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    /*funzione per inserire una nuova notifica*/
    public function addNotification($idLibro, $usernameInt, $tipo)
    {
        $stmt = $this->db->prepare("INSERT INTO NOTIFICHE(ID_Libro, Username_Int, Tipo, data_notifica, Visualizzato) VALUES (?, ?, ?, NOW(), false)");
        $stmt->bind_param('iss', $idLibro, $usernameInt, $tipo);
        $stmt->execute();
        $result = $stmt->get_result();
    }
    /*funzione per visualizzare le notifiche*/

    public function getNotifications($username)
    {
        $stmt = $this->db->prepare("SELECT N.*, U.Immagine as userProfileImage, L.Titolo as bookTitle FROM NOTIFICHE N JOIN LIBRO_POSTATO L ON N.ID_Libro = L.ID_Libro JOIN UTENTE U ON N.Username_Int = U.Username WHERE L.Username_Autore = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getSuspendNotifyLibro($username, $id_libro)
    {
        $stmt = $this->db->prepare("SELECT N.id_libro, L.username_autore FROM NOTIFICHE N JOIN LIBRO_POSTATO L ON N.ID_Libro = L.ID_Libro WHERE L.username_autore = ? AND N.tipo = 'in_sospeso' AND L.ID_Libro = ?");
        $stmt->bind_param('si', $username, $id_libro);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function getInterests($username)
    {
        $stmt = $this->db->prepare("SELECT I.*, U.Immagine as userProfileImage FROM INTERESSE I JOIN EVENTO E ON I.ID_Evento = E.ID_Evento JOIN UTENTE U ON I.Username_Int = U.Username WHERE E.Username_Autore = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getInteraction($username)
    {
        $stmt = $this->db->prepare("SELECT I.*, U.Immagine as userProfileImage FROM INTERAZIONE I JOIN RECENSIONE R ON I.Autore_Recensione = R.Autore_Recensione AND I.Titolo_Libro = R.Titolo_Libro JOIN UTENTE U ON I.Autore_Recensione = U.Username AND I.Autore_Libro = R.Autore_Libro WHERE R.Autore_Recensione = ? ");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getComments($username)
    {
        $stmt = $this->db->prepare("SELECT C.*, U.Immagine as userProfileImage FROM COMMENTO C JOIN EVENTO E ON C.ID_Evento = E.ID_Evento JOIN UTENTE U ON C.Autore_Commento = U.Username WHERE E.Username_Autore = ? ");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /*funzione per visualizzare le notifiche*/
    public function removeNotification()
    {
        $stmt = $this->db->prepare("DELETE FROM NOTIFICA WHERE Tipo = 'rifiutata' ");
        $stmt->execute();
    }

    public function getSuspendNotify($username)
    {
        $stmt = $this->db->prepare("SELECT N.id_libro, L.username_autore FROM NOTIFICHE N JOIN LIBRO_POSTATO L ON N.ID_Libro = L.ID_Libro WHERE N.username_int = ? AND N.tipo = 'in_sospeso'");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateNotificationType($idNotifica, $newType)
    {
        // Prepara la query SQL
        $stmt = $this->db->prepare("UPDATE NOTIFICHE SET Tipo = ? WHERE ID_Notifica = ?");

        // Collega i parametri alla query SQL
        $stmt->bind_param('si', $newType, $idNotifica);

        // Esegui la query SQL
        $stmt->execute();
    }

    public function getNotificationsNotDisplayed($username)
    {
        $stmt = $this->db->prepare("SELECT COUNT(N.ID_Notifica) as num_not FROM NOTIFICHE N JOIN LIBRO_POSTATO L ON N.ID_Libro = L.ID_Libro WHERE L.Username_Autore = ? AND N.Visualizzato = 'false'");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $notifica = $result->fetch_all(MYSQLI_ASSOC);

        $stmt = $this->db->prepare("SELECT COUNT(*) as count_rec FROM INTERAZIONE WHERE Autore_Recensione = ? AND Visualizzato = 'false'");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $recensioni = $result->fetch_all(MYSQLI_ASSOC);

        $stmt = $this->db->prepare("SELECT COUNT(*) as count_int FROM INTERESSE I JOIN EVENTO E ON I.ID_Evento = E.ID_Evento WHERE E.Username_Autore = ? AND I.Visualizzato = 'false'");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $interesse = $result->fetch_all(MYSQLI_ASSOC);

        $stmt = $this->db->prepare("SELECT COUNT(*) as count_com FROM COMMENTO C JOIN EVENTO E ON C.ID_Evento = E.ID_Evento WHERE E.Username_Autore = ? AND C.Visualizzato = 'false'");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $commento = $result->fetch_all(MYSQLI_ASSOC);

        $notifiche = $notifica[0]["num_not"] + $recensioni[0]["count_rec"] + $interesse[0]["count_int"] + $commento[0]["count_com"];
        return $notifiche;
    }
}
?>