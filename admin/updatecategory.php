<?php
include 'ss.php';
?>
<?php
include 'db.php';
include 'class.upload.php';

$catname=$_POST['catname'];

$catid=$_POST['id'];



$updtcmd="update category set catName='".unqut($catname)."' where catid=".$catid;

mysqli_query($con, $updtcmd) or die(mysqli_errno($con));
 

?>
<script>
    window.location.href='listcategory.php?s=1';
</script>
