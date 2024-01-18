<main>
    <header>
        <ul class="nav nav-pills nav-fill">

            <li class="nav-item">
                <a class="nav-link" href="announcement.php" onclick="cambiaTab2(this)">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="review.php" onclick="cambiaTab2(this)">Recensione</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active4" onclick="cambiaTab2(this)">Libro</a>
            </li>
        </ul>
    </header>
    <section class="sectionAddBook">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="col d-flex justify-content-center">
                <label for="fileInputBook" class="sr-only">Upload image</label>
                <img src="upload/InserisciImg.jpeg" alt="" class="img_profile" id="copertina">
                <input type="file" id="fileInputBook" accept="image/*" style="display: none;" name="image">
                <a class="nav-link" href="#" onclick="addBook()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-plus-circle" viewBox="0 0 16 16" id="addImg">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                </a>
            </div>

            <div>
                <ul>
                    <li>

                        <label for="titolo">Nome Libro</label>
                        <input type="text" class="form-control " id="titolo" name="titolo">

                    </li>
                    <li>

                        <label for="autore">Autore</label>
                        <input type="text" class="form-control " id="autore" name="autore">

                    </li>
                    <li>


                        <label for="casaEditrice">Casa Editrice</label>
                        <input type="text" class="form-control " id="casaEditrice" name="casaEditrice">

                    </li>
                </ul>

                <ul>
                    <li>

                        <label for="floatingSelectCondizioni">Condizioni</label>
                        <select class="form-select " id="floatingSelectCondizioni"
                            aria-label="Floating label select example" name="condizioni">
                            <option selected>Ottime</option>
                            <option value="1">Buone</option>
                            <option value="2">Un po' rovinato</option>
                            <option value="3">Molto rovinato</option>
                        </select>

                    </li>
                    <li>

                        <label for="floatingSelectGenere">Genere</label>
                        <select class="form-select " id="floatingSelectGenere"
                            aria-label="Floating label select example" name="genere">
                            <?php foreach ($templateparams["generi"] as $genere): ?>
                                <option value="<?php echo $genere["nome"]; ?>">
                                    <?php echo $genere["nome"] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                    </li>


                    <li>

                        <label for="floatingTextarea">Trama</label>
                        <textarea class="form-control " placeholder="Trama" id="floatingTextarea"
                            name="trama"></textarea>

                    </li>
                </ul>
            </div>
            <footer>
                <div class="mb-3 text-center">

                    <button id="invia" type="submit" class="btn" value="send">Invia</button>

                </div>
            </footer>
        </form>
    </section>
</main>