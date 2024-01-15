<div class="row justify-content-center my-3">
    <div class="col-md-6">
        <form action="#" method="POST" id="formPost" class="mx-3">
            <label for="genere">Filtra per genere: 
                <select name="genere" id="genere" onChange="sendSelectedValue()">
                    <option value="Tutti" <?php if($_SESSION["genere"] == 'Tutti'): echo 'selected'; endif; ?>>Tutti</option>
                    <?php foreach($templateparams["genere"] as $genere): ?>
                    <option value="<?php echo $genere["nome"]; ?>" <?php if($_SESSION["genere"] == $genere["nome"]): echo 'selected'; endif; ?>><?php echo $genere["nome"]; ?></option>
                    <?php endforeach;?>
                </select>
            </label>
        </form>
    </div>
</div>
<?php $i=0; foreach($templateparams["posts"] as $post): $i++; ?>
    <?php if($_SESSION["genere"] == "" || $_SESSION["genere"] == $post["nome_genere"]): ?>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <article class="article bg-body border mx-3">
                    <header class="px-3  mt-3 mb-3">
                        <img src="<?php echo UPLOAD_DIR.$post["fotoProfilo"]; ?>" alt="">
                        <a href="#"><?php echo $post["username"]; ?></a>
                        <input class="follow" type="button" value="<?php if(in_array($post["username"],$templateparams["follows"])): echo "Segui già"; else: echo "Segui"; endif; ?>" onClick="sendAjaxRequest('follow.php', {username: '<?php echo $post['username']; ?>'})">
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
                                <?php
                                $words = str_word_count($post["trama"], 1); // Ottieni un array di parole dalla stringa
                                $str=explode(" ", $post["trama"]);
                                ?>
                                <p><?php echo implode(' ', array_slice($str, 0, 40)); ?>
                                    <?php if($words > 40): ?>
                                        <span class="dots" id="dots<?php echo $i; ?>" onclick="showMore('dots<?php echo $i; ?>')"> ...altro</span>
                                        <span class="hidden-text" id="text<?php echo $i; ?>" ><?php echo implode(' ', array_slice($str, 40)); ?></span>
                                    <?php endif; ?>
                                </p>
                            </li>
                        </ul>
                    </section>
                    <footer class="text-end mb-3 px-3">
                        <?php 
                        $active=false;
                        foreach($templateparams["notifiche"] as $n) {
                            if($n["id_libro"] == $post["id_libro"] && $n["username_autore"] == $post["username"]) {
                                $active=true;
                            }
                        }
                        ?>
                        <input type="submit" class="btn btn-sm btn-outline-dark" value="<?php if($active) : echo 'Proposta effettuata'; else: echo 'Proponi scambio'; endif; ?>" <?php if($active) : echo 'disabled'; endif; ?> onClick="disabledButton(this); sendAjaxRequest('proposta-scambio.php', {id_libro: '<?php echo $post["id_libro"]; ?>'})">
                    </footer>
                </article>
            </div>
        </div>
    <?php endif; ?>
<?php endforeach; ?>