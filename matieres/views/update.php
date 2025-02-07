<?php
if ($matiere) {
?>

<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="col-2">

<input type="hidden" id="nummat" name="nummat" value="<?=$matiere->nummat;?>" />

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Nom</b></label>
                <input type="text" id="nommat" name="nommat" value="<?=$matiere->nommat;?>" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Numéro Module</b></label><br />
                <input type="number" id="nummod" name="nummod" value="<?=$matiere->nummod;?>"/>
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Coefficient</b></label><br />
                <input type="number" id="coefmat" name="coefmat" value="<?=$matiere->coefmat;?>" />
            </div>
        </div>

        <br />
        <div class="w3-row-padding">
            <div class="w3-half">
                <input class="w3-btn w3-red" type="submit" name="cancel" value="Annuler" />
            </div>
            <div class="w3-half">
                <input class="w3-btn w3-blue-grey" type="submit" name="confirm_envoyer" value="Envoyer" />
            </div>
        </div>

    </form>
<?php
}