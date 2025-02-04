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
        if (is_array($list_elements) && sizeof($list_elements) > 0)
            array_map(
                function (Etudiants $o) {
                    ?>
                <tr>
                    <td> <a href="index.php?element=etudiants&action=card&id=<?= $o->numetu; ?>">
                            <input type="submit" name="card" value="<?= $o->numetu; ?>" />
                        </a>
                    </td>
                    <td class=""><?= $o->nometu; ?></td>
                    <td class=""><?= $o->prenometu; ?></td>
                    <td class=""><?= $o->adretu; ?></td>
                    <td class=""><?= $o->cpetu; ?></td>
                    <td class=""><?= $o->viletu; ?></td>
                    <td class=""><?= $o->teletu; ?></td>
                    <td class=""><?= $o->datentetu; ?></td>
                    <td class=""><?= $o->annetu; ?></td>
                    <td class=""><?= $o->remetu; ?></td>
                    <td class=""><?= $o->sexetu; ?></td>
                    <td class=""><?= $o->datnaietu; ?></td>

                </tr>
                <?php
                },
                $list_elements
            );
        ?>
    </table>
</div>