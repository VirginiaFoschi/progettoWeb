<h2>Accedi</h2>
<form action="#" method="POST">
    <?php if($templateparams["erroreLogin"]): ?>
        <div id="liveAlertPlaceholder" class=" mb-3 alert alert-danger alert-dismissible" role="alert">
        <div id="message">Errore! Verificare Username e/o Password</div>
        <button type="button" class="btn-close" id="btnclose" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <div class="mb-5 mt-5">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="mb-5">
        <label for="password" class="form-label">Password</label>
        <input type="password" minlength="5" class="form-control" id="password" name="password">
    </div>
    <div class="mb-5">
        <div class="col-12 text-end">
            <input id="backbtn" type="button" class="btn btn-outline-primary" value="Back" onClick="logout()"/>
            <input type="submit" class="btn btn-outline-primary" value="Log In"/>
        </div>
    </div>
</form>