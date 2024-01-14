<div class="container-fluid p-0 overflow-hidden">  
<div class="row mx-3 my-2">
    <div class="col-12"> 
        <header>
        <form action="#" method="POST">
            <button id="btnsearch" type="submit"><strong class="fa fa-search"></strong></button>
            <input id="cerca" type="text" placeholder="Search.." name="search" title="searchbtn">
            <button id="btnannulla" type="button">Annulla</button>
        </form>
        </header>
    </div>
</div>
<div class="row justify-content-center mb-2">
    <div class="col-12"> 
        <ul class="nav justify-content-center bg-light" id="options">
            <li class="nav-item">
                <a class="nav-link <?php echo ($sottopagina == 'all') ? 'active3' : ''; ?>" aria-current="page" href="search-all.php" onclick="cambiaTab3(this)">All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($sottopagina == 'users') ? 'active3' : ''; ?>" href="search-users.php" onclick="cambiaTab3(this)">Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo ($sottopagina == 'posts') ? 'active' : ''; ?>" href="search-posts.php" onclick="cambiaTab3(this)">Posts</a>
            </li>
        </ul>
    </div>
</div>
<div class="container-fluid p-0 overflow-hidden content">
<?php
            require($templateparams["nome1"]);
        ?>
</div>