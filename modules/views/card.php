<div class="dtitle w3-container w3-teal">
    Fiche module
</div>
<div class="col-2">
    <div class="dtitle w3-container w3-teal">
        Détails du module
    </div>

    <div class="col-2">
        <table class="w3-table w3-bordered">
            <tr>
                <th class="">#</th>
                <th class="">Nom</th>
                <th class="">Coefficient</th>
            </tr>
            <?php
            if ($new_module) {
                ?>
                <tr>
                    <td class=""><?= $new_module->nummod ?></td>
                    <td class=""><?= $new_module->nommod; ?></td>
                    <td class=""><?= $new_module->coefmod; ?></td>
                </tr>
                <?php
            } else {
                echo "Aucun module trouvé.";
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

<div>
    <h3>Classement des étudiants</h3>
    <table>
        <tr>
            <th>Étudiant</th>
            <th>Classement</th>
        </tr>
        <?php foreach ($classements as $classement): ?>
        <tr>
            <td><?= $classement['nom_etudiant']; ?></td>
            <td><?= $classement['rang']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>