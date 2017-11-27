<?php
include 'db.php';
$subcatid=$_GET['subcatid'];
$catid=$_GET['catid'];

$select="select * from galimages where subcatid=".$subcatid;
$rs=  mysqli_query($con, $select) or die(error($con));

while($row=mysqli_fetch_object($rs)){
unlink('images/gallery/'.$row->imgname);
} 


$deltcmnd="delete from galimages where subcatid=".$subcatid;
$rs=  mysqli_query($con, $deltcmnd)or die(error($con));

$deltcmd="delete from subcategory where subcatid=".$subcatid;
$rs=  mysqli_query($con, $deltcmd) or die(error($con)); 

header("Location:listgallery.php?s=3");

?>