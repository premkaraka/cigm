<?php
include 'ss.php';
?>
<?php
include 'db.php';
include 'class.upload.php';
$subcatname=$_POST['subcatname'];
$subcatid=$_GET['id'];
$catid=$_POST['catid'];
$updatecmnd="update subcategory set subcatname='".$subcatname."' where subcatid=".$subcatid ; ;

$rs = mysqli_query($con, $updatecmnd)or die(mysqli_errno($con));
//$galid=  mysqli_insert_id($con);
$totFiles = count($_FILES['gfile']['name']);
for ($i = 0; $i < $totFiles; $i++) {
    $f = new upload($_FILES['gfile']['tmp_name'][$i]);
    $fname = uniqid();// $galid . '-' . ($i + 1);
    $f->file_new_name_body = $fname;
    $f->image_resize = true;
    $f->image_convert = 'png';
    $f->image_x = 300;
    $f->image_ratio_y = true;
    $f->Process('images/gallery');
    if ($f->processed) {

        $f->Clean();
        $Inscmnd = "insert into galimages(catid,subcatid,imgname) values(".$catid."," . $subcatid . ", '" . $fname . ".png')";
        mysqli_query($con, $Inscmnd);
       header("Location:editgallery.php?s=1&subcatid=".$subcatid."&catid=".$catid);
    }
    
    else {
        echo 'error : ' . $f->error;
    }
}


?>
