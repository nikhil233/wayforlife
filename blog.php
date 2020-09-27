<?php
require('header.php');
$sql="SELECT * from blog order by id desc";
$result=$crud->getData($sql);
?>
<style>
.blog-body a{
    color: #e8a87c !important;
}
.blog-body a:hover{
    text-decoration:underline;
}

</style>
<section class="banner-top" style="background-image: linear-gradient(to bottom,  rgb(104 133 154 / 88%), rgb(0 0 0 / 52%)), url(./img/passion/work4.jpg);">
        <div class="container">
      <div class="content">
       
                    <div class="banner_text text-center">
                        <div class="banner_text_iner" >
                            <h1>BLOG</h1>
                            
                                
                        </div>
                    </div>
               
      </div>
      </div>
      <!-- <img src="https://png.pngtree.com/thumb_back/fw800/back_our/20190622/ourmid/pngtree-gorgeous-technology-dot-line-structure-banner-background-image_210889.jpg" alt=""> -->
      <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L20,149.3C40,139,80,117,120,112C160,107,200,117,240,106.7C280,96,320,64,360,58.7C400,53,440,75,480,101.3C520,128,560,160,600,144C640,128,680,64,720,42.7C760,21,800,43,840,96C880,149,920,235,960,250.7C1000,267,1040,213,1080,186.7C1120,160,1160,160,1200,144C1240,128,1280,96,1320,96C1360,96,1400,128,1420,144L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    
    </section>
    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Search</button>
                            </form>
                        </aside>

                       <style>
                           .nav-link{
                               text-decoration:none;
                           }
                       </style>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>
                            <ul class="nav nav-tabs">
                            <?php
                            $i=1;
                            
                            $areacontroller='false';
                            foreach ($result as $res) {
                                $active='';
                                if($i==1){
                                    $active="active";
                                    $areacontroller='true';
                                }
                            ?>
                           <li class="<?php echo $active ?> mt-3"><a data-toggle="tab" href="#tab<?php echo $i ?>">
                            <div class="media post_item">
                                <img src="<?php echo SITE_BLOG_IMAGE.$res['blog_image']?>" alt="post" style="width:120px;">
                                <div class="media-body">
                                    
                                        <h3><?php echo $res['blog_title']?></h3>
                                   
                                    <p><?php echo $res['added_on']?></p>
                                </div>
                            </div>
                            </a></li>
                            <?php
                            $i++;
                            }
                            ?>
                            <!-- <div class="media post_item">
                                <img src="img/post/post_2.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>The Amazing Hubble</h3>
                                    </a>
                                    <p>02 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/post/post_3.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Astronomy Or Astrology</h3>
                                    </a>
                                    <p>03 Hours ago</p>
                                </div>
                            </div>
                            <div class="media post_item">
                                <img src="img/post/post_4.png" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>Asteroids telescope</h3>
                                    </a>
                                    <p>01 Hours ago</p>
                                </div>
                            </div> -->
                        </aside>
                        


                      

                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <div class="tab-content">
                        <?php
                            $i=1;
                            $areacontroller='false';
                            foreach ($result as $res) {
                                $activea='';
                                if($i==1){
                                    $activea="in active show";
                                    $areacontroller='true';
                                }
                        ?>
                        <div id="tab<?php echo $i ?>" class="tab-pane fade <?php echo $activea ?>">
                            <h1><?php echo $res['blog_title'] ?></h1>
                            <img src="<?php echo  SITE_BLOG_IMAGE.$res['blog_image'] ?>" alt="">
                            
                            <p class="blog-body"><?php echo $res['blog_body'] ?></p>

                            <div class="auth mt-3" style="padding:20px 60px; background-color:#ececec;">
                                <h2>Author : <?php echo $res['blog_author'] ?></h2>
                            <p>Adde on:<?php echo $res['added_on'] ?></p>
                            </div>
                        </div>

                        <?php
                         $i+=1;
                        }
                        ?>
                        </div>
                        
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

    <!-- footer part start-->
    <?php
require('footer.php');
?>