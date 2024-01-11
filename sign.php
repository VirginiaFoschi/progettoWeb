<?php
require_once("bootstrap.php");
$templateparams["erroreLogin"] = false;
$templateparams["generi"] = $dbh->getGenresTable()->getGenres();

if(isset($_POST["username"]) && isset($_POST["password"])
&& isset($_POST["name"]) && isset($_POST["surname"]) 
&& isset($_POST["address"]) && isset($_POST["genres"])) {
    $login_result = $dbh->getUsersTable()->checkLogin($_POST["username"]);
    if(count($login_result)!=0){
        //login fallito
        $templateparams["erroreLogin"] = true;
    } 
    else {
        if(isset($_POST["image"])) {
            $image = $_POST["image"];
        } else {
            $image= "img/immagineProfilo.img";
        }
        $dbh->getUsersTable()->registerLoggedUser($_POST["name"], $_POST["surname"], $_POST["username"], $_POST["password"], $_POST["address"],$image);
        $genres=$_POST["genres"];
        print_r($genres);
        foreach($genres as $genre) {
            $dbh->getGenresTable()->saveUserFavouriteGenre($genre,$_POST["username"]);
        }
        header('Location: bacheca.php');
    }
}
?>

<!doctype html>
<html lang="it">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/sign.css" >

<title>Progetto Tecnologie Web</title>
</head>
<body class="bg-light">
    <div class="container-fluid p-0 overflow-hidden">
        <header class="text-center font-monospace">
            <h1 class="py-3">Mille e Una Pagina</h1>
        </header>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <section>
                    <h2>Crea un account</h2>
                    <form action="#" method="POST">
                        <div class="mb-3" id="select-image">
                            <img src="img/immagineProfilo.png" alt="" id="profilo" class="image">
                            <label for="input">Seleziona foto profilo:
                            <input type="file" id="input" accept="image/*" name="image"></label>
                        </div>
                        <?php if($templateparams["erroreLogin"]): ?>
                            <div id="liveAlertPlaceholder" class=" mb-3 alert alert-danger alert-dismissible" role="alert">
                            <div id="message">Errore! Esiste già un utente con lo stesso username</div>
                            <button type="button" class="btn-close" id="btnclose" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>  
                        <?php else: ?>
                            <div id="liveAlertPlaceholder" class="mb-3"></div>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="surname" class="form-label">Cognome</label>
                            <input type="text" class="form-control" id="surname" name="surname">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" minlength="5" class="form-control" id="password" name="password">
                            <span class="form-text">
                                Your password must be at least 5 characters long
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Indirizzo di spedizione</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="mb-3">
                            <label for="genres" class="mb-2">Generi preferiti</label>
                            <select class="form-select" size="3" id="genres" name="genres[]" multiple>
                            <?php foreach($templateparams["generi"] as $genere): ?>
                                <option value="<?php echo $genere["nome"]; ?>"><?php echo $genere["nome"] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <span class="form-text">
                                Press CTRL and select all your favourite genres
                            </span>
                        </div>
                        <div class="mb-3">
                            <div class="col-12 text-end">
                                <input id="backbtn" type="button" class="btn btn-outline-primary" value="Back">
                                <input id="signbtn" type="button" class="btn btn-outline-primary" value="Sign In" onclick="appendAlert()">
                            </div>
                        </div>
                    </form>
                </section>
            </div> 
        </div>
        <div class="row">
            <div class="col-12">
                <footer class="font-monospace text-center py-4">
                    <p>From MVC</p>
                </footer>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
    <script src="js/sign.js"></script>
</body>
</html>
