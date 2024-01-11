<!doctype html>
<html lang="it">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/sign.css" >

<title>Progetto Tecnologie Web</title>
</head>
<body class="bg-light">
    <div class="container-fluid p-0 overflow-hidden">
        <header class="text-center font-monospace">
            <h1 class="py-3">Mille e Una Pagina</h1>
        </header>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <section>
                <?php
                    require($templateparams["nome"]);
                ?>
                </section>
            </div> 
        </div>
        <div class="row">
            <div class="col-12">
                <footer class="font-monospace text-center py-4">
                    <p>From MVC</p>
                </footer>
            </div>
        </div>
    </div>
    <script src="js/sign.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
</body>
</html>