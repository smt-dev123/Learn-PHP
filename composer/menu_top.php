<?php 
$activePage = basename($_SERVER['HTTP_REFERER'], ".php");
echo ($activePage);
?>


<div id="body">
    <div id="banner" class="center">
        banner
    </div>
    <div id="menu_top">
        <div class="logo">
            <a href="./index.php"><img src="./img/SMT-Design LOGO B.png" alt=""></a>
        </div>
        <div class="menu" id="menu_hidden">
            <ul>
                <li><a class="<?= ($activePage == 'index') ? 'active':''; ?>" href="./index.php">Home</a></li>
                <li><a href="#">Teacher</a>
                    <ul>
                        <li><a href="#">IT</a></li>
                        <li><a href="#">CS</a></li>
                    </ul>
                </li>
                <li><a href="#">Student</a>
                    <ul>
                        <li><a href="#">IT</a></li>
                        <li><a href="#">CS</a>
                        </li>
                    </ul>
                </li>
                <li><a href="./library" class="<?= ($activePage == 'library') ? 'active':''; ?>">Library</a></li>
                <li><a href="./question">Question</a></li>
                <li><a href="index.php?val=contact" class="<?= ($activePage == 'index.php?val=contact') ? 'active':''; ?>">CONTACT US</a></li>
                <li><a href="index.php?val=about">ABOUT US</a></li>
                <!-- <li><a href="index.php?val=single&template=2">Template 2</a></li> -->
                <!-- <li><a href="index.php?val=page">Page</a></li> -->
            </ul>
        </div>
        <div class="search">
            <div class="icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <!-- <input type="text" placeholder="Search..."> -->
        </div>
    </div>