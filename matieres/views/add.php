<div class="dtitle w3-container w3-teal">
    Création d'une nouvelle matière
</div>

<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="col-2">
    <div class="dcontent">
        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Nom</b></label><br />
                <input type="text" id="nommat" name="nommat" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Numéro Module</b></label>
                <input type="number" id="nummod" name="nummod" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Coefficient</b></label><br />
                <input type="number" id="coefmat" name="coefmat" />
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

        <div class="col-2">
        </div>
    </div>
</form>