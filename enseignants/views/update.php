<?php
if ($enseignant) {
?>

<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="col-2">

<input type="hidden" id="numens" name="numens" value="<?=$enseignant->numens;?>" />

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Prénom</b></label>
                <input type="text" id="preens" name="preens" value="<?=$enseignant->preens;?>" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Nom</b></label><br />
                <input type="text" id="nomens" name="nomens" value="<?=$enseignant->nomens;?>"/>
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Adresse</b></label><br />
                <input type="text" id="adrens" name="adrens" value="<?=$enseignant->adrens;?>" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Ville</b></label><br />
                <input type="text" id="vilens" name="vilens" value="<?=$enseignant->vilens;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Code postal</b></label><br />
                <input type="number" id="cpens" name="cpens" value="<?=$enseignant->cpens;?>"/>
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Telephone</b></label>
                <input type="text" id="telens" name="telens" value="<?=$enseignant->telens;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date de naissance</b></label>
                <input type="date" id="datnaiens" name="datnaiens" value="<?=$enseignant->datnaiens;?>" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Fonction</b></label>
                <input type="text" id="foncens" name="foncens" value="<?=$enseignant->foncens;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date d'embauche</b></label>
                <input type="date" id="datembens" name="datembens" value="<?=$enseignant->datembens;?>" />
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