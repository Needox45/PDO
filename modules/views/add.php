<div class="dtitle w3-container w3-teal">
    Création d'un nouvel étudiant
</div>


<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="col-2">

    <div class="dcontent">
        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Nom</b></label><br />
                <input type="text" id="nometu" name="nometu" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Prénom</b></label>
                <input type="text" id="prenometu" name="prenometu" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Adresse</b></label><br />
                <input type="text" id="adretu" name="adretu" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Ville</b></label>
                <input type="text" id="viletu" name="viletu" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Code Postal</b></label><br />
                <input type="number" id="cpetu" name="cpetu" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Téléphone</b></label>
                <input type="text" id="teletu" name="teletu" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date d'entrée</b></label><br />
                <input type="date" id="datentetu" name="datentetu" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Année</b></label>
                <input type="number" id="annetu" name="annetu" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Remarque</b></label><br />
                <input type="text" id="remetu" name="remetu" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Sexe</b></label>
                <input type="text" id="sexetu" name="sexetu" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date de naissance</b></label><br />
                <input type="date" id="datnaietu" name="datnaietu" />
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