<div class="row mx-3 my-2">
    <div class="col-12"> 
        <header>
        <form action="#" method="POST">
            <button id="btnsearch" type="submit"><strong class="fa fa-search"></strong></button>
            <input id="cerca" type="text" placeholder="Search.." name="search" title="searchbtn">
            <button id="btnannulla" type="button">Annulla</button>
        </form>
        </header>
    </div>
</div>
<div class="row justify-content-center mb-2">
    <div class="col-12"> 
        <ul class="nav justify-content-center bg-light" id="options">
            <li class="nav-item">
                <a class="nav-link active3" aria-current="page" href="#" onclick="cambiaTab3(this)">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="cambiaTab3(this)">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="cambiaTab3(this)">Posts</a>
            </li>
        </ul>
    </div>
</div>
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <article class="article bg-body border mx-3">
            <header class="px-3">
                <img src="img/immagineProfilo.png" alt="">
                <a href="#">Utente autore evento</a>
                <input class="follow" type="button" value="Follow" title="followbtn">
            </header>
            <section>
                <ul>
                    <li>
                        <div class="d-flex align-items-center">
                            <img src="img/html5-js-css3.png" alt="" class="image">
                            <ul>
                                <li>
                                    <h2>Titolo Libro</h2>
                                </li>
                                <li>
                                    <p>Autore del Libro</p>
                                </li>
                                <li>
                                    <p>Genere: </p>
                                </li>
                                <li>
                                    <p>Stato: </p>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <p id="description">come mai ha scelto di scambiare questo libro e le sue considerazioni sul libro, come mai ha scelto di scambiare questo libro e le sue considerazioni sul libro, come mai ha scelto di scambiare questo libro e le sue considerazioni sul libro</p>
                    </li>
                </ul>
            </section>
            <footer class="text-end mb-3 px-3">
                <input type="submit" class="btn btn-sm btn-outline-dark" value="Proponi scambio">
            </footer>
        </article>
    </div>
</div>
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <article class="bg-body border mx-3">
            <section class="px-3 d-flex justify-content-center">
                <img src="img/immagineProfilo.png" alt="" id="imagePerson2">
                <ul>
                    <li>
                        <a href="#">Utente autore evento</a>
                    </li>
                    <li>
                        <p>generi preferiti: autobiografia, romanzo storico, giallo, azione, thriller, avventura</p>
                    </li>
                    <li>
                        <input class="follow" type="button" value="Follow" title="followbtn">
                    </li>
                </ul>
            </section>
        </article>
    </div>
</div>