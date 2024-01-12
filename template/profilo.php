<div class="container-fluid p-0 overflow-hidden">
    <header class="top">
        <input class="button" type="button" value="Impostazioni" name="impostazioni" id="impostazioni"
            onclick="impostazioni()" />
        <input class="button" type="button" value="Notifiche" name="notifiche" id="notifiche" onclick="notifiche()" />
    </header>
</div>

<div class="top-inf">
    <?php foreach ($templateparams["img-profilo"] as $image): ?>
        <img src="<?php echo UPLOAD_DIR . $image["Immagine"]; ?>" alt="Immagine-Profilo" id="profilo-image" />
    <?php endforeach; ?>

    <section>

        <h2 id="nome-utente">
            <?php echo $templateparams["nome-profilo"]; ?>
        </h2>
        <p id="follow">Follow</p>
        <p id="follower">Follower</p>
        <?php foreach ($templateparams["follow"] as $follow): ?>
            <p id="num-follow">
                <?php echo $follow["follow_count"]; ?>
            </p>
        <?php endforeach; ?>
        <?php foreach ($templateparams["follower"] as $follower): ?>
            <p id="num-follower">
                <?php echo $follower["follower_count"]; ?>
            </p>
        <?php endforeach; ?>

    </section>
</div>

<div class="profileBar">
    <div class="col-12">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active2" title="Post" href="#"
                    onclick="cambiaTab2(this); caricaArticoli('profilo-post.html');">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="Lista libri" href="#"
                    onclick="cambiaTab2(this); caricaArticoli('profilo-lista-libri.html');">Lista
                    Libri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" title="Scambi in corso" href="#"
                    onclick="cambiaTab2(this); caricaArticoli('profilo-scambi-attivi.html');">Scambi
                    Attivi</a>
            </li>
        </ul>
    </div>
</div>

<main id="contenitore-post">

</main>
<script>
    // Carica articoli di default al caricamento della pagina
    document.addEventListener('DOMContentLoaded', function () {
        // Imposta il pulsante di default e carica gli articoli corrispondenti
        document.querySelector('.nav-link.active2').click();
        caricaArticoli('profilo-post.php');
    });
</script>