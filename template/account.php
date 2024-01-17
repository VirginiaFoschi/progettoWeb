<header class="top">
    <input class="button" type="button" value="Indietro" name="indietro" title="Home" onclick="backHome()" />
</header>

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
        <input class="follow" type="submit" value="<?php if (in_array($templateparams["nome-profilo"], $templateparams["follows"])):
            echo "Segui Già";
        else:
            echo "Segui";
        endif; ?>"
            onClick="sendAjaxRequest('follow.php', {username: '<?php echo $templateparams["nome-profilo"]; ?>'})" />
    </section>
</div>


<!--Barra del profilo-->
<div class="profileBar">
    <div class="col-12">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link <?php echo ($postCorrente == 'post') ? 'active2' : ''; ?>" title="Post"
                    href="account-post.php?id=<?php echo $templateparams["nome-profilo"]; ?>" onclick="">Post</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($postCorrente == 'libri') ? 'active2' : ''; ?>" title="Lista libri"
                    href="account-lista-libri.php?id=<?php echo $templateparams["nome-profilo"]; ?>" onclick="">Lista
                    Libri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($postCorrente == 'scambi') ? 'active2' : ''; ?>" title="Scambi in corso"
                    href="account-scambi.php?id=<?php echo $templateparams["nome-profilo"]; ?>" onclick="">Scambi
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