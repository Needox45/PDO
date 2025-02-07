<div class="dtitle w3-container w3-teal">
    Création d'une nouvelle épreuve
</div>

<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="col-2">
    <div class="dcontent">
        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Libellé</b></label><br />
                <input type="text" id="libepr" name="libepr" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Enseignant</b></label>
                <input type="number" id="ensepr" name="ensepr" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Matière</b></label><br />
                <input type="number" id="matepr" name="matepr" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Date</b></label>
                <input type="date" id="datepr" name="datepr" />
            </div>
            <div class="w3-half">
                <label class="w3-text-blue"><b>Coefficient</b></label><br />
                <input type="number" id="coefepr" name="coefepr" />
            </div>
        </div>

        <div class="w3-row-padding">
            <div class="w3-half">
                <label class="w3-text-blue"><b>Année</b></label>
                <input type="number" id="annepr" name="annepr" />
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