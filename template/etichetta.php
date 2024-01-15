<fieldset class="bg-body">
    <legend>Dati mittente:</legend>
    <ul>
        <li>
            <p>Nome Mittente: </p>
            <p><?php echo $templateparams["dati"][0]["Mittente"]["Nome"]?>  <?php echo $templateparams["dati"][0]["Mittente"]["Cognome"]?></p>
        </li>
        <li>
            <p>Indirizzo:</p>
            <p><?php echo $templateparams["dati"][0]["Mittente"]["Indirizzo"]?></p>
        </li>
    </ul>
</fieldset>
<fieldset class="bg-body">
    <legend>Dati destinatario:</legend>
    <ul>
        <li>
            <p>Nome destinatario: </p>
            <p><?php echo $templateparams["dati"][0]["Destinatario"]["Nome"]?>  <?php echo $templateparams["dati"][0]["Destinatario"]["Cognome"]?></p>
        </li>
        <li>
            <p>Indirizzo:</p>
            <p><?php echo $templateparams["dati"][0]["Destinatario"]["Indirizzo"]?></p>
        </li>
    </ul>
</fieldset>
<div class="text-end etichetta-no-stampare">
    <input id="back" type="button" class="btn btn-outline-primary" value="Back" onclick="backPost()"/>
    <input id="print" type="button" class="btn btn-outline-primary" value="Stampa" onclick="stamparePagina()" />
</div>