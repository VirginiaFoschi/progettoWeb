<?php
class PreferencesTable{
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function saveUserFavouriteGenre($s, $username) {
        $stmt = $this->db->prepare("INSERT INTO preferenze(nome_genere, username) VALUES(?,?)");
        $stmt->bind_param('ss',$s, $username);  
        $stmt->execute();
        $result = $stmt->get_result();
    }

}
?>