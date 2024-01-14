<?php foreach ($templateparams["scambio"] as $coppiaLibri): ?>
    <div class="row justify-content-center content">
        <article class="article-scambi bg-body border mb-3">
            <header>
                <a href="#">
                    <?php echo $coppiaLibri['Libro1']['DettagliLibro1']['Username_Autore']; ?>
                </a>
                <a href="#">
                    <?php echo $coppiaLibri['Libro2']['DettagliLibro2']['Username_Autore']; ?>
                </a>
            </header>
            <div>
                <img src="<?php echo UPLOAD_DIR . $coppiaLibri['Libro1']['DettagliLibro1']['Immagine']; ?>"
                    alt="Copertina Libro1" class="image">
                <img src="<?php echo UPLOAD_DIR . $coppiaLibri['Libro2']['DettagliLibro2']['Immagine']; ?>"
                    alt="Copertina Libro2" class="image">
            </div>
            <section>
                <h4>
                    <?php echo $coppiaLibri['Libro1']['DettagliLibro1']['Titolo']; ?>
                </h4>
                <h4>
                    <?php echo $coppiaLibri['Libro2']['DettagliLibro2']['Titolo']; ?>
                </h4>
            </section>
            <footer class="bottom-scambi">
                <p>Data di scadenza:</p>
                <p>
                    <?php echo $coppiaLibri['Data_Fine']; ?>
                </p>
            </footer>
        </article>
    </div>
<?php endforeach; ?>