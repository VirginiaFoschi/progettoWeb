<!-- Libri -->
<?php foreach ($templateparams["libro-postato"] as $postLibro): ?>
    <div class="row justify-content-center content">
        <article class="article-libro bg-body border mb-3">
            <header class="row">
                <a href="#">
                    <?php foreach ($templateparams["img-profilo"] as $image): ?>
                        <img src="<?php echo UPLOAD_DIR . $image["Immagine"]; ?>" alt="Immagine-Profilo" />
                    <?php endforeach; ?>
                    <?php echo $templateparams["nome-profilo"]; ?>
                </a>
            </header>
            <section>
                <ul>
                    <li>
                        <div class="d-flex align-items-center">
                            <img src="<?php echo UPLOAD_DIR . $postLibro["Immagine"] ?>" alt="Copertina libro" class="image" />
                            <ul>
                                <li>
                                    <h2>
                                        <?php echo $postLibro["Titolo"] ?>
                                    </h2>
                                </li>
                                <li>
                                    <p>
                                        Autore:
                                    </p>
                                    <p>
                                        <?php echo $postLibro["Autore"] ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Genere:
                                    </p>
                                    <p>
                                        <?php echo $postLibro["Nome_Genere"] ?>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        Condizioni:
                                    </p>
                                    <p>
                                        <?php echo $postLibro["Condizioni"] ?>
                                    </p>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li>
                        <p id="descrizione-libro">
                            <?php echo $postLibro["Trama"] ?>
                        </p>
                    </li>
                </ul>
            </section>
            <footer>
                <input type="button" value="Elimina" name="elimina-libro" id="elimina-libro" onclick="" />
            </footer>
        </article>
    </div>
<?php endforeach; ?>