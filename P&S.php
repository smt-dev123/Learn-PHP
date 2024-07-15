<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td><input type="text" placeholder="បណ្ដោយ" name="a"></td>
            </tr>
            <tr>
                <td><input type="text" placeholder="ទទឹង" name="b"></td>
            </tr>
            <tr>
                <td><input type="submit" name="set" value="គណនា"></td>
            </tr>
            <!-- Result -->
            <tr>
                <td>បរិមាត្រ = <?php echo (empty($_POST['a']) || empty($_POST['b'])) ? 0 : ($_POST['a'] + $_POST['b']) * 2 ?></td>
            </tr>
            <tr>
                <td>ផ្ទៃក្រឡា = <?php echo (empty($_POST['a']) || empty($_POST['b'])) ? 0 : ($_POST['a'] * $_POST['b']) ?></td>
            </tr>
        </table>
    </form>
</body>
</html>