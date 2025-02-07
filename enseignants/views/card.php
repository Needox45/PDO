<div class="dtitle w3-container w3-teal">
    Fiche enseignant
</div>
<div class="col-2">
    <div class="dtitle w3-container w3-teal">
        Liste des enseignants
    </div>

    <div class="col-2">
        <table class="w3-table w3-bordered">
            <tr>
                <th class="">#</th>
                <th class="">Nom</th>
                <th class="">Prénom</th>
                <th class="">Adresse</th>
                <th class="">Code postal</th>
                <th class="">Ville</th>
                <th class="">Téléphone</th>
                <th class="w3-center">Date de naissance</th>
                <th class="w3-center">Date d'embauche</th>
                <th class="">Fonction</th>
            </tr>
            <?php
            if ($new_enseignant) {
                ?>
                <tr>
                    <td class=""><?= $new_enseignant->numens ?></td>
                    <td class=""><?= $new_enseignant->nomens; ?></td>
                    <td class=""><?= $new_enseignant->preens; ?></td>
                    <td class=""><?= $new_enseignant->adrens; ?></td>
                    <td class=""><?= $new_enseignant->cpens; ?></td>
                    <td class=""><?= $new_enseignant->vilens; ?></td>
                    <td class=""><?= $new_enseignant->telens; ?></td>
                    <td class=""><?= $new_enseignant->datnaiens; ?></td>
                    <td class=""><?= $new_enseignant->datembens; ?></td>
                    <td class=""><?= $new_enseignant->foncens; ?></td>
                </tr>
                <?php
            } else {
                echo "Aucun enseignant trouvé.";
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