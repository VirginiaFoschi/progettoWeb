<h2>Accedi</h2>
<form action="#" method="POST">
    <?php if($templateparams["erroreLogin"]): ?>
        <div class=" mb-3 alert alert-danger alert-dismissible" role="alert">
        <div>Errore! Verificare Username e/o Password</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
    <div class="mb-5 mt-3">
        <label for="usernameLogin" class="form-label">Username</label>
        <input type="text" class="form-control" id="usernameLogin" name="username">
    </div>
    <div class="mb-5">
        <label for="passwordLogin" class="form-label">Password</label>
        <input type="password" minlength="5" class="form-control" id="passwordLogin" name="password">
    </div>
    <div class="mb-5">
        <div class="col-12 text-end">
            <input type="button" class="btn" value="Indietro" onClick="logout()"/>
            <input type="submit" class="btn" value="Accedi"/>
        </div>
    </div>
</form>