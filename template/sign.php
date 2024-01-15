<h2>Crea un account</h2>
<form action="#" method="POST" enctype="multipart/form-data">
    <div class="mb-3" id="select-image">
        <img src="img/immagineProfilo.png" alt="" id="profilo" class="image">
        <label for="input">Seleziona foto profilo:
        <input type="file" id="input" accept="image/*" name="image"></label>
    </div>
    <?php if($templateparams["erroreSignIn"]): ?>
        <div id="liveAlertPlaceholder" class=" mb-3 alert alert-danger alert-dismissible" role="alert">
        <div id="message"><?php echo $templateparams["errormsg"]; ?></div>
        <button type="button" class="btn-close" id="btnclose" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>  
    <?php else: ?>
        <div id="liveAlertPlaceholder" class="mb-3"></div>
    <?php endif; ?>
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="surname" class="form-label">Cognome</label>
        <input type="text" class="form-control" id="surname" name="surname">
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" minlength="5" class="form-control" id="password" name="password">
        <span class="form-text">
            Your password must be at least 5 characters long
        </span>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Indirizzo di spedizione</label>
        <input type="text" class="form-control" id="address" name="address">
    </div>
    <div class="mb-3">
        <label for="genres" class="mb-2">Generi preferiti</label>
        <select class="form-select" size="3" id="genres" name="genres[]" multiple>
        <?php foreach($templateparams["generi"] as $genere): ?>
            <option value="<?php echo $genere["nome"]; ?>"><?php echo $genere["nome"] ?></option>
            <?php endforeach; ?>
        </select>
        <span class="form-text">
            Press CTRL and select all your favourite genres
        </span>
    </div>
    <div class="mb-3">
        <div class="col-12 text-end">
            <input id="backbtn" type="button" class="btn btn-outline-primary" value="Back" onClick="logout()">
            <input id="signbtn" type="button" class="btn btn-outline-primary" value="Sign In" onclick="appendAlert()">
        </div>
    </div>
</form>