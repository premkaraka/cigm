<?php
include 'ss.php';
?>
<?php

include'db.php';
include 'class.upload.php';


$catid = $_POST['catname'];
$subcatid = $_POST['subcat'];







$totFiles = count($_FILES['gfile']['name']);
for ($i = 0; $i < $totFiles; $i++) {
    $f = new upload($_FILES['gfile']['tmp_name'][$i]);
    $fname = uniqid(); // $galid . '-' . ($i + 1);
    $f->file_new_name_body = $fname;
    $f->image_resize = true;
    $f->image_convert = 'png';
    $f->image_x = 500;
    $f->image_ratio_y = true;
    $f->Process('images/gallery');

    if ($f->processed) {
        global $con;
        $f->Clean();
        $Inscmnd = "insert into galimages(catid,subcatid,imgname,postdate) values('" . $catid . "','" . $subcatid . "','" . $fname . ".png',now())";
       
        mysqli_query($con, $Inscmnd) or die(mysqli_errno($con));
        header("Location:creategallery.php?s=1");
    } else {
        echo 'error : ' . $f->error;
    }
}
?>