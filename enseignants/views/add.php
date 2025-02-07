<div class="dtitle w3-container w3-teal">
    Création d'un nouvel enseignant
</div>

<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="col-2">
    <div class="dcontent">
        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Nom</b></label><br />
                <input type="text" id="nomens" name="nomens" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Prénom</b></label>
                <input type="text" id="preens" name="preens" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Adresse</b></label><br />
                <input type="text" id="adrens" name="adrens" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Ville</b></label>
                <input type="text" id="vilens" name="vilens" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Code Postal</b></label><br />
                <input type="number" id="cpens" name="cpens" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Téléphone</b></label>
                <input type="text" id="telens" name="telens" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date de naissance</b></label><br />
                <input type="date" id="datnaiens" name="datnaiens" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date d'embauche</b></label><br />
                <input type="date" id="datembens" name="datembens" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Fonction</b></label><br />
                <input type="text" id="foncens" name="foncens" />
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