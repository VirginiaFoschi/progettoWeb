<?php foreach ($templateparams["posts"] as $post): ?>
    <?php if (isset($post["Evento"]) && array_key_exists('id_evento', $post["Evento"])): ?>
        <div class="row justify-content-center content">
            <div class="col-md-6">
                <!-- post -->
                <article class="article-annuncio bg-body mb-3">
                    <header class="row">
                        <a href="account-post.php?id=<?php echo $templateparams["nome-profilo"]; ?>">
                            <?php foreach ($templateparams["img-profilo"] as $image): ?>
                                <img src="<?php echo UPLOAD_DIR . $image["Immagine"]; ?>" alt="Immagine-Profilo" />
                            <?php endforeach; ?>
                            <?php echo $templateparams["nome-profilo"]; ?>
                        </a>
                    </header>
                    <section class="px-3 mb-4">
                        <h2>
                            <?php echo $post["Evento"]["Nome_Evento"] ?>
                        </h2>
                        <ul>
                            <li>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-calendar" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                    </svg>
                                    <?php echo formatDataOra($post["Evento"]["Data_Evento"]) ?>
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
                                    <?php echo $post["Evento"]["luogo"] ?>
                                </span>
                            </li>
                            <li>
                                <p id="descrizione-post">
                                    <?php echo $post["Evento"]["descrizione"] ?>
                                </p>
                            </li>
                            <?php $commenti = getComments($post["Evento"]["id_evento"]);
                            if (count($commenti) !== 0): ?>
                                <li>
                                    <p>Commenti:</p>
                                </li>
                                <li class="ml-3">
                                    <div class="scroll-container smooth-scroll">
                                        <?php foreach ($commenti as $commento): ?>
                                            <div class="border">
                                                <a href="<?php if ($commento["Autore_Commento"] === $templateparams["nome-profilo"]):
                                                    echo "profilo-post.php";
                                                else:
                                                    echo "account-post.php";
                                                endif; ?>?id=<?php echo $commento["Autore_Commento"]; ?>">
                                                    <?php echo $commento["Autore_Commento"]; ?>
                                                </a>
                                                <p>
                                                    <?php echo $commento["Testo_Commento"] ?>
                                                </p>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </li>
                            <?php endif; ?>
                            <li>
                                <form action="#" method="POST" class="form-commento"
                                    id="commentoA<?php echo $post["Evento"]["id_evento"]; ?>" autocomplete="off">
                                    <div class="mb-3">
                                        <label for="textA<?php echo $post["Evento"]["id_evento"]; ?>">Inserisci Commento</label>
                                        <textarea class="form-control" id="textA<?php echo $post["Evento"]["id_evento"]; ?>"
                                            name="commento" cols="50"></textarea>
                                        <input type="hidden" value="<?php echo $post["Evento"]["id_evento"]; ?>"
                                            name="id_evento">
                                    </div>
                                    <div class="mb-3">
                                        <div class="col-12 text-end">
                                            <input type="submit" class="btn btn-sm btn-outline-primary" title="Pubblica Commento" value="Pubblica">
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </section>
                    <footer>
                        <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-chat comment-icon" viewBox="0 0 16 16"
                            data-target="commentoA<?php echo $post["Evento"]["id_evento"]; ?>">
                            <path
                                d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-heart-fill heart-icon <?php if (in_array($post["Evento"]["id_evento"], $templateparams["likes-events"])):
                            echo "active";
                        endif; ?>" viewBox="0 0 16 16"
                            onClick="sendAjaxRequest('likes-events.php', {evento: '<?php echo $post["Evento"]['id_evento']; ?>'})">
                            <path fill-rule="evenodd"
                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                        </svg>
                    </footer>
                </article>
            </div>
        </div>
    <?php else: ?>
        <div class="row justify-content-center content">
            <div class="col-md-6">
                <!--Recensione-->
                <article class="article-recensione bg-body mb-3">
                    <header class="row">
                        <a href="#">
                            <?php foreach ($templateparams["img-profilo"] as $image): ?>
                                <img src="<?php echo UPLOAD_DIR . $image["Immagine"]; ?>" alt="Immagine-Profilo" />
                            <?php endforeach; ?>
                            <?php echo $templateparams["nome-profilo"]; ?>
                        </a>
                    </header>
                    <section class="px-3 mb-4">
                        <h4>Recensione del libro: </h4>
                        <ul>
                            <li>
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo UPLOAD_DIR . $post["Recensione"]["Immagine"]; ?>" alt="Copertina libro"
                                        class="image" />
                                    <ul>
                                        <li>
                                            <h2>
                                                <?php echo $post["Recensione"]["Titolo_Libro"] ?>
                                            </h2>
                                        </li>
                                        <li>
                                            <p>
                                                Autore:
                                            </p>
                                            <p>
                                                <?php echo $post["Recensione"]["Autore_Libro"] ?>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <?php for ($i = 0; $i < $post["Recensione"]["Voto"]; $i++): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                <?php endfor; ?>
                                <?php for ($i = 0; $i < (5 - $post["Recensione"]["Voto"]); $i++): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="grey"
                                        class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                <?php endfor; ?>
                            </li>
                            <li>
                                <p>
                                    <?php echo $post["Recensione"]["Recensione"]; ?>
                                </p>
                            </li>
                        </ul>
                    </section>
                    <footer>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-heart-fill heart-icon <?php
                        $a = array("autore_recensione" => $templateparams["nome-profilo"], "titolo_libro" => $post["Recensione"]["Titolo_Libro"], "autore_libro" => $post["Recensione"]["Autore_Libro"]);
                        if (array_search($a, $templateparams["likes-reviews"]) !== false) {
                            echo "active";
                        } ?>" viewBox="0 0 16 16"
                            onClick="sendAjaxRequest('likes-reviews.php', {autore_rec: '<?php echo $templateparams["nome-profilo"]; ?>', autore_lib: '<?php echo $post["Recensione"]["Autore_Libro"]; ?>', titolo: '<?php echo $post["Recensione"]["Titolo_Libro"]; ?>'})">
                            <path fill-rule="evenodd"
                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                        </svg>
                    </footer>
                </article>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>