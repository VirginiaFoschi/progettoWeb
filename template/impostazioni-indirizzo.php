
<form class="indirizzo" method="POST">
    <h4>Modifica Indirizzo</h4>
    <label for="indirizzo" class="form-label">Nuovo Indirizzo:</label>
    <input type="text" class="form-control" id="indirizzo" value="<?php echo $templateparams["indirizzo"][0]["Indirizzo"]?>"/>
    <div class="mb-3">
        <div class="col-12 text-end">
            <input id="back" type="button" class="btn btn-outline-primary" value="Back" onclick="backImp()" />
            <input type="submit" class="btn btn-outline-primary" value="Save" />
        </div>
    </div>
</form>