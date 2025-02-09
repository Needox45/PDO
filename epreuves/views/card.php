<div class="dtitle w3-container w3-teal">
    Fiche épreuve
</div>
<div class="col-2">
    <div class="dtitle w3-container w3-teal">
        Détails de l'épreuve
    </div>

    <div class="col-2">
        <table class="w3-table w3-bordered">
            <tr>
                <th class="">#</th>
                <th class="">Libellé</th>
                <th class="">Enseignant</th>
                <th class="">Matière</th>
                <th class="">Date</th>
                <th class="">Coefficient</th>
                <th class="">Année</th>
            </tr>
            <?php
            if ($new_epreuve) {
                ?>
                <tr>
                    <td class=""><?= $new_epreuve->numepr ?></td>
                    <td class=""><?= $new_epreuve->libepr; ?></td>
                    <td class=""><?= $new_epreuve->ensepr; ?></td>
                    <td class=""><?= $new_epreuve->matepr; ?></td>
                    <td class=""><?= $new_epreuve->datepr; ?></td>
                    <td class=""><?= $new_epreuve->coefepr; ?></td>
                    <td class=""><?= $new_epreuve->annepr; ?></td>
                </tr>
                <?php
            } else {
                echo "Aucune épreuve trouvée.";
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