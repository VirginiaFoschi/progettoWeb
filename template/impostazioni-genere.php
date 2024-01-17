<form method="POST" class="genere">
        <h2>Generi preferiti:</h2>
        <ul>
            <?php foreach($templateparams["generi"] as $generi):?>
            <li>
                <input type="checkbox" id="<?php echo $generi["nome"]?>" <?php echo in_array($generi,$templateparams["genere-utente"])? "checked": ""; ?> name="genere[]" value="<?php echo $generi["nome"]?>"/>
                <label for="<?php echo $generi["nome"]?>"><?php echo $generi["nome"]?></label>
            </li>
            <?php endforeach;?>
        </ul>
        <div class="mb-3">
            <div class="col-12 text-end">
                <input id="backbtn" type="button" class="btn" value="Back" onclick="backImp()" />
                <input type="submit" class="btn" value="Salva" />
            </div>
        </div>
</form>