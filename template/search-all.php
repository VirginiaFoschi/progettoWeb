<?php $min=min(count($templateparams["posts"]), count($templateparams["users"]));?>
<?php for($i=0; $i<$min; $i++): ?>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <article class="article bg-body border mx-3">
                <header class="px-3  mt-3 mb-3">
                    <img src="<?php echo UPLOAD_DIR.$templateparams["posts"][$i]["fotoProfilo"]; ?>" alt="">
                    <a href="#"><?php echo $templateparams["posts"][$i]["username"]; ?></a>
                    <input class="follow" type="button" value="<?php if(in_array($templateparams["posts"][$i]["username"],$templateparams["follows"])): echo "Segui già"; else: echo "Segui"; endif; ?>" onClick="sendAjaxRequest('follow.php', {username: '<?php echo $templateparams["posts"][$i]['username']; ?>'})">
                </header>
                <section class="px-3 mb-4">
                    <ul>
                        <li>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo UPLOAD_DIR.$templateparams["posts"][$i]["copertina"]; ?>" alt="" class="image">
                                <ul>
                                    <li>
                                        <h2><?php echo $templateparams["posts"][$i]["titolo"]; ?></h2>
                                    </li>
                                    <li>
                                        <p>di <?php echo $templateparams["posts"][$i]["autore"]; ?></p>
                                    </li>
                                    <li>
                                        <p>Casa Editrice: <?php echo $templateparams["posts"][$i]["casa_editrice"]; ?></p>
                                    </li>
                                    <li>
                                        <p>Genere: <?php echo $templateparams["posts"][$i]["nome_genere"]; ?></p>
                                    </li>
                                    <li>
                                        <p>Condizioni: <?php echo $templateparams["posts"][$i]["condizioni"]; ?></p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <?php
                            $words = str_word_count($templateparams["posts"][$i]["trama"], 1); // Ottieni un array di parole dalla stringa
                            $str=explode(" ", $templateparams["posts"][$i]["trama"]);
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
                        if($n["id_libro"] == $templateparams["posts"][$i]["id_libro"] && $n["username_autore"] == $templateparams["posts"][$i]["username"]) {
                            $active=true;
                        }
                    }
                    ?>
                    <input type="submit" class="btn btn-sm btn-outline-dark" value="<?php if($active) : echo 'Proposta effettuata'; else: echo 'Proponi scambio'; endif; ?>" <?php if($active) : echo 'disabled'; endif; ?> onClick="disabledButton(this); sendAjaxRequest('proposta-scambio.php', {id_libro: '<?php echo $templateparams["posts"][$i]["id_libro"]; ?>', username: '<?php echo $templateparams["posts"][$i]["username"]; ?>'})">
                </footer>
            </article>
        </div>
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <article class="article bg-body border mx-3">
                <header class="px-3 mt-3 mb-1">
                    <img src="<?php echo UPLOAD_DIR.$templateparams["users"][$i]["immagine"]; ?>" alt="">
                    <a href="#"><?php echo $templateparams["users"][$i]["username"] ?></a>
                    <input class="follow" type="button" value="<?php if(in_array($templateparams["users"][$i]["username"],$templateparams["follows"])): echo "Segui già"; else: echo "Segui"; endif; ?>" onClick="sendAjaxRequest('follow.php', {username: '<?php echo $templateparams["users"][$i]['username']; ?>'})" title="followbtn">
                </header>
                <section class="px-3 justify-content-center">
                    <?php $generi="";
                    $arrGeneri=array();
                    foreach($templateparams["generi"] as $genere) {
                        if($genere["username"] == $templateparams["users"][$i]["username"]) {
                            array_push($arrGeneri,$genere["nome_genere"]);
                        }
                    }  
                    ?>
                    <p>Generi preferiti: <?php echo implode(', ', array_slice($arrGeneri, 0, 2)); if(count($arrGeneri) > 2): echo ','; endif; ?>
                        <?php if(count($arrGeneri) > 2): ?>
                            <span class="dots text-truncate" id="dots<?php echo $i; ?>" onclick="showMore('dots<?php echo $i; ?>')"> ...altro</span>
                            <span class="hidden-text" id="text<?php echo $i; ?>" ><?php echo implode(', ', array_slice($arrGeneri, 2)); ?></span>
                        <?php endif; ?>
                    </p>
                </section>
            </article>
        </div>
    </div>
