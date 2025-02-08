<div class="dtitle w3-container w3-teal">
    Fiche étudiant
</div>
<div class="col-2">
    <div class="dtitle w3-container w3-teal">
        Liste des étudiants
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
                <th class="w3-center">Date entrée</th>
                <th class="w3-center">Annee</th>
                <th class="">Remarque</th>
                <th class="w3-center">Genre</th>
                <th class="w3-center">Datre de naissance</th>
            </tr>
            <?php
            if ($new_etudiant) {
                ?>
                <tr>
                    <td class=""><?= $new_etudiant->numetu ?></td>
                    <td class=""><?= $new_etudiant->nometu; ?></td>
                    <td class=""><?= $new_etudiant->prenometu; ?></td>
                    <td class=""><?= $new_etudiant->adretu; ?></td>
                    <td class=""><?= $new_etudiant->cpetu; ?></td>
                    <td class=""><?= $new_etudiant->viletu; ?></td>
                    <td class=""><?= $new_etudiant->teletu; ?></td>
                    <td class=""><?= $new_etudiant->datentetu; ?></td>
                    <td class=""><?= $new_etudiant->annetu; ?></td>
                    <td class=""><?= $new_etudiant->remetu; ?></td>
                    <td class=""><?= $new_etudiant->sexetu; ?></td>
                    <td class=""><?= $new_etudiant->datnaietu; ?></td>

                </tr>
                <?php
            } else {
                echo "Aucun étudiant trouvé.";
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




<?php
$classements = $new_etudiant->getClassementModules();
?>
<div>
    <h3>Classement de l'étudiant dans chaque module</h3>
    <table>
        <tr>
            <th>Module</th>
            <th>Classement</th>
        </tr>
        <?php foreach ($classements as $classement): ?>
        <tr>
            <td><?= $classement['nom_module']; ?></td>
            <td><?= $classement['rang']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>