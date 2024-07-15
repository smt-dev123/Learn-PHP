<div class="title width-60">
    <div class="category">
        <p>Free Books<p>
        <a href="">All ></a>
    </div>
</div>

<div class="content">
    <div class="item">
    <?php
        for($i = 5; $i <= 8 ; $i++){
        ?>
            <div class="row">
                <div class="thum">
                    <div class="image">
                        <img src="./img/shop/shopthumb00<?php echo $i ?>.jpg" alt="">
                    </div>
                    <div class="blog-tag">
                        <span>Library</span>
                    </div>
                </div>
                <div class="cont">
                    <div class="title"><a href="single.php"><h3>Title <?php echo $i ?></h3></a></div>
                    <div class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
                    <div class="tag-blog">
                        <span class="date">Free</a></span>
                        <span class="blog-name">By <a href="">SMT</a></span>
                    </div>
                </div>
            </div>
            <?php
            }
        ?>
    </div>
</div>

<!--  -->
<div class="title width-60">
    <div class="category">
        <p>Buy Books<p>
        <a href="">All ></a>
    </div>
</div>

<div class="content">
    <div class="item">
    <?php
        for($i = 1; $i <= 4 ; $i++){
        ?>
            <div class="row">
                <div class="thum">
                    <div class="image">
                        <img src="./img/shop/shopthumb00<?php echo $i ?>.jpg" alt="">
                    </div>
                    <div class="blog-tag">
                        <span>Library</span>
                    </div>
                </div>
                <div class="cont">
                    <div class="title"><a href="single.html"><h3>Title <?php echo $i ?></h3></a></div>
                    <div class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
                    <div class="tag-blog">
                        <span class="date">Price <a href="">5$</a></span>
                        <span class="blog-name">By <a href="">SMT</a></span>
                    </div>
                </div>
            </div>
            <?php
            }
        ?>
    </div>
</div>