<div class="dtitle w3-container w3-teal">
    Liste des matières
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
        if (is_array($list_elements) && sizeof($list_elements) > 0)
            array_map(
                function (Matieres $o) {
                    ?>
                <tr>
                    <td> <a href="index.php?element=matieres&action=card&id=<?= $o->nummat; ?>">
                            <input type="submit" name="card" value="<?= $o->nummat; ?>" />
                        </a>
                    </td>
                    <td class=""><?= $o->nommat; ?></td>
                    <td class=""><?= $o->nummod; ?></td>
                    <td class=""><?= $o->coefmat; ?></td>
                </tr>
                <?php
                },
                $list_elements
            );
        ?>
    </table>
</div>