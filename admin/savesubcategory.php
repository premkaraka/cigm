<?php
include 'ss.php';
?>
<?php
include 'db.php';

$subcatname=$_POST['subcatname'];
$catname=$_POST['catname'];
$InsCmd="insert into subcategory(subcatname,catid) values('".$subcatname."','".$catname."')";
mysqli_query($con, $InsCmd) or die(mysqli_errno($con));
?>

<script>
    window.location.href='subcategory.php?s=1';
</script>
