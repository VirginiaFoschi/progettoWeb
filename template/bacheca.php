<div class="container-fluid p-0 overflow-hidden">  
<div class="row text-end">
    <div class="col-12">
        <header>
            <input class="button" type="button" value="Notifiche" name="notifiche" id="notifiche" onclick="">
        </header>
    </div>
</div>
<?php foreach($templateparams["eventi"] as $evento) : ?>
    <div class="row justify-content-center content">
        <div class="col-md-6">
            <article class="bg-body border mb-3">
                <header class="px-3  mt-3 mb-3">
                    <img src="<?php echo UPLOAD_DIR.$evento["userImage"]; ?>" alt="">
                    <a href="account.html"><?php echo $evento["username"]; ?></a>
                    <input class="follow" type="submit" value="<?php if(in_array($evento["username"],$templateparams["follows"])): echo "Segui Già"; else: echo "Segui"; endif; ?>" onClick="sendAjaxRequest('follow.php', {username: '<?php echo $evento['username']; ?>'})">
                </header>
                <section class="px-3 mb-4">
                    <h2><?php echo $evento["nome_evento"]; ?></h2>
                    <ul>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                </svg>
                                <?php echo formatData($evento["data"]); ?>
                            </span>
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                                <?php echo $evento["luogo"]; ?>
                            </span>
                        </li>
                        <li>
                            <p><?php echo $evento["descrizione"]; ?></p>
                        </li>
                    </ul> 
                </section>
                <footer class="text-end my-3 px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                     class="bi bi-heart-fill heart-icon <?php if(in_array($evento["id_evento"],$templateparams["likes-events"])): echo "active"; endif; ?>" viewBox="0 0 16 16" onClick="sendAjaxRequest('likes-events.php', {evento: '<?php echo $evento['id_evento']; ?>'})">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                    </svg>
                </footer>
            </article>
        </div>
    </div>
<?php endforeach; ?>
<?php foreach($templateparams["recensioni"] as $recensione) : ?>
    <div class="row justify-content-center content">
        <div class="col-md-6">
            <article class="bg-body border mb-3">
                <header class="px-3  mt-3 mb-3">
                    <img src="<?php echo UPLOAD_DIR.$recensione["userImage"]; ?>" alt="" >
                    <a href="#"><?php echo $recensione["username"]; ?></a>
                    <input class="follow" type="submit" value="<?php if(in_array($recensione["username"],$templateparams["follows"])): echo "Segui Già"; else: echo "Segui"; endif; ?>" onClick="sendAjaxRequest('follow.php', {username: '<?php echo $recensione['username']; ?>'})">
                </header>
                <section class="px-3 mb-4">
                    <h2>Recensione del libro: </h2>
                    <ul>
                        <li>
                            <div class="d-flex align-items-center">
                                <img src="<?php echo UPLOAD_DIR.$recensione["immagine"]; ?>" alt="" class="image">
                                <ul>
                                    <li>
                                        <h3><?php echo $recensione["titolo_libro"]; ?></h3>
                                    </li>
                                    <li>
                                        <p><?php echo $recensione["autore_libro"]; ?></p>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <?php for($i=0; $i < $recensione["voto"]; $i++): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            <?php endfor; ?>
                            <?php for($i=0; $i < (5-$recensione["voto"]); $i++): ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="grey" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            <?php endfor; ?>
                        </li>
                        <li>
                            <p><?php echo $recensione["recensione"]; ?></p>
                        </li>
                    </ul>
                </section>
                <footer class="text-end my-3 px-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-heart-fill heart-icon <?php 
                        $a = array("autore_recensione" => $recensione["autore_recensione"], "titolo_libro" => $recensione["titolo_libro"], "autore_libro" => $recensione["autore_libro"]);
                        if(array_search($a,$templateparams["likes-reviews"]) !== false) {
                            echo "active";
                        }?>" viewBox="0 0 16 16" onClick="sendAjaxRequest('likes-reviews.php', {autore_rec: '<?php echo $recensione['autore_recensione']; ?>', autore_lib: '<?php echo $recensione['autore_libro']; ?>', titolo: '<?php echo $recensione['titolo_libro']; ?>'})">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                    </svg>  
                </footer>
            </article>
        </div>
    </div>
<?php endforeach; ?>
