<!-- Header -->
<?php include_once 'composer/menu_top.php';
?>
<!-- Content -->
        <div id="slide" class="center">
            Slide
        </div>
        <div id="row">
                <?php 
                    //error_reporting(E_ERROR | E_PARSE);
                    if(empty($_GET["val"])){
                        include("./page/home.php");
                    }else{
                        include("./page/". $_GET["val"].".php");
                    }
                    // $val = (empty($_GET["val"])) ? include("./page/home.php") : include("./page/". $_GET["val"].".php");
                ?>
        </div>
<!-- Footer -->
<?php include_once 'composer/menu_footer.php';
?>