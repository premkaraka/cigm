<?php
if (!isset($subcatid)) {
    $subcatid = 0;
}
include 'db.php';
$slctCmd = "select g.*, c.catName from  galimages g join category c on c.catid=g.catid join subcategory s on s.subcatid=g.subcatid"
        . " where g.catid=" . $subcatid . " order by g.postdate  desc limit 10";
$rs = mysqli_query($con, $slctCmd);
$imagesExists = false;
while ($row = mysqli_fetch_object($rs)) {
    $imagesExists = true;
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
if (!$imagesExists) {
    echo('<div class="alert alert-info"> Images will be available soon.</div>');
}
?>
