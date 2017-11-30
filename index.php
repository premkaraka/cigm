<?php
include 'populator.php';
include 'webparts/topheader.php';
?>
<?php

include 'webparts/slider.php';
?>

<section class="bar background-white no-mb">
    <div class="container">

        <div class="col-md-12">
            <div class="heading text-center">
                <h2>Change Gospel Ministries India</h2>
            </div>

            <p class="lead"><strong class="text-italic">"Pure religion and undefiled before God and the Father is this, To visit the fatherless and widows in their affliction and to keep 
                    himself unspotted from the world". James - 1:27</strong><a href="#"> <span class="accent">Continue Reading!</span> </a>
            </p>

            <!-- *** BLOG HOMEPAGE ***
_________________________________________________________ -->

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="img/portfolio-4.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="blog-post.html">Children Ministry</a></h4>
                            <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                            </p>
                            <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                            <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image-text -->

                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="img/portfolio-3.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="blog-post.html">Homless Ministry</a></h4>
                            <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                            </p>
                            <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                            <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image-text -->

                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="img/portfolio-5.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="blog-post.html">Tribal Ministry</a></h4>
                            <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                            </p>
                            <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                            <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image-text -->

                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="box-image-text blog">
                        <div class="top">
                            <div class="image">
                                <img src="img/portfolio-6.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="bg"></div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="blog-post.html">Youth Ministry</a></h4>
                            <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                            </p>
                            <p class="intro">Am terminated it excellence invitation projection as. She graceful shy believed distance use nay. Lively is people.</p>
                            <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image-text -->

                </div>

            </div>
            <!-- /.row -->

            <!-- *** BLOG HOMEPAGE END *** -->

        </div>

    </div>
    <!-- /.container -->
</section>
<!-- /.bar -->


<!-- *** GET IT ***
_________________________________________________________ -->

<!--<div id="get-it">
    <div class="container">
        <div class="col-md-12 col-sm-12">
            <h3 class="text-danger" >"Pure religion and undefiled before God and the Father is this, To visit the fatherless and widows in their affliction and to keep 
himself unspotted from the world". James - 1:27</h3>
        </div>
      
    </div>
</div>


<!-- *** GET IT END *** -->
<section class="bar background-pentagon no-mb">
    <div class="container" data-animate="fadeInUpBig">
        <div class="row">
            <div class="col-md-12">
                              <?php
                                $str = getDailyBread();
                                $arr = explode('%%', $str);
                                ?>
                <div class="heading text-center">
                    <h2>Today's Word of Faith</h2>
                </div>

                <h2>  <p class="heading lead colour text-center text-success"><strong>"<?php echo($arr[0]); ?>" </strong></p></h2>
                <h4><p class=" heading lead text-center text-info"><strong>Ref: <?php echo($arr[1]); ?></strong></p> </h4>




                <div class="see-more text-warning">
                    <h3><p><b>Do you want to be a part of our work ?</b></p> </h3>

                    <a href="donations.php" class="btn btn-template-main">Donate to our work</a>
                </div>

            </div>

        </div>
    </div>
</section>







<section class="bar background-white no-mb">
    <div class="container">

        <section>

            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Our Work</h2>
                    </div>

                    <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                        ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>
            </div>

            <div class="row portfolio">

                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->

                </div>

                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-2.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->

                </div>

                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-3.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->

                </div>

                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-4.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->
                </div>

                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-5.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->
                </div>

                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-6.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->
                </div>

                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-7.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->
                </div>
                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-9.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->
                </div>
                <div class="col-sm-4">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-8.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="hidden-sm">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->
                </div>

            </div>


        </section>

    </div>
    <!-- /.container -->

</section>
<!-- /.bar -->







<!-- *** FOOTER ***
_________________________________________________________ -->


<?php

include 'webparts/footerheader.php';
?>



