<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php foreach ($templateparams["css"] as $css): ?>
        <link rel="stylesheet" href="css/<?php echo $css ?>">
    <?php endforeach; ?>

    <title>Progetto Tecnologie Web</title>
</head>

<body>
    <div id="content-principal">
    <?php
    require($templateparams["nome"]);
    ?>
    </div>

    <!--Footer comune a tutte le pagine-->
    <div id="content2">
            <footer class="footer">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item" id="nome_sito">
                        <h1>Mille e Una Pagina</h1>
                        <img id="logo" src="./upload/logo.jpeg" alt="logo" />
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaCorrente == 'bacheca') ? 'active1' : ''; ?>" title="home" href="bacheca.php" onclick="cambiaTab(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-clipboard icon" viewBox="0 0 16 16">
                                <path
                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                                <path
                                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                            </svg>
                            <span class="description"> Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaCorrente == 'search') ? 'active1' : ''; ?>" title="cerca" href="search-all.php" onclick="cambiaTab(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-search icon" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                            <span class="description"> Cerca</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaCorrente == 'addBook') ? 'active1' : ''; ?>" title="crea" href="addBook.php" onclick="cambiaTab(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-plus-square icon" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                            </svg>
                            <span class="description"> Crea</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($paginaCorrente == 'profilo') ? 'active1' : ''; ?>" title="profilo" href="profilo-post.php" onclick="cambiaTab(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-person icon" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z" />
                            </svg>
                            <span class="description"> Profilo</span>
                        </a>
                    </li>
                </ul>
            </footer>
        </div>
    <?php foreach ($templateparams["js"] as $js): ?>
        <script src="js/<?php echo $js ?>"></script>
    <?php endforeach; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="js/base.js" type="text/javascript"></script>
    
</body>

</html>