<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Group 1</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css<?php echo "?t=".time();?>" />
    <link rel="stylesheet" href="./css/fontawesome-free-6.4.2-web/css/all.min.css">
    <script src="js/jquery-3.7.1.min.js <?php echo "?t=".time();?>"></script>
</head>
<body>
    
    <?php
        if(empty($_GET["template"])){$_GET["template"]=1;}
        include ("template/template".$_GET["template"].".php");
    ?>

    <!-- Scroll to Top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
    <!-- Link -->
    <script src="./js/script.js<?php echo "?t=".time();?>"></script>

</body>
</html>