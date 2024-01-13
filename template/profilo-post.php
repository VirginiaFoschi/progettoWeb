<div class="row justify-content-center content">
    <?php foreach ($$templateparams["annuncio"] as $annuncio): ?>
    <!-- Annuncio -->
    <article class="article-annuncio bg-body border mb-3">
        <header class="row">
            <a href="#">
                <img src="<?php UPLOAD_DIR.$annuncio["Evento"]["Immagine"]?>" alt="Foto profilo" class="img-post">
                <?php echo $templateparams["username"]?>
            </a>
        </header>
        <section class="px-3 mb-4">
            <h2><?php echo $annuncio["Evento"]["nomeEvento"]?></h2>
            <ul>
                <li>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-calendar" viewBox="0 0 16 16">
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                        </svg>
                        <?php echo $annuncio["Evento"]["dataEvento"]?>
                    </span>
                </li>
                <li>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path
                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <?php echo $annuncio["Evento"]["luogo"]?>
                    </span>
                </li>
                <li>
                    <p id="descrizione-annuncio"><?php echo $annuncio["Evento"]["descrizione"]?></p>
                </li>
            </ul>
        </section>
        <footer>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-heart-fill heart-icon"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
            </svg>
            <p><?php echo $annuncio["NumLike"]["numLike"]?></p>
        </footer>
    </article>
    <?php endforeach; ?>
</div>