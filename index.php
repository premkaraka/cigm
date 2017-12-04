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
                                    <a href="children.php" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="blog-post.html">Children Ministry</a></h4>
                            <p class="intro">India is home to 440 million children out of which 136 million live in poverty. It also has 2 million children are facing the death before their first birthday due to lack of Immunizations and medical facilities.</p>
                            <p class="read-more"><a href="children.php" class="btn btn-template-main">Continue reading</a>
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
                                    <a href="homeless.php" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="homeless.php">Homless Ministry</a></h4>
                            <p class="intro">Our Ministry Cares the Homeless people , They are old aged peoples, they have don't have children to take care of them, they usually sleep on road side, Under Bridges, in front of shops, it is very horrible to see them in such situations</p>
                            <p class="read-more"><a href="homeless.php" class="btn btn-template-main">Continue reading</a>
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
                                    <a href="tribal.php" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="tribal.php">Tribal Ministry</a></h4>
                           
                            <p class="intro">We and our co-workers will travel to agency remote tribal areas to the share the Love of Christ.They are fully rock labourers,idol worshipers. There is no proper transport connectivity.So, we have to walk around 15km per day</p>
                            <p class="read-more"><a href="tribal.php" class="btn btn-template-main">Continue reading</a>
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
                                    <a href="youth.php" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                </p>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="youth.php">Youth Ministry</a></h4>
                            
                            <p class="intro">Do greatest at in learning steepest. Breakfast extremity suffering one who all otherwise suspected. He at no nothing forbade up moments. Wholly uneasy at missed be of pretty whence. John way sir high than law who week.</p>
                            <p class="read-more"><a href="youth.php" class="btn btn-template-main">Continue reading</a>
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

                </div>
            </div>

            <div class="row portfolio">
                <?php
                $slctCmd = "select c.catid, c.catName, g.imgname from category c join galimages g on c.catid=g.catid where c.delbit=0 group by c.catid order by c.catname";
                $rs = mysqli_query($con, $slctCmd);
                while ($row = mysqli_fetch_object($rs)) {
                    ?>
                    <div class="col-sm-4">
                        <div class="box-image">
                            <div class="image">
                                <img src="admin/images/gallery/<?php echo($row->imgname); ?>" alt="<?php echo($row->catName); ?>" class="img-responsive">
                            </div>
                            <div class="bg"></div>
                            <div class="name">
                                <h3><a href="gallery.php?c=<?php echo($row->catid); ?>"><?php echo($row->catName); ?></a></h3> 
                            </div>
                            <div class="text">
                                <p class="buttons">
                                    <a href="gallery.php?c=<?php echo($row->catid); ?>" class="btn btn-template-transparent-primary">View</a>
                                </p>
                            </div>
                        </div>
                        <!-- /.box-image -->

                    </div>
                    <?php
                }
                ?>


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



