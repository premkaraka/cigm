<?php
include 'ss.php';
?>
<?php
include 'db.php';
$catid=$_GET['id'];

$updatecmnd="update category set delbit=1 where catid=".$catid;

$rs=mysqli_query($con, $updatecmnd) or die(mysqli_error($con));






header("Location:listcategory.php?s=2");
?>