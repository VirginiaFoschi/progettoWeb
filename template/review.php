<main>
    <header>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="announcement.php" onclick="cambiaTab2(this)">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active4" href="#" onclick="cambiaTab2(this)">Recensione</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addBook.php" onclick="cambiaTab2(this)">Libro</a>
            </li>
        </ul>
    </header>
    <section class="sectionReview">
        <form action="#" method="POST" enctype="multipart/form-data">

            <div class="col d-flex justify-content-center">
                <label for="fileInput" class="sr-only">Upload image</label>
                <img src="./upload/InserisciImg.jpeg" alt="" class="img_profile" id="profilo" />
                <input type="file" id="fileInput" name="image" style="display: none;" />
                <a class="nav-link" href="#" onclick="addImg()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16" id="addImg">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                </a>
            </div>

            <div>
                <ul>
                    <li>
                        <label for="floatingLibro">Nome Libro</label>
                        <input type="text" class="form-control" name="titolo" id="floatingLibro" />
                    </li>
                    <li>
                        <label for="floationgAutore">Autore Libro</label>
                        <input type="text" class="form-control" name="autoreLibro" id="floatingAutore" placeholder="Autore" />
                    </li>

                    <li>
                        <label for="floatingTextareaR">Recensione</label>
                        <textarea class="form-control" name="recensione" id="floatingTextareaR"></textarea>
                    </li>
                    <li>
                        <div class="stars text-center ">
                            <input type="hidden" id="voto" name="voto" value="0" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill star-icon" viewBox="0 0 16 16" data-value="1">
                                <path fill-rule="evenodd" d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill star-icon" viewBox="0 0 16 16" data-value="2">
                                <path fill-rule="evenodd" d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill star-icon" viewBox="0 0 16 16" data-value="3">
                                <path fill-rule="evenodd" d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill star-icon" viewBox="0 0 16 16" data-value="4">
                                <path fill-rule="evenodd" d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill star-icon" viewBox="0 0 16 16" data-value="5">
                                <path fill-rule="evenodd" d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                        </div>

                    </li>
                </ul>
            </div>
            <footer>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn">Invia</button>
                </div>
            </footer>
        </form>
    </section>
</main>