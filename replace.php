<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replace</title>
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

<body style="text-align: center;">
    <h2>Hello PHP</h2>
    <form action="" method="post">
        <input type="text" placeholder="Text" name="text" value="<?php if(!empty($_POST['text'])) echo $_POST['text'];?>"><br>
        <input type="text" placeholder="Find" name="find" value="<?php if(!empty($_POST['find'])) echo $_POST['find'];?>"><br>
        <input type="text" placeholder="Replace" name="replace" value="<?php if(!empty($_POST['replace'])) echo $_POST['replace'];?>"><br>
        <input type="submit" value="Run" name="run" style="cursor: pointer;"><br>
    </form>
    
    <?php
        $find = str_replace($_POST["find"],$_POST["replace"],$_POST["text"]);
        echo $find;
    ?>
</body>
</html>