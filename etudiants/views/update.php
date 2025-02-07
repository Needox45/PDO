<?php
if ($etudiant) {
?>

<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="col-2">

<input type="hidden" id="numetu" name="numetu" value="<?=$etudiant->numetu;?>" />

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Prénom</b></label>
                <input type="text" id="prenometu" name="prenometu" value="<?=$etudiant->prenometu;?>" />
            </div>
        </div>


        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Nom</b></label><br />
                <input type="text" id="nometu" name="nometu" value="<?=$etudiant->nometu;?>"/>
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Adresse</b></label><br />
                <input type="text" id="adretu" name="adretu" value="<?=$etudiant->adretu;?>" />
            </div>
        </div>


        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Ville</b></label><br />
                <input type="text" id="viletu" name="viletu" value="<?=$etudiant->viletu;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Code postal</b></label><br />
                <input type="number" id="cpetu" name="cpetu" value="<?=$etudiant->cpetu;?>"/>
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Telephone</b></label>
                <input type="text" id="teletu" name="teletu" value="<?=$etudiant->teletu;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date entrée</b></label><br />
                <input type="date" id="datentetu" name="datentetu" value="<?=$etudiant->datentetu;?>" />
            </div>
        </div>


        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Année</b></label>
                <input type="number" id="annetu" name="annetu" value="<?=$etudiant->annetu;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Remarque</b></label><br />
                <input type="text" id="remetu" name="remetu" value="<?=$etudiant->remetu;?>" />
            </div>
        </div>



        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Sexe</b></label>
                <input type="text" id="sexetu" name="sexetu" value="<?=$etudiant->sexetu;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date de naissance</b></label>
                <input type="date" id="datnaietu" name="datnaietu" value="<?=$etudiant->datnaietu;?>" />
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