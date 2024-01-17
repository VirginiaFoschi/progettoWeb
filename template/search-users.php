<?php $i=0; foreach($templateparams["users"] as $u): $i++;?>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <article class="article bg-body border mx-3">
                <header class="px-3 mt-3 mb-1">
                    <img src="<?php echo UPLOAD_DIR.$u["immagine"]; ?>" alt="">
                    <a href="<?php if($post["username"] === $_SESSION["username"]): echo "profilo-post.php"; else: echo "account-post.php";endif;?>?id=<?php echo $post["username"];?>"><?php echo $u["username"] ?></a>
                    <input class="follow" type="button" value="<?php if(in_array($u["username"],$templateparams["follows"])): echo "Segui già"; else: echo "Segui"; endif; ?>" onClick="sendAjaxRequest('follow.php', {username: '<?php echo $u['username']; ?>'})" title="followbtn">
                </header>
                <section class="px-3 justify-content-center">
                    <?php $generi="";
                    $arrGeneri=array();
                    foreach($templateparams["generi"] as $genere) {
                        if($genere["username"] == $u["username"]) {
                            array_push($arrGeneri,$genere["nome_genere"]);
                            //$generi .= ($generi !== '' ? ', ' : '') . $genere["nome_genere"];
                        }
                    } 
                    ?>
                    <p>Generi preferiti: <?php echo implode(', ', array_slice($arrGeneri, 0, 2)); if(count($arrGeneri) > 2): echo ','; endif; ?>
                        <?php if(count($arrGeneri) > 2): ?>
                            <span class="dots text-truncate" id="dotsU<?php echo $i; ?>" onclick="showMore('dotsU<?php echo $i; ?>', 'U<?php echo $i; ?>')"> ...altro</span>
                            <span class="hidden-text" id="textU<?php echo $i; ?>" ><?php echo implode(', ', array_slice($arrGeneri, 2)); ?></span>
                        <?php endif; ?>
                    </p>
                </section>
            </article>
        </div>
    </div>
<?php endforeach; ?>