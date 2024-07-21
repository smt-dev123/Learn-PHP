<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>សមីការដឺក្រេទី២</title>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <td>
                    <input type="text" name="a" value="0">y<sup>2</sup>
                </td>
                <td>
                    <input type="text" name="b" value="0">y
                </td>
                <td>
                    <input type="text" name="c" value="">
                </td>
                <td> =0</td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="submit" value="run" name="run">
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <?php
                    $a = (empty($_POST["a"]) ? 1 : $_POST["a"]);
                    $b = (empty($_POST["b"]) ? 1 : $_POST["b"]);
                    $c = (empty($_POST["c"]) ? 1 : $_POST["c"]);

                    // $_POST["a"] = null;
                    // $_POST["b"] = -2;
                    // $_POST["c"] = -3;
                    // $a = 1?? $_POST["a"];
                    // $b = 1?? $_POST["b"];
                    // $c = 1?? $_POST["c"];

                    $t = ($b ** 2) - (4 * $a * $c);
                    // echo $t;
                    $t = sqrt($t);
                    $x1 = ((0 - $b) - $t) / (2 * $a);
                    $x2 = ((0 - $b) + $t) / (2 * $a);
                    echo    ' X<sub>1</sub> = ', $x1,
                            ' & X<sub>2</sub> = ', $x2;
                    ?>

                </td>
            </tr>
        </table>
    </form>
</body>

</html>