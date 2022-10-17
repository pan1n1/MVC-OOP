<?= $data['title']; ?>
<?= var_dump($_POST); ?>
<body>
    
<form action="<?= URLROOT; ?>/RichestPeople/create" method="POST">
    <table>
        <tbody>
            <tr>
                <td>
                    <label for="name">naam</label>
                    <input type="text" name="name" id="name" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nettoWorth">nettoWorth</label>
                    <input type="number" name="nettoWorth" id="nettoWorth" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="age">age</label>
                    <input type="number" name="age" id="age" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="company">company</label>
                    <input type="text" name="company" id="company" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id" value="">
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

<h3>oi</h3>
    
</body>
