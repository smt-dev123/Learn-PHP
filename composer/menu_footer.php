        <div id="menu_footer" class="center">
            menu_footer
        </div>
        <div id="footer">
            <p> 
                &copy; Copyright
                <?php 
                $copyYear = 2024; 
                $curYear = date('Y'); 
                echo $copyYear . (($copyYear != $curYear) ? ' - ' . $curYear : '');
                ?>
                <a href="#">SMT Learning</a> All rights reserved.
            </p>
        </div>
    </div>