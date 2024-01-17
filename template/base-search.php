<header>
    <form action="#" method="POST">
        <button id="btnsearch" type="submit"><strong class="fa fa-search"></strong></button>
        <input id="cerca" class="<?php if($_SESSION["text"] != ""): echo 'restore'; endif; ?>" type="text" placeholder="<?php echo $_SESSION["text"] == "" ? 'Cerca..' :  $_SESSION["text"]; ?>" name="search" title="searchbtn">
        <button id="btnannulla" class="<?php if($_SESSION["text"] != ""): echo 'restore'; endif; ?>" type="submit">Annulla</button>
    </form>
</header>
<ul class="nav justify-content-center" id="options">
    <li class="nav-item">
        <a class="nav-link <?php echo ($sottopagina == 'all') ? 'active3' : ''; ?>" aria-current="page" href="search-all.php" >Tutti</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo ($sottopagina == 'posts') ? 'active3' : ''; ?>" href="search-posts.php" >Post</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo ($sottopagina == 'users') ? 'active3' : ''; ?>" href="search-users.php" >Persone</a>
    </li>
</ul>
<div class="container-fluid p-0 overflow-hidden content">
    <?php
        require($templateparams["nome1"]);
    ?>
</div>