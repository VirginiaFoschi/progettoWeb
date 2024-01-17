<div class="row justify-content-center">
    <div class="col-md-6 d-flex flex-column">
        <nav>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" onclick="cambiaTab(this)">Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="review.php" onclick="cambiaTab(this)">Recensione</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addBook.php" onclick="cambiaTab(this)">Libro</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section>
        <form class="text-center" action="#" method="POST"  enctype="multipart/form-data">
                <ul>
                    <li>
                        <input type="text" class="form-control" name="nomeEvento" id="floatingLuogo" placeholder="Nome Evento" >
                    </li>
                    <li>
                        <input type="text" class="form-control"name="luogo" id="floatingLuogo" placeholder="Luogo" >
                    </li>
                    <li>
                        <label for="meetingTime"><input type="datetime-local" name="dataEvento" id="meetingTime"/> </label>
                    </li>
                    <li>
                        <textarea class="form-control" placeholder="Leave a comment here"name="descrizione" id="floatingTextarea" ></textarea>
                    </li>
                    <li>
                    <button id="invia" type="submit" class="btn btn-lg btn-outline-primary" value="send"  >Invia</button>
                    </li>
                </ul>

            </form>
        </section>
    </div>
</div>