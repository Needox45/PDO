<div class="col-2">
    <p>Voulez-vous supprimer l'utilisateur ?</p>
</div>
<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="col-2">
    <br />
    <div class="w3-row-padding">
        <div class="w3-half">
            <input class="w3-btn w3-red" type="submit" name="cancel" value="Annuler" />
        </div>
        <div class="w3-half">
            <input class="w3-btn w3-blue-grey" type="submit" name="confirm_envoyer" value="Confirmer" />
        </div>
    </div>
</form>