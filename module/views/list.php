<div class="dtitle w3-container w3-teal">
    Liste des modules
</div>

<div class="col-2">
    <table class="w3-table w3-bordered">
        <tr>
            <th class="">#</th>
            <th class="">Nom</th>
            <th class="">Coefficient</th>
        </tr>
        <?php
        if (is_array($list_elements) && sizeof($list_elements) > 0)
            array_map(
                function (Modules $o) {
                    ?>
                <tr>
                    <td> <a href="index.php?element=modules&action=card&id=<?= $o->nummod; ?>">
                            <input type="submit" name="card" value="<?= $o->nummod; ?>" />
                        </a>
                    </td>
                    <td class=""><?= $o->nommod; ?></td>
                    <td class=""><?= $o->coefmod; ?></td>
                </tr>
                <?php
                },
                $list_elements
            );
        ?>
    </table>
</div>