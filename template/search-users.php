<?php foreach($templateparams["users"] as $u): ?>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <article class="bg-body border mx-3">
                <section class="px-3 d-flex justify-content-center">
                    <img src="<?php echo UPLOAD_DIR.$u["immagine"]; ?>" alt="" id="imagePerson2">
                    <ul>
                        <li>
                            <a href="#"><?php echo $u["username"] ?></a>
                        </li>
                        <li>
                            <?php $generi="";
                            foreach($templateparams["generi"] as $genere) {
                                if($genere["username"] == $u["username"]) {
                                    $generi .= ($generi !== '' ? ', ' : '') . $genere["nome_genere"];
                                }
                            } 
                            ?>
                            <p>Generi preferiti: <?php echo $generi; ?></p>
                        </li>
                        <li>
                            <input class="follow" type="button" value="<?php if(in_array($u["username"],$templateparams["follows"])): echo "Segui Già"; else: echo "Segui"; endif; ?>" onClick="sendAjaxRequest('follow.php', {username: '<?php echo $u['username']; ?>'})" title="followbtn">
                        </li>
                    </ul>
                </section>
            </article>
        </div>
    </div>
<?php endforeach; ?>