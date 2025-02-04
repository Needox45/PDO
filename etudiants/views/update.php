<?php
if ($etudiant) {
?>

<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="col-2">



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
                <input type="text" id="adretu" name="adretu" value="<?=$etudiant->diploma;?>" />
            </div>
        </div>


        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Ville</b></label><br />
                <input type="text" id="viletu" name="viletu" value="<?=$etudiant->diploma;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Code postal</b></label><br />
                <input type="number" id="cpetu" name="cpetu" value="<?=$etudiant->year;?>"/>
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Telephone</b></label>
                <input type="text" id="teletu" name="teletu" value="<?=$etudiant->td;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date entrée</b></label><br />
                <input type="text" id="datentetu" name="datentetu" value="<?=$etudiant->tp;?>" />
            </div>
        </div>


        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Année</b></label>
                <input type="number" id="annetu" name="annetu" value="<?=$etudiant->adretu;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Remarque</b></label><br />
                <input type="text" id="remetu" name="remetu" value="<?=$etudiant->cpetu;?>" />
            </div>
        </div>



        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Sexe</b></label>
                <input type="text" id="sexetu" name="sexetu" value="<?=$etudiant->viletu;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date de naissance</b></label>
                <input type="text" id="datnaietu" name="datnaietu" value="<?=$etudiant->viletu;?>" />
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