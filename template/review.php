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
                    <a class="nav-link active" href="#" onclick="cambiaTab(this)">Recensione</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addBook.html" onclick="cambiaTab(this)">Libro</a>
                </li>
            </ul>
        </div>
    </div>
    <main>
        <div class="row justify-content-center">
            <div class="col-md-6 d-flex flex-column">


                <section>

                    <form class="text-center" action="#" method="POST"  enctype="multipart/form-data">
                        <div class="row justify-content-center align-items-end">
                            <div class="col d-flex justify-content-center">
                                <img src="img/2200720.png" alt="" class="img_profile" id="profilo">
                                <input type="file" id="fileInput" name="image" style="display: none;">
                                <a class="nav-link" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16" id="addImg">
                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-8 mx-auto ">
                            <input type="text" class="form-control" name="titolo" id="floatingLibro" placeholder="Nome Libro">
                        </div>
                        <div class="d-grid gap-2 col-8 mx-auto ">
                            <input type="text" class="form-control" name="autoreLibro" id="floatingAutore" placeholder="Autore">
                        </div>
                        <div class="d-grid gap-2 col-8 mx-auto">
                            <textarea class="form-control" name="recensione" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                        <div class="row">
                            <div>
                                <input type="hidden" id="voto" name="voto" value="0">
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
                        </div>
                        <div class="d-grid gap-2 col-3 mx-auto">
                            <button type="button" class="btn btn-lg btn-outline-primary" onclick="sendForm()">Send</button>
                        </div>

                    </form>
                </section>
            </div>
        </div>

    </main>