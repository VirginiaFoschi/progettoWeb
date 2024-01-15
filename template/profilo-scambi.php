<?php foreach ($templateparams["scambio"] as $coppiaLibri): ?>
    <div class="row justify-content-center content">
        <article class="article-scambi bg-body border mb-3">
            <header>
                <a href="profilo-post.php">
                    <?php echo $coppiaLibri['Libro1']['DettagliLibro1']['Username_Autore']; ?>
                </a>
                <a href="account-post.php?id=<?php echo $coppiaLibri['Libro2']['DettagliLibro2']['Username_Autore']; ?>">
                    <?php echo $coppiaLibri['Libro2']['DettagliLibro2']['Username_Autore']; ?>
                </a>
            </header>
            <section>
                <ul>
                    <li>
                        <img src="<?php echo UPLOAD_DIR . $coppiaLibri['Libro1']['DettagliLibro1']['Immagine']; ?>"
                            alt="Copertina Libro1" class="image">
                        <h4>
                            <?php echo $coppiaLibri['Libro1']['DettagliLibro1']['Titolo']; ?>
                        </h4>
                        <img src="<?php echo UPLOAD_DIR . $coppiaLibri['Libro2']['DettagliLibro2']['Immagine']; ?>"
                            alt="Copertina Libro2" class="image">
                        <h4>
                            <?php echo $coppiaLibri['Libro2']['DettagliLibro2']['Titolo']; ?>
                        </h4>
                    </li>
                    <li>
                        <p>Data di scadenza:</p>
                        <p>
                            <?php echo $coppiaLibri['Data_Fine']; ?>
                        </p>
                    </li>
                </ul>
            </section>
            <footer class="bottom-scambi">
                <input type="button" value="Scarica Etichetta" onclick="scaricaEtichetta(<?php echo $coppiaLibri['Libro1']['ID_Libro1']?>, <?php echo $coppiaLibri['Libro2']['ID_Libro2']?>)" />
            </footer>
        </article>
    </div>
<?php endforeach; ?>