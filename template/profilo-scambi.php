<div class="row justify-content-center content">
    <?php foreach ($templateparams["scambio"] as $coppiaLibri): ?>
        <article class="article-scambi bg-body border mb-3">
            <header>
                <a href="#">
                    <?php echo $coppiaLibri['Libro1']['DettagliLibro1']['Username_Utente']; ?>
                </a>
                <a href="#">
                    <?php echo $coppiaLibri['Libro2']['DettagliLibro2']['Username_Utente']; ?>
                </a>
            </header>
            <div>
                <img src="<?php echo UPLOAD_DIR . $coppiaLibri['Libro1']['DettagliLibro1']['Immagine']; ?>"
                    alt="Copertina Libro1" class="image">
                <img src="<?php echo UPLOAD_DIR . $coppiaLibri['Libro2']['DettagliLibro2']['Immagine']; ?>"
                    alt="Copertina Libro2" class="image">
            </div>
            <section>
                <h3>
                    <?php echo $coppiaLibri['Libro1']['DettagliLibro1']['Titolo']; ?>
                </h3>
                <h3>
                    <?php echo $coppiaLibri['Libro2']['DettagliLibro2']['Titolo']; ?>
                </h3>
            </section>
            <footer class="bottom-scambi">
                <p>Data di scadenza:</p>
                <p>
                    <?php echo $coppiaLibri['Data_Fine']; ?>
                </p>
            </footer>
        </article>
    <?php endforeach; ?>
</div>