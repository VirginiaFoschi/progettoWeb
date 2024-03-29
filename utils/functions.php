<?php
    function registerLoggedUser($username){
        $_SESSION["username"] = $username;
    }

    function registerLastResearch($text){
        $_SESSION["text"] = $text;
    }

    function registerGenre($genre) {
        $_SESSION["genere"] = $genre;
    }

    function formatDataOra($data) {
        $dataOra = new DateTime($data);

        // Formatta la data e l'ora nel formato desiderato
        return $dataOra->format('d/m/Y H:i');
    }

    /*function uploadImage($image) {
        $file_name = $image['name'];
        $tempname = $image['tmp_name'];
        $folder = 'upload/' . $file_name;
        if(!file_exists($folder)) {
            move_uploaded_file($tempname, $folder);
        }
    }*/

    function uploadImage($path, $image){
        $imageName = basename($image["name"]);
        $fullPath = $path.$imageName;
        
        $maxKB = 500;
        $acceptedExtensions = array("jpg", "jpeg", "png", "gif");
        $result = 0;
        $msg = "";
        //Controllo se immagine è veramente un'immagine
        $imageSize = getimagesize($image["tmp_name"]);
        if($imageSize === false) {
            $msg .= "File caricato non è un'immagine! ";
        }
        //Controllo dimensione dell'immagine < 500KB
        if ($image["size"] > $maxKB * 1024) {
            $msg .= "File caricato pesa troppo! Dimensione massima è $maxKB KB. ";
        }
    
        //Controllo estensione del file
        $imageFileType = strtolower(pathinfo($fullPath,PATHINFO_EXTENSION));
        if(!in_array($imageFileType, $acceptedExtensions)){
            $msg .= "Accettate solo le seguenti estensioni: ".implode(",", $acceptedExtensions);
        }
    
        //Controllo se esiste file con stesso nome ed eventualmente lo rinomino
        if (!file_exists($fullPath)) {
            if(strlen($msg)==0){
                if(!move_uploaded_file($image["tmp_name"], $fullPath)){
                    $msg.= "Errore nel caricamento dell'immagine.";
                }
                else{
                    $result = 1;
                    $msg = $imageName;
                }
            }
        } else {
            $result=1;
        }
        return array($result, $msg);
    }

?>