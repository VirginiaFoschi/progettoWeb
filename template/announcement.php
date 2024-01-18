<main>
    <header>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active4" href="#" onclick="cambiaTab2(this)">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="review.php" onclick="cambiaTab2(this)">Recensione</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addBook.php" onclick="cambiaTab2(this)">Libro</a>
            </li>
        </ul>
    </header>
    <section class="sectionAnnouncement">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div>
                <ul>
                    <li>
                    <label for="floatingEvento"><input type="text" class="form-control" name="nomeEvento" id="floatingEvento" placeholder="Nome Evento" /></label>
                        
                    </li>
                    <li>
                    <label for="floatingLuogo"><input type="text" class="form-control" name="luogo" id="floatingLuogo" placeholder="Luogo" /></label>
                        
                    </li>
                    <li>
                        <label for="meetingTime"><input type="datetime-local" name="dataEvento" id="meetingTime" /> </label>
                    </li>
                    <li>
                    <label for="floatingTextarea"> <textarea class="form-control" placeholder="Leave a comment here" name="descrizione" id="floatingTextarea"></textarea></label>
                       
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