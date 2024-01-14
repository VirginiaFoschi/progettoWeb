<?php

class NotificationsTable{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    /*funzione per inserire una nuova notifica*/
    public function addNotification( $idLibro ,$usernameInt, $tipo, $dataNotifica){
        $stmt = $this->db->prepare("INSERT INTO NOTIFICA(ID_Libro, Username_Int, Tipo, Data_Notifica) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('isss', $idLibro ,$usernameInt, $tipo, $dataNotifica);
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
     /*funzione per visualizzare le notifiche*/
    public function removeNotification() {
        $stmt = $this->db->prepare("DELETE FROM NOTIFICA WHERE Tipo = 'rifiutata' ");
        $stmt->execute();
    }
    
}
?>