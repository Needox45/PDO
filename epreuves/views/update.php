<?php
if ($epreuve) {
?>

<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="col-2">

<input type="hidden" id="numepr" name="numepr" value="<?=$epreuve->numepr;?>" />

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Libellé</b></label>
                <input type="text" id="libepr" name="libepr" value="<?=$epreuve->libepr;?>" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Enseignant</b></label><br />
                <input type="number" id="ensepr" name="ensepr" value="<?=$epreuve->ensepr;?>"/>
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Matière</b></label><br />
                <input type="number" id="matepr" name="matepr" value="<?=$epreuve->matepr;?>" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date</b></label><br />
                <input type="date" id="datepr" name="datepr" value="<?=$epreuve->datepr;?>" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Coefficient</b></label><br />
                <input type="number" id="coefepr" name="coefepr" value="<?=$epreuve->coefepr;?>"/>
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Année</b></label>
                <input type="number" id="annepr" name="annepr" value="<?=$epreuve->annepr;?>" />
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