<?= $data['title']; ?>
<?= var_dump($_POST); ?>

<form action="<?= URLROOT; ?>/RichestPeople/update" method="POST">
    <table>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="name" id="name" value="<?= $data['row']->name ;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="nettoWorth" id="nettoWorth" value="<?= $data['row']->nettoWorth ;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="number" name="age" id="age" value="<?= $data['row']->age ;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="company" id="company" value="<?= $data['row']->company ;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value="<?= $data['row']->id ;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="send">
                </td>
            </tr>
        </tbody>
    </table>


</form>


