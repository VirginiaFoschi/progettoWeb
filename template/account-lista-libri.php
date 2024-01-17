<!-- Libri -->
<?php foreach ($templateparams["libro-postato"] as $postLibro): ?>
    <div class="row justify-content-center content">
        <div class="col-md-6">
            <article class="article-libro bg-body mb-3">
                <header class="row">
                    <a href="account-post.php?id=<?php echo $templateparams["nome-profilo"]; ?>">
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
                                <img src="<?php echo UPLOAD_DIR . $postLibro["Immagine"] ?>" alt="Copertina libro"
                                    class="image" />
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
                            <?php
                            $words = str_word_count($postLibro["Trama"], 1); // Ottieni un array di parole dalla stringa
                            $str = explode(" ", $postLibro["Trama"]);
                            ?>
                            <p>
                                <?php echo implode(' ', array_slice($str, 0, 40)); ?>
                                <?php if (count($words) > 40): ?>
                                    <span class="dots" id="dotsA<?php echo $postLibro["ID_Libro"]; ?>"
                                        onclick="showMore('dotsA<?php echo $postLibro['ID_Libro']; ?>', <?php echo $postLibro['ID_Libro']; ?>)">
                                        ...altro</span>
                                    <span class="hidden-text" id="text<?php echo $postLibro['ID_Libro']; ?>">
                                        <?php echo implode(' ', array_slice($str, 40)); ?>
                                    </span>
                                <?php endif; ?>
                            </p>
                        </li>
                    </ul>
                </section>
                <footer>
                    <?php
                    $active = false;
                    foreach ($templateparams["notifiche"] as $n) {
                        if ($n["id_libro"] == $postLibro["ID_Libro"] && $n["username_autore"] == $templateparams["nome-profilo"]) {
                            $active = true;
                        }
                    }
                    ?>
                    <input type="submit" class="btn btn-sm btn-outline-dark" value="<?php if ($active):
                        echo 'Proposta effettuata';
                    else:
                        echo 'Proponi scambio';
                    endif; ?>" <?php if ($active):
                         echo 'disabled';
                     endif; ?>
                        onClick="disabledButton(this); sendAjaxRequest('proposta-scambio.php', {id_libro: '<?php echo $postLibro["ID_Libro"]; ?>'})">

                </footer>
            </article>
        </div>
    </div>
<?php endforeach; ?>