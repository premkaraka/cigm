<?php
include 'ss.php';
?>

<?php
include 'db.php';
$imgid=$_GET['id'];
$subcatid=$_GET['subcatid'];
$catid=$_GET['catid'];

$selcmnd="select imgname from galimages where imgid=".$imgid;
$res= mysqli_query($con, $selcmnd);
if($row= mysqli_fetch_object($res)){
    $imgname=$row->imgname;
    
    unlink('images/gallery/'.$imgname);
}
$deltcmnd="DELETE from galimages where imgid=".$imgid;
$rs=  mysqli_query($con, $deltcmnd);

header("Location:editgallery.php?s=2&subcatid=$subcatid&catid=$catid");
?>