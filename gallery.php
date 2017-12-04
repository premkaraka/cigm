<?php
include 'webparts/topheader.php';
include 'db.php';
?>

<!-- /#content -->
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>Gallery</h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>

                    <li>Gallery</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">






    </div>
    <!-- /.container -->


</div>

<div id="content" class="team-member-detail">
    <div class="container">

        <section>

            <div class="row">
                <div class="col-md-4">
                    <div class="heading">
                        <h3>Categories</h3>
                    </div>
                    <?php
                    $catid = 0;
                    if (isset($_GET['c'])) {
                        $catid = $_GET['c'];
                    }
                    $scatid = 0;
                    if (isset($_GET['s'])) {
                        $scatid = $_GET['s'];
                    }
                    ?>
                    <ul class="ul-icons lead">
                        <?php
                        $slctCmd = "select * from category where delbit=0 order by catName";
                        $rs = mysqli_query($con, $slctCmd);
                        while ($row = mysqli_fetch_object($rs)) {
                            ?>
                            <li><i class="fa fa-check"></i>
                                <a  href="gallery.php?c=<?php echo($row->catid) ?>">
                                    <?php
                                    echo($row->catName);
                                    ?>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="cold-md-12">
                            <div class="heading">
                                <?php
                                if ($catid != 0 && $scatid == 0) {
                                    $slctCmd = "select c.catname from category c where c.catid=" . $catid;
                                    $rs = mysqli_query($con, $slctCmd);
                                    if ($row = mysqli_fetch_object($rs)) {
                                        echo ('<h3>' . $row->catname . '</h3>');
                                    }
                                }
                                if ($catid != 0 && $scatid != 0) {
                                    $slctCmd = "select c.catname, s.subcatname from category c join subcategory s on c.catid=s.catid where c.catid=" . $catid . " and "
                                            . "s.subcatid=" . $scatid;
                                    $rs = mysqli_query($con, $slctCmd);
                                    if ($row = mysqli_fetch_object($rs)) {
                                        echo ('<h3>' . $row->catname . ' &gt;&gt; ' . $row->subcatname . '</h3>');
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="row portfolio">
                        <?php
                        //Displays Subcategories.
                        if ($catid != 0 && $scatid == 0) {

                            $slctCmd = "select s.*, g.imgname from subcategory s join galimages g on s.catid=g.catid and s.subcatid=g.subcatid"
                                    . " where s.catid=" . $catid . " and s.delbit=0 group by s.subcatid order by s.subcatname";

                            $rs = mysqli_query($con, $slctCmd);
                            while ($row = mysqli_fetch_object($rs)) {
                                ?>
                                <div class="col-sm-4">
                                    <div class="box-image">
                                        <div class="image">

                                            <img src="admin/images/gallery/<?php echo($row->imgname); ?>" alt="<?php echo($row->subcatname); ?>" class="img-responsive">

                                        </div>
                                        <div class="bg"></div>
                                        <div class="name">
                                            <h3><a href="gallery.php?c=<?php echo($row->catid); ?>&s=<?php echo($row->subcatid); ?>"><?php echo($row->subcatname); ?></a></h3> 
                                        </div>
                                        <div class="text">
                                            <p class="buttons">
                                                <a href="gallery.php?c=<?php echo($row->catid); ?>&s=<?php echo($row->subcatid); ?>" class="btn btn-template-transparent-primary">View</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /.box-image -->

                                </div>
                                <?php
                            }
                        }
                        if ($catid != 0 && $scatid != 0) {
                            $slctCmd = "select g.*, s.subcatname from galimages g join subcategory s on g.catid=s.catid and g.subcatid=s.subcatid"
                                    . " where g.catid=" . $catid . " and g.subcatid=" . $scatid . " order by g.postdate desc";

                            $rs = mysqli_query($con, $slctCmd);
                            while ($row = mysqli_fetch_object($rs)) {
                                ?>
                                <div class="col-sm-4">
                                    <a href="admin/images/gallery/<?php echo($row->imgname) ?>" rel="prettyPhoto[pp_gal]"> 
                                        <img height="150px" src="admin/images/gallery/<?php echo($row->imgname) ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <?php
                            }
                        }
                        ?>




                    </div>
                </div>
            </div>
        </section>



    </div>
    <!-- /.container -->


    <!-- /.bar -->

</div>
<!-- /#content -->















<!-- *** FOOTER ***
_________________________________________________________ -->


<!-- /#footer -->
<?php
include 'webparts/footerheader.php';
?>




