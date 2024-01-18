<header>
  <a class="btn  m-3" href="profilo-post.php" id="Back" role="button"
    onclick="sendAjaxRequest('notifications.php', {back: '1' })">Back</a>
</header>
<div class="col">
  <?php foreach ($templateparams["notificheGenerali"] as $notifica): ?>
    <?php if (isset($notifica["ID_Notifica"]) && !array_key_exists('id_notifica', $notifica)): ?>
      <?php if ($notifica["Tipo"] == "attesa"): ?>

        <div class="row-justify-content-center ">
          <article class="article bg-body border mb-3 notifica">
            <header class="px-3  mt-3 mb-3">
              <img src="<?php echo UPLOAD_DIR . $notifica["userProfileImage"]; ?>" alt="" class="img_profile">
              <a href="<?php echo "account-post.php"; ?>?id=<?php echo $notifica["Username_Int"]; ?>">
                <?php echo $notifica["Username_Int"]; ?>
              </a>
              <p>
                <?php echo formatDataOra($notifica["DataPubblicazione"]); ?>
              </p>
              <?php $idBook = $notifica["ID_Libro"] ?>
            </header>
            <section class="px-3 mb-4">
              <h2>Vuole proporti uno scambio con
                <?php echo $notifica["bookTitle"]; ?>
              </h2>

            </section>
            <footer class="text-end my-3 px-3">

              <a class="btn btn-primary m-3 accetta" href="#" role="button" data-bs-toggle="modal"
                data-bs-target="#exampleModal<?php echo $notifica["ID_Notifica"] ?>">
                Scambia</a>
              <a class="btn btn-secondary m-3 rifiuta" name="rifiuta" href="#" role="button"
                onclick="sendAjaxRequest('notifications.php', {rifiuta: '<?php echo $notifica['ID_Notifica']; ?>' })">
                Rifiuta</a>
            </footer>
          </article>

        </div>




        <div class="modal fade" id="exampleModal<?php echo $notifica["ID_Notifica"]; ?>" tabindex="-1"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Libri di
                  <?php echo $notifica["Username_Int"]; ?>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="#" method="Post">
                  <input type="hidden" id="<?php echo $notifica['ID_Notifica']; ?>" name="selected_book" value="book_id">
                  <input type="hidden" id="select2" name="selected_book2" value="<?php echo $notifica["ID_Libro"]; ?>">
                  <input type="hidden" id="accettata" name="accettata" value="attesa">
                  <?php $books = $dbh->getPostTable()->getPostLibro($notifica['Username_Int']); ?>
                  <?php foreach ($books as $postLibro): ?>
                    <article class="article-annuncio bg-body border mb-3">
                      <header class="px-3  mt-3 mb-3">
                        <img src="<?php echo UPLOAD_DIR . $postLibro["Immagine"] ?>" alt="Copertina libro" class="image" />
                        <h3>
                          <?php echo $postLibro["Titolo"] ?>
                          <h3>
                            <h4>
                              <?php echo $postLibro["Autore"] ?>
                            </h4>
                      </header>
                      <section class="px-3 mb-4">
                        <p>
                          <?php echo $postLibro["Trama"] ?>
                        </p>
                        <?php $bookSelected = $postLibro['ID_Libro']; ?>
                        <input type="button" value="Seleziona" name="seleziona-libro" class="seleziona-libro"
                          onclick="setSelectedBook(<?php echo $postLibro['ID_Libro']; ?>, <?php echo $notifica['ID_Notifica']; ?>)">
                    </article>
                  <?php endforeach; ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <button type="submit" class="btn btn-primary conferma" data-bs-dismiss="modal" name="conferma"
                  onclick="sendAjaxRequest('notifications.php', {accetta: '<?php echo $notifica['ID_Notifica']; ?>', id_libro: '<?php echo $bookSelected; ?>' })">Conferma</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php elseif ($notifica["Tipo"] == "accettata"): ?>
        <div class="row-justify-content-center ">
          <article class="article bg-body border mb-3 notifica">
            <section class="px-3 mb-4">
              <p>
                <?php echo formatDataOra($notifica["DataPubblicazione"]); ?>
              </p>
              <h2>Scambio in corso con il libro
                <?php echo $notifica["bookTitle"]; ?> di
                <?php echo $notifica["Username_Autore"]; ?>
              </h2>
            </section>
          </article>
        </div>
      <?php endif; ?>
    <?php elseif (isset($notifica["Autore_Commento"]) && !array_key_exists('id_commenti', $notifica)): ?>
      <div class="row-justify-content-center notifica">
        <article class="article bg-body border mb-3">
          <header class="px-3  mt-3 mb-3">
            <img src="<?php echo UPLOAD_DIR . $notifica["userProfileImage"]; ?>" alt="" class="img_profile">
            <a href="<?php echo "account-post.php"; ?>?id=<?php echo $notifica["Autore_Commento"]; ?>">
              <?php echo $notifica["Autore_Commento"]; ?>
            </a>
          </header>
          <section class="px-3 mb-4">
            <h2>Ha commentato il tuo post</h2>
            <p>
              <?php echo $notifica["Testo_Commento"]; ?>
            </p>

          </section>
        </article>

      </div>



    <?php elseif (isset($notifica["ID_Evento"]) && !array_key_exists('id_interesse', $notifica)): ?>

      <div class="row-justify-content-center ">
        <article class="article bg-body border mb-3 notifica">
          <header class="px-3  mt-3 mb-3">
            <img src="<?php echo UPLOAD_DIR . $notifica["userProfileImage"]; ?>" alt="" class="img_profile">
            <a href="<?php echo "account-post.php"; ?>?id=<?php echo $notifica["Username_Int"]; ?>">
              <?php echo $notifica["Username_Int"]; ?>
            </a>
            <p>
              <?php echo formatDataOra($notifica["DataPubblicazione"]); ?>
            </p>
          </header>
          <section class="px-3 mb-4">
            <h2>Ha messo like al tuo post</h2>

          </section>
        </article>

      </div>


    <?php elseif (isset($notifica["Autore_Recensione"]) && !array_key_exists('id_interazione', $notifica)): ?>
      <div class="row-justify-content-center ">
        <article class="article bg-body border mb-3 notifica">
          <header class="px-3  mt-3 mb-3">
            <img src="<?php echo UPLOAD_DIR . $notifica["userProfileImage"]; ?>" alt="" class="img_profile">
            <a href="<?php echo "account-post.php"; ?>?id=<?php echo $notifica["Username_Int"]; ?>">
              <?php echo $notifica["Username_Int"]; ?>
            </a>
            <p>
              <?php echo formatDataOra($notifica["DataPubblicazione"]); ?>
            </p>
          </header>
          <section class="px-3 mb-4">
            <h2>Ha messo like alla tua recensione</h2>
          </section>
        </article>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
</div>