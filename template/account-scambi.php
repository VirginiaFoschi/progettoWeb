<?php foreach ($templateparams["scambi"] as $scambio): ?>
    <div class="row justify-content-center content">
        <!-- Scambio -->
        <article class="article-account bg-body border mb-3">
            <section>
                <ul>
                    <li>
                        <div class="d-flex align-items-center">
                            <img src="<?php echo UPLOAD_DIR . $scambio["Libro"]["Immagine"]; ?>" alt="Copertina libro"
                                class="image" />
                            <ul>
                                <li>
                                    <h3>
                                        <?php echo $scambio["Libro"]["Titolo"] ?>
                                    </h3>
                                </li>
                                <li>
                                    <p>
                                        Autore:
                                    </p>
                                    <p>
                                        <?php echo $scambio["Libro"]["Autore"] ?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </section>
            <footer>
                <p>Data di scadenza:</p>
                <p>
                    <?php echo $scambio["DataFine"]; ?>
                </p>
            </footer>
        </article>
    </div>
<?php endforeach; ?>