<?php endfor; ?>
<?php if($min < count($templateparams["posts"])): ?>
    <?php for($i=$min; $i<count($templateparams["posts"]); $i++): ?>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <article class="article bg-body border mx-3">
                    <header class="px-3  mt-3 mb-3">
                        <img src="<?php echo UPLOAD_DIR.$templateparams["posts"][$i]["fotoProfilo"]; ?>" alt="">
                        <a href="#"><?php echo $templateparams["posts"][$i]["username"]; ?></a>
                        <input class="follow" type="button" value="<?php if(in_array($templateparams["posts"][$i]["username"],$templateparams["follows"])): echo "Segui già"; else: echo "Segui"; endif; ?>" onClick="sendAjaxRequest('follow.php', {username: '<?php echo $templateparams["posts"][$i]['username']; ?>'})">
                    </header>
                    <section class="px-3 mb-4">
                        <ul>
                            <li>
                                <div class="d-flex align-items-center">
                                    <img src="<?php echo UPLOAD_DIR.$templateparams["posts"][$i]["copertina"]; ?>" alt="" class="image">
                                    <ul>
                                        <li>
                                            <h2><?php echo $templateparams["posts"][$i]["titolo"]; ?></h2>
                                        </li>
                                        <li>
                                            <p>di <?php echo $templateparams["posts"][$i]["autore"]; ?></p>
                                        </li>
                                        <li>
                                            <p>Casa Editrice: <?php echo $templateparams["posts"][$i]["casa_editrice"]; ?></p>
                                        </li>
                                        <li>
                                            <p>Genere: <?php echo $templateparams["posts"][$i]["nome_genere"]; ?></p>
                                        </li>
                                        <li>
                                            <p>Condizioni: <?php echo $templateparams["posts"][$i]["condizioni"]; ?></p>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <?php
                                $words = str_word_count($templateparams["posts"][$i]["trama"], 1); // Ottieni un array di parole dalla stringa
                                $str=explode(" ", $templateparams["posts"][$i]["trama"]);
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
                            if($n["id_libro"] == $templateparams["posts"][$i]["id_libro"] && $n["username_autore"] == $templateparams["posts"][$i]["username"]) {
                                $active=true;
                            }
                        }
                        ?>
                        <input type="submit" class="btn btn-sm btn-outline-dark" value="<?php if($active) : echo 'Proposta effettuata'; else: echo 'Proponi scambio'; endif; ?>" <?php if($active) : echo 'disabled'; endif; ?> onClick="disabledButton(this); sendAjaxRequest('proposta-scambio.php', {id_libro: '<?php echo $templateparams["posts"][$i]["id_libro"]; ?>', username: '<?php echo $templateparams["posts"][$i]["username"]; ?>'})">
                    </footer>
                </article>
            </div>
        </div>
    <?php endfor; ?>
<?php elseif($min < count($templateparams["users"])): ?>
    <?php for($i=$min; $i<count($templateparams["users"]); $i++): ?>
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <article class="article bg-body border mx-3">
                    <header class="px-3 mt-3 mb-1">
                        <img src="<?php echo UPLOAD_DIR.$templateparams["users"][$i]["immagine"]; ?>" alt="">
                        <a href="#"><?php echo $templateparams["users"][$i]["username"] ?></a>
                        <input class="follow" type="button" value="<?php if(in_array($templateparams["users"][$i]["username"],$templateparams["follows"])): echo "Segui già"; else: echo "Segui"; endif; ?>" onClick="sendAjaxRequest('follow.php', {username: '<?php echo $templateparams["users"][$i]['username']; ?>'})" title="followbtn">
                    </header>
                    <section class="px-3 justify-content-center">
                        <?php $generi="";
                        $arrGeneri=array();
                        foreach($templateparams["generi"] as $genere) {
                            if($genere["username"] == $templateparams["users"][$i]["username"]) {
                                array_push($arrGeneri,$genere["nome_genere"]);
                            }
                        }  
                        ?>
                        <p>Generi preferiti: <?php echo implode(', ', array_slice($arrGeneri, 0, 2)); if(count($arrGeneri) > 2): echo ','; endif; ?>
                            <?php if(count($arrGeneri) > 2): ?>
                                <span class="dots text-truncate" id="dots<?php echo $i; ?>" onclick="showMore('dots<?php echo $i; ?>')"> ...altro</span>
                                <span class="hidden-text" id="text<?php echo $i; ?>" ><?php echo implode(', ', array_slice($arrGeneri, 2)); ?></span>
                            <?php endif; ?>
                        </p>
                    </section>
                </article>
            </div>
        </div>
    <?php endfor; ?>
<?php endif; ?>