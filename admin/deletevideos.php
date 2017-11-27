<?php
include 'db.php';
$vid=$_GET['id'];
$deltcmnd="DELETE from videos where videoid=".$vid;
$rs=  mysqli_query($con, $deltcmnd)or die(mysqli_errno($con));
header("Location:listvideos.php?s=1");
?>
