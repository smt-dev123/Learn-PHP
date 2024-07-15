<!-- Header -->
<?php include_once 'composer/menu_top.php';
?>
<!-- Content -->
        <div id="wrap">
            <div id="content"  class="center">
                <?php 
                    //error_reporting(E_ERROR | E_PARSE);
                    if(empty($_GET["val"])){
                        include("./page/home.php");
                    }else{
                        include("./page/". $_GET["val"].".php");
                    }
                ?>
            </div>
            <div id="nav_right"  class="center">
                nav_right
            </div>
        </div>
<!-- Footer -->
<?php include_once 'composer/menu_footer.php';
?>