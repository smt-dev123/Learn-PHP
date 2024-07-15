<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo (!empty($_POST['title'])) ? $_POST['title'] : "SMT"; ?>
    </title>
    <style>
        form input {
            padding: 10px;
            margin: 10px;
            width: 250px;
            outline: none;
            border: 1px solid #ccc;
            transition: all .5s;
        }

        form input:focus {
            border: 1px solid #000;
        }
    </style>
</head>

<body style="background: 
                        <?php //echo (!empty($_POST['bg_color'])) ? "#".$_POST['bg_color'] : "#fff";
                        if (!empty($_POST['bg_color'])) {
                            echo "#" . $_POST['bg_color'] . ";";
                        } else {
                            echo "#fff";
                        }
                        ?>;">
    <h2>Hello PHP</h2>
    <form action="" method="post">
        <input type="text" placeholder="Background Color" name="bg_color" value="<?php if (!empty($_POST['bg_color'])) echo $_POST['bg_color']; ?>"><br>
        <input type="text" placeholder="Title Page" name="title" value="<?php if (!empty($_POST['title'])) echo $_POST['title']; ?>"><br>
        <input type="text" placeholder="search" name="search" value="<?php if (!empty($_POST['search'])) echo $_POST['search']; ?>">
        <input type="submit" value="Set" name="set" style="cursor: pointer;"><br>
    </form>

    <pre>
        <?php
            $car = array("ford", "hyundai", "toyota", "mercedes", "jeep");
            $car[] = "rollroyce";
            $car[] = "nissan gtr nismo";

            print_r($car);

        ?>
    </pre>
    <form action="" method="post">
        <input type="text" placeholder="បញ្ចូលលេខ" name="num1">
        <input type="submit" value="set" name="set">
    </form>
        <?php
            if (is_int($_POST['num1'])) {
                echo "varibale is interger!";
            } elseif (is_int($_POST['num1'])) {
                echo "varibale is fload";
            }
        ?>
    <?php
        // echo "<br> Len: ", strlen($_POST["bg_color"]);
        // echo "<br> count: ",str_word_count($_POST['title']);
        // echo "<br> revers: ", strrev($_POST['title']);
        // echo "<br> pos: ", strpos($_POST['title'], $_POST['search']);

        // $int = 30;
        if (is_int($_POST['num1'])) {
            echo "varibale is interger!";
        } elseif (is_int($_POST['num1'])) {
            echo "varibale is fload";
        }
    ?>

    <!--  -->
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <table>
            <tr>
                <td><input type="text" placeholder="កាំរង្វង់" name="R"></td>
            </tr>
            <tr>
                <td><input type="submit" value="run" name="result"></td>
            </tr>
            <tr>
                <td>បរិមាណ = 0 <?php echo (empty($_POST['R'])) ? NULL : 2 * pi() * $_POST['R'] ?></td>
            </tr>
            <tr>
                <td>ក្រឡាផ្ទៃ = 0 <?php echo (empty($_POST['R'])) ? NULL : pi() * $_POST['R'] * $_POST['R'] ?></td>
            </tr>
        </table>
    </form>
    <?php
        $var = array(168, 111, 150, 2424);
        echo "<br>", max($var);
        echo "<br>", min($var);

        echo "<br>", abs(-50);
        echo "<br>", rand(1, 100);
        echo "<br>", sqrt(100);
        echo "<br>", round(5.6);

    ?>

    <h2>string</h2>
    <?php
        $x = 1;
        $y = 2;
        echo $x.$y;
    ?>
</body>

</html>