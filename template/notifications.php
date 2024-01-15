<header>
<a class="btn btn-primary m-3"  id="Back" onClick="" role="button">Back</a>
</header>
<div class="col">
<?php foreach($templateparams["notifiche"] as $notifica): ?>
    <?php if(!array_key_exists('id_notifica', $notifica)): ?>
       <?php $username = $notifica["Username_Int"];
            $books =$dbh->getPostTable()->getPostLibroProfilo($username); ?>
            <div class="row-justify-content-center">
                <article class="article bg-body border mb-3">
                    <header class="px-3  mt-3 mb-3">
                        <img src="<?php echo '<img src="' .UPLOAD_DIR.$notifica["userProfileImage"] ; ?>" alt="" class="img_profile">
                        <a href="<?php  echo "account-notifiche.php";?>?id=<?php echo  $notifica["Username_Int"];?>"><?php echo $notifica["Username_Int"]; ?></a>
                    </header>
                    <section class="px-3 mb-4">
                        <h4>Vuole proporti uno scambio con</h4> 
                    </div>
                    </section>
                    <footer class="text-end my-3 px-3">
                        <a class="btn btn-secondary m-3 rifiuta" href="#" role="button" >
                            Rifiuta</a>
                        <a class="btn btn-primary m-3 accetta" href="#" role="button"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Scambia</a>
                    </footer>
                </article>
               
            </div>
         
        </div>
        <?php endif; ?>
<?php endforeach; ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Libri di nome.utente</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <?php foreach ($books as $postLibro): ?>
                    <article class="article-annuncio bg-body border mb-3">
                        <header class="px-3  mt-3 mb-3">
                        <img src="<?php echo UPLOAD_DIR . $postLibro["Immagine"] ?>" alt="Copertina libro" class="image" />
                        <h3><?php echo $postLibro["Titolo"] ?><h3>
                        <h4><?php echo $postLibro["Autore"] ?></h4>
                        </header>
                          <section class="px-3 mb-4">
                         <p><?php echo $postLibro["Trama"] ?></p> 
                              <input type="button" value="Seleziona" name="seleziona-libro"   class="seleziona-libro">
                    </article>
                     <?php endforeach; ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                  <button type="button" class="btn btn-primary conferma" data-bs-dismiss="modal">Conferma</button>
                </div>
              </div>
            </div>
          </div>
         