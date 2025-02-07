<div class="dtitle w3-container w3-teal">
    Liste des épreuves
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
        if (is_array($list_elements) && sizeof($list_elements) > 0)
            array_map(
                function (Epreuves $o) {
                    ?>
                <tr>
                    <td> <a href="index.php?element=epreuves&action=card&id=<?= $o->numepr; ?>">
                            <input type="submit" name="card" value="<?= $o->numepr; ?>" />
                        </a>
                    </td>
                    <td class=""><?= $o->libepr; ?></td>
                    <td class=""><?= $o->ensepr; ?></td>
                    <td class=""><?= $o->matepr; ?></td>
                    <td class=""><?= $o->datepr; ?></td>
                    <td class=""><?= $o->coefepr; ?></td>
                    <td class=""><?= $o->annepr; ?></td>
                </tr>
                <?php
                },
                $list_elements
            );
        ?>
    </table>
</div>