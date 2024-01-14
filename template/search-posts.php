<?php foreach($templateparams["posts"] as $post): ?>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <article class="article bg-body border mx-3">
                <header class="px-3  mt-3 mb-3">
                    <img src="<?php echo UPLOAD_DIR.$post["fotoProfilo"]; ?>" alt="">
                    <a href="#"><?php echo $post["username"]; ?></a>
                    <input class="follow" type="button" value="<?php if(in_array($post["username"],$templateparams["follows"])): echo "Segui Già"; else: echo "Segui"; endif; ?>" onClick="sendAjaxRequest('follow.php', {username: '<?php echo $post['username']; ?>'})">
                </header>
                <section class="px-3 mb-4">
                    <ul>
                        <li>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo UPLOAD_DIR.$post["copertina"]; ?>" alt="" class="image">
                                <ul>
                                    <li>
                                        <h2><?php echo $post["titolo"]; ?></h2>
                                    </li>
                                    <li>
                                        <p>di <?php echo $post["autore"]; ?></p>
                                    </li>
                                    <li>
                                        <p>Casa Editrice: <?php echo $post["casa_editrice"]; ?></p>
                                    </li>
                                    <li>
                                        <p>Genere: <?php echo $post["nome_genere"]; ?></p>
                                    </li>
                                    <li>
                                        <p>Condizioni: <?php echo $post["condizioni"]; ?></p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <p id="description"><?php echo $post["trama"]; ?></p>
                        </li>
                    </ul>
                </section>
                <footer class="text-end mb-3 px-3">
                    <input type="submit" class="btn btn-sm btn-outline-dark" value="Proponi scambio">
                </footer>
            </article>
        </div>
    </div>
<?php endforeach; ?>