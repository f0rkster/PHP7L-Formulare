<form action="" method="post">

<table border="1">
<tbody>
    <tr>
        <th>X</th>
        <th>Anrede</th>
        <th>Name</th>
        <th>Website</th>
        <th>E-Mail</th>
    </tr>
<? foreach ($content as $key => $tableRow) : ?>
    <tr>
        <td><input type="checkbox" name="delete[]" id="" value="<?=$key?>"></td>
        <? foreach ($tableRow as $tableCell) : ?>
            <td><?=$tableCell;?></td>
        <? endforeach; ?>
    </tr>
<? endforeach; ?>
</tbody>
</table>
    <input type="submit" name="deleteForm" value="Auswahl löschen" class="del-btn">
</form>