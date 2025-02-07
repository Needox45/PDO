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
        if (is_array($list_elements) && sizeof($list_elements) > 0)
            array_map(
                function (Enseignants $o) {
                    ?>
                <tr>
                    <td> <a href="index.php?element=enseignants&action=card&id=<?= $o->numens; ?>">
                            <input type="submit" name="card" value="<?= $o->numens; ?>" />
                        </a>
                    </td>
                    <td class=""><?= $o->nomens; ?></td>
                    <td class=""><?= $o->preens; ?></td>
                    <td class=""><?= $o->adrens; ?></td>
                    <td class=""><?= $o->cpens; ?></td>
                    <td class=""><?= $o->vilens; ?></td>
                    <td class=""><?= $o->telens; ?></td>
                    <td class=""><?= $o->datnaiens; ?></td>
                    <td class=""><?= $o->datembens; ?></td>
                    <td class=""><?= $o->foncens; ?></td>
                </tr>
                <?php
                },
                $list_elements
            );
        ?>
    </table>
</div>