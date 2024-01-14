<?php

class NotificationsTable{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    /*funzione per inserire una nuova notifica*/
    public function addNotification( $idLibro ,$usernameInt, $tipo){
        $stmt = $this->db->prepare("INSERT INTO NOTIFICHE(ID_Libro, Username_Int, Tipo, data_notifica) VALUES (?, ?, ?, NOW())");
        $stmt->bind_param('iss', $idLibro ,$usernameInt, $tipo);
        $stmt->execute();
        $result = $stmt->get_result();
    }
    /*funzione per visualizzare le notifiche*/

    public function getNotifications($username) {
        $stmt = $this->db->prepare("SELECT N.* FROM NOTIFICHE N JOIN LIBRO_POSTATO L ON N.ID_Libro = L.ID_Libro WHERE L.Usurname_Autore = ?"); 
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC); 
    }
}
?>