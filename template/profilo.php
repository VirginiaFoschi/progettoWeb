<header class="top">
    <input class="btn" type="button" value="Impostazioni" name="impostazioni" title="Impostazioni"
        onclick="impostazioni()" />
    <button type="button" class="btn position-relative" title="Notifiche" onclick="notifiche()">
        Notifiche
        <?php if ($templateparams["num-notifiche"] != 0): ?>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                <?php echo $templateparams["num-notifiche"] ?>
                <span class="visually-hidden">unread messages</span>
            </span>
        <?php endif ?>
    </button>
</header>

<div class="top-inf">
    <?php foreach ($templateparams["img-profilo"] as $image): ?>
        <img src="<?php echo UPLOAD_DIR . $image["Immagine"]; ?>" alt="Immagine-Profilo" id="profilo-image" />
    <?php endforeach; ?>

    <section>

        <h1>
            <?php echo $templateparams["nome-profilo"]; ?>
        </h1>
        <p>Seguiti</p>
        <p>Follower</p>
        <?php foreach ($templateparams["follow"] as $follow): ?>
            <p>
                <?php echo $follow["follow_count"]; ?>
            </p>
        <?php endforeach; ?>
        <?php foreach ($templateparams["follower"] as $follower): ?>
            <p>
                <?php echo $follower["follower_count"]; ?>
            </p>
        <?php endforeach; ?>

    </section>
</div>

<div class="profileBar">
    <div class="col-12">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link <?php echo ($postCorrente == 'post') ? 'active2' : ''; ?>" title="Post"
                    href="profilo-post.php" onclick="">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($postCorrente == 'libri') ? 'active2' : ''; ?>" title="Lista libri"
                    href="profilo-lista-libri.php" onclick="">Lista
                    Libri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($postCorrente == 'scambi') ? 'active2' : ''; ?>" title="Scambi in corso"
                    href="profilo-scambi.php" onclick="">Scambi
                    Attivi</a>
            </li>
        </ul>
    </div>
</div>

<main id="contenitore-post">
    <div class="container-fluid p-0 overflow-hidden">
        <?php
        require($templateparams["nome-articolo"]);
        ?>
    </div>
</main>