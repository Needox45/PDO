<div class="dtitle w3-container w3-teal">
    Fiche matière
</div>
<div class="col-2">
    <div class="dtitle w3-container w3-teal">
        Détails de la matière
    </div>

    <div class="col-2">
        <table class="w3-table w3-bordered">
            <tr>
                <th class="">#</th>
                <th class="">Nom</th>
                <th class="">Numéro Module</th>
                <th class="">Coefficient</th>
            </tr>
            <?php
            if ($new_matiere) {
                ?>
                <tr>
                    <td class=""><?= $new_matiere->nummat ?></td>
                    <td class=""><?= $new_matiere->nommat; ?></td>
                    <td class=""><?= $new_matiere->nummod; ?></td>
                    <td class=""><?= $new_matiere->coefmat; ?></td>
                </tr>
                <?php
            } else {
                echo "Aucune matière trouvée.";
            }
            ?>
        </table>
    </div>
</div>

<form action="<?= $_SERVER['REQUEST_URI'] ?>" method="POST" class="col-2">
    <br />
    <div class="w3-row-padding">
        <div class="w3-half">
            <input class="w3-btn w3-red" type="submit" name="delete" value="Supprimer" />
        </div>
        <div class="w3-half">
            <input class="w3-btn w3-blue-grey" type="submit" name="update" value="Modifier" />
        </div>
    </div>
</form>