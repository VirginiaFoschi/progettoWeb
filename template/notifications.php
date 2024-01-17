<header>
  <a class="btn btn-primary m-3" id="Back" onClick="" role="button">Back</a>
</header>
<div class="col">
  <?php foreach ($templateparams["notificheGenerali"] as $notifica) : ?>
    <?php if (isset($notifica["ID_Notifica"]) && !array_key_exists('id_notifica', $notifica)) : ?>

      <div class="row-justify-content-center">
        <article class="article bg-body border mb-3">
          <header class="px-3  mt-3 mb-3">
            <img src="<?php echo  UPLOAD_DIR . $notifica["userProfileImage"]; ?>" alt="" class="img_profile">
            <a href="<?php echo "account-post.php"; ?>?id=<?php echo  $notifica["Username_Int"]; ?>"><?php echo $notifica["Username_Int"]; ?></a>
            <?php $idBook = $notifica["ID_Libro"] ?>
          </header>
          <section class="px-3 mb-4">
            <h4>Vuole proporti uno scambio con <?php echo $notifica["bookTitle"]; ?></h4>
     
      </section>
      <footer class="text-end my-3 px-3">
        <a class="btn btn-secondary m-3 rifiuta" href="#" role="button">
          Rifiuta</a>
        <a class="btn btn-primary m-3 accetta" href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $notifica["ID_Notifica"] ?>">
          Scambia</a>
      </footer>
      </article>
 </div>




<div class="modal fade" id="exampleModal<?php echo $notifica["ID_Notifica"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Libri di <?php echo $notifica["Username_Int"]; ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#" method="Post">
          <input type="hidden" id="<?php echo $notifica['ID_Notifica']; ?>" name="selected_book" value="book_id">
          <input type="hidden" id="select2" name="selected_book2" value="<?php echo  $notifica["ID_Libro"]; ?>">
          <?php $books = $dbh->getPostTable()->getPostLibroProfilo($notifica['Username_Int']); ?>
          <?php foreach ($books as $postLibro) : ?>
            <article class="article-annuncio bg-body border mb-3">
              <header class="px-3  mt-3 mb-3">
                <img src="<?php echo UPLOAD_DIR . $postLibro["Immagine"] ?>" alt="Copertina libro" class="image" />
                <h3><?php echo $postLibro["Titolo"] ?><h3>
                    <h4><?php echo $postLibro["Autore"] ?></h4>
              </header>
              <section class="px-3 mb-4">
                <p><?php echo $postLibro["Trama"] ?></p>
                <input type="button" value="Seleziona" name="seleziona-libro" class="seleziona-libro" onclick="setSelectedBook(<?php echo $postLibro['ID_Libro']; ?>)">
            </article>
          <?php endforeach; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="submit" class="btn btn-primary conferma" data-bs-dismiss="modal">Conferma</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php elseif (isset($notifica["Autore_Commento"]) && !array_key_exists('id_commenti', $notifica)) : ?>
  <div class="row-justify-content-center">
    <article class="article bg-body border mb-3">
      <header class="px-3  mt-3 mb-3">
        <img src="<?php echo  UPLOAD_DIR . $notifica["userProfileImage"]; ?>" alt="" class="img_profile">
        <a href="<?php echo "account-post.php"; ?>?id=<?php echo  $notifica["Autore_Commento"]; ?>"><?php echo $notifica["Autore_Commento"]; ?></a>
      </header>
      <section class="px-3 mb-4">
        <h4>Ha commentato il tuo post</h4>
        <p><?php echo $notifica["Testo_Commento"]; ?>
        </p>

      </section>
    </article>

  </div>



<?php elseif (isset($notifica["ID_Evento"]) && !array_key_exists('id_interesse', $notifica)) : ?>
  
  <div class="row-justify-content-center">
    <article class="article bg-body border mb-3">
      <header class="px-3  mt-3 mb-3">
        <img src="<?php echo  UPLOAD_DIR . $notifica["userProfileImage"]; ?>" alt="" class="img_profile">
        <a href="<?php echo "account-post.php"; ?>?id=<?php echo  $notifica["Username_Int"]; ?>"><?php echo $notifica["Username_Int"]; ?></a>
      </header>
      <section class="px-3 mb-4">
        <h4>Ha messo like al tuo post</h4>

      </section>
    </article>

  </div>


<?php elseif (isset($notifica["Autore_Recensione"]) && !array_key_exists('id_interazione', $notifica)) : ?>
  <div class="row-justify-content-center">
    <article class="article bg-body border mb-3">
      <header class="px-3  mt-3 mb-3">
        <img src="<?php echo  UPLOAD_DIR . $notifica["userProfileImage"]; ?>" alt="" class="img_profile">
        <a href="<?php echo "account-post.php"; ?>?id=<?php echo  $notifica["Username_Int"]; ?>"><?php echo $notifica["Username_Int"]; ?></a>
      </header>
      <section class="px-3 mb-4">
        <h4>Ha messo like alla tua recensione</h4>
  </div>
  </section>
  </article>
  </div>
  </div>
<?php endif; ?>
<?php endforeach; ?>
</div>