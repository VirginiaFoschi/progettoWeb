
<form class="indirizzo" method="POST" action="#">
    <h4>Modifica Indirizzo</h4>
    <label for="indirizzo" class="form-label">Nuovo Indirizzo:</label>
    <input type="text" class="form-control" id="indirizzo" value="<?php echo $templateparams["indirizzo"][0]["Indirizzo"]?>" name="indirizzo"/>
    <div class="mb-3">
        <div class="col-12 text-end">
            <input type="button" class="btn" value="Indietro" onclick="backImp()" />
            <input type="submit" class="btn" value="Salva" />
        </div>
    </div>
</form>