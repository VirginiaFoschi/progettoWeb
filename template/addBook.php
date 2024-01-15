<header><body class="bg-light">
    <div class="container-fluid p-0 overflow-hidden">
        <header>
        </header>
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link" href="announcement.html" onclick="cambiaTab(this)">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="review.html" onclick="cambiaTab(this)">Recensione</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" onclick="cambiaTab(this)">Libro</a>
                    </li>
                </ul>
            </div>
        </div></header>
<form action="#" method="POST" enctype="multipart/form-data">
<div class="row justify-content-center align-items-end">
                    <div class="col d-flex justify-content-center">
                        <img src="img/2200720.png" alt="" class="img_profile" id="profilo">
                        <input type="file" id="fileInput" accept="image/*" style="display: none;" name="image">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-plus-circle" viewBox="0 0 16 16" id="addImg">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                            </svg>
                        </a>
                    </div>
                </div>

    <ul>
        <li>
            <input type="text" class="form-control" id="titolo" placeholder="Nome Libro" name="titolo">
        </li>
        <li>
            <input type="text" class="form-control" id="autore" placeholder="Autore" name="autore">
        </li>
        <li>
            <input type="text" class="form-control" id="casaEditrice" placeholder="Casa Editrice" name="casaEditrice">
        </li>
    </ul>

    <div class="form-floating">
        <select class="form-select" id="condizioni" aria-label="Floating label select example" name="condizioni">
            <option selected>Ottime</option>
            <option value="1">Buone</option>
            <option value="2">Un po' rovinato</option>
            <option value="3">Molto rovinato</option>
        </select>
        <label for="floatingSelectCondizioni">Condizioni</label>
    </div>
    <div class="form-floating">
        <select class="form-select" id="genere" aria-label="Floating label select example" name="genere">
            <?php foreach ($templateparams["generi"] as $genere) : ?>
                <option value="<?php echo $genere["nome"]; ?>"><?php echo $genere["nome"] ?></option>
            <?php endforeach; ?>

        </select>
        <label for="floatingSelectGenere">Genere</label>
    </div>
    <div class="col-md-6 d-flex flex-column">

        <form class="text-center" action="#">
            <div class="d-grid gap-2 col-6 mx-auto">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            </div>
        </form>

        <div class="d-grid gap-2 col-3 mx-auto">
            <button id="invia" type="button" class="btn btn-lg btn-outline-primary" value="send" onclick="sendForm()" >Invia</button>
        </div>
    </div> 

</form>