<div class="content">
    <div class="title width-60">
        <div class="category">
            <p>មហាវិទ្យាល័យវិទ្យាសាស្រ្ដ និងបច្ចេកវិទ្យា<p>
            <a href="">All ></a>
        </div>
    </div>
    <div class="item">
    <?php
        for($i = 1; $i <= 8 ; $i++){
        ?>
            <div class="row">
                <div class="thum">
                    <div class="image">
                        <img src="./img/blog/cu-<?php echo $i ?>.jpg" alt="">
                    </div>
                    <div class="blog-tag">
                        <span>AU</span>
                    </div>
                </div>
                <div class="cont">
                    <div class="title"><a href="index.php?val=single&template=2"><h3>Title <?php echo $i ?></h3></a></div>
                    <div class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
                    <div class="tag-blog">
                        <span class="date">29/January/2024</span>
                        <span class="blog-name">By <a href="">SMT</a></span>
                    </div>
                </div>
            </div>
        <?php
        }
    ?>
    </div>
</div>

<div class="content">
    <div class="title width-60">
        <div class="category">
            <p>មហាវិទ្យាល័យសុខភាពសាធារណៈ<p>
            <a href="">All ></a>
        </div>
    </div>
    <div class="item">
    <?php
        for($i = 1; $i <= 8 ; $i++){
        ?>
            <div class="row">
                <div class="thum">
                    <div class="image">
                        <img src="./img/blog/cu-<?php echo $i ?>.jpg" alt="">
                    </div>
                    <div class="blog-tag">
                        <span>AU</span>
                    </div>
                </div>
                <div class="cont">
                    <div class="title"><a href="single.html"><h3>Title <?php echo $i ?></h3></a></div>
                    <div class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</div>
                    <div class="tag-blog">
                        <span class="date">29/January/2024</span>
                        <span class="blog-name">By <a href="">SMT</a></span>
                    </div>
                </div>
            </div>
            <?php
            }
        ?>
    </div>
</div